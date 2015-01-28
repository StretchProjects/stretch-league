<?php

class player_model extends Model {

    public function getPlayerData() {
        $db = new Database();
        return $db->select("SELECT * FROM goalscorers;");
    }

}
