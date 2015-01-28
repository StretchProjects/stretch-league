create view goalscorers as
select
    player_name,
    team_name,
    count(*) as goals
from
    goalscorer
    inner join player on goalscorer.player_id = player.player_id
    inner join team on team.team_id = goalscorer.team_id
group by
    player_name
order by
    goals desc;
