create view results_raw as
select
    fixture_id,
    home_team_id,
    home_score as home_goals_for,
    case
        when home_score > away_score then 3
        when away_score > home_score then 0
        else 1
	end as home_points,
    away_team_id,
    away_score as away_goals_for,
    case
        when home_score < away_score then 3
        when away_score < home_score then 0
        else 1
	end as away_points
from results_raw_1;
