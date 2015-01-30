create view team_player_name as
select
    player_name,
    fixture_player.player_id,
    fixture_id
from
    fixture_player
    inner join player on player.player_id = fixture_player.player_id;
