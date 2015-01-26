<paper-shadow class="card">
<?php

$db = new Database();
//var_dump($db->select("SELECT * from player where player_id = :player_id;", array(':player_id'=>7)));

//echo $db->insert('player', array('player_name'=>'J.Smith'));

//var_dump( $db->select("select * from player where player_id = 301;"));

//var_dump( $db->update('player', array('player_name'=>'AN Example'), 'player_id = 301'));

//var_dump( $db->delete('player', 'player_id=301'));

var_dump( $db->select("select * from player where player_id = 301;"));

?>
</paper-shadow>