<?php

class player_model extends Model {

    public function getPlayerData() {
        $sl = new StretchLeague();
        return $sl->getPlayerData();
    }

}
