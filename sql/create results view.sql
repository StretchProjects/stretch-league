create view results as
select
    home_team.team_name as home_team_name,
    away_team.team_name as away_team_name,
    home_goals_for,
    away_goals_for,
    fixture_date,
    fixture_time,
    home_team.team_id as home_team_id,
    away_team.team_id as away_team_id,
    referee_id,
    fixture.fixture_id
from
    results_raw
    inner join team home_team on home_team.team_id = results_raw.home_team_id
    inner join team away_team on away_team.team_id = results_raw.away_team_id
    inner join fixture on fixture.fixture_id = results_raw.fixture_id
order by
    fixture_date asc,
    fixture_time asc,
    home_team_name asc;
