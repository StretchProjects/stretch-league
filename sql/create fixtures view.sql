create view fixtures as
select
    home_team.team_name as home_team_name,
    away_team.team_name as away_team_name,
    fixture_date,
    fixture_time,
    referee_name
from fixture
    inner join referee on fixture.referee_id = referee.referee_id
    inner join team home_team on fixture.home_team_id = home_team.team_id
    inner join team away_team on fixture.away_team_id = away_team.team_id
where
    fixture_date >= curdate() + 0
order by
    fixture_date asc,
    fixture_time asc,
    home_team_name asc;