create view fulltable as
select distinct
	team.team_name as team_name,
    (
		(select count(*) from results_raw where home_team_id = team_id and home_points = 3) +
		(select count(*) from results_raw where away_team_id = team_id and away_points = 3)
    ) as win,
	(
		(select count(*) from results_raw where home_team_id = team_id and home_points = 1) +
		(select count(*) from results_raw where away_team_id = team_id and away_points = 1)
    ) as draw,
	(
		(select count(*) from results_raw where home_team_id = team_id and home_points = 0) +
		(select count(*) from results_raw where away_team_id = team_id and away_points = 0)
    ) as lose,
    (
		select count(*) from results_raw where home_team_id = team_id or away_team_id = team_id
    ) as played,
    (
		(select sum(home_goals_for) from results_raw where home_team_id = team_id) +
        (select sum(away_goals_for) from results_raw where away_team_id = team_id)
    ) as gf,
    (
		(select sum(away_goals_for) from results_raw where home_team_id = team_id) +
        (select sum(home_goals_for) from results_raw where away_team_id = team_id)
    ) as ga,
    (
		(
			(select sum(home_goals_for) from results_raw where home_team_id = team_id) +
			(select sum(away_goals_for) from results_raw where away_team_id = team_id)
		) -
        (
			(select sum(away_goals_for) from results_raw where home_team_id = team_id) +
			(select sum(home_goals_for) from results_raw where away_team_id = team_id)
		)
    ) as gd,
    (
		(select sum(home_points) from results_raw where home_team_id = team_id) +
		(select sum(away_points) from results_raw where away_team_id = team_id)
    ) as points
from
	team
    inner join results_raw on team_id = results_raw.home_team_id or team_id = results_raw.away_team_id
order by
	points desc,
    gd desc,
    gf desc,
    ga desc;
