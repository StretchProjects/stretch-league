<?php

class player_model extends Model {

    private $sl;

    public function __construct() {
        $this->sl = new StretchLeague();
    }

    public function getPlayerData() {
        return $this->sl->getPlayerData();
    }

    public function getPlayerEditData($playerId) {
        return $this->sl->getPlayerEditData($playerId);
    }

    public function updatePlayerData() {
        $playerId = filter_input(INPUT_POST, 'person_id');
        $playerName = filter_input(INPUT_POST, 'person_name');

        $this->sl->updatePlayerData($playerId, $playerName);
    }

}
