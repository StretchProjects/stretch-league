create view results_raw_1 as
select
    fixture_id,
    home_team_id,
    (
        select count(*)
        from goalscorer
        where
            fixture_id = fix.fixture_id and
            team_id = home_team_id
    ) as home_score,
    away_team_id,
    (
        select count(*)
        from goalscorer
        where
            fixture_id = fix.fixture_id and
            team_id = away_team_id
    ) as away_score
from fixture fix;
