<?php

class team_model extends Model {

    private $db;
    private $_allTeams;
    private $_teamName;

    public function __construct() {
        $this->db = new Database();
    }

    private function _getAllTeams() {
        return $this->db->select("SELECT DISTINCT team_name FROM team_profile;");
    }

    private function _getTeamName($teamAlias) {
        for ($i = 0; $i < count($this->_allTeams); $i++) {
            if (filter_var($this->_allTeams[$i]['team_name'], FILTER_SANITIZE_URL) == $teamAlias) {
                return $this->_allTeams[$i]['team_name'];
            }
        }
        header('Location: /');
    }

    public function getTeamData($teamAlias) {
        if (is_null($teamAlias) || $teamAlias == '') {
            header('Location: /');
        }

        $this->_allTeams = $this->_getAllTeams();
        $this->_teamName = $this->_getTeamName($teamAlias);

        return $this->db->select("SELECT * FROM team_profile WHERE team_name='$this->_teamName'");
    }

    public function getPlayerData() {
        $sl = new StretchLeague();
        return $sl->getPlayerData($this->_teamName);
    }

    public function getFixtureData() {
        $sl = new StretchLeague();
        return $sl->getFixtureData($this->_teamName);
    }

    public function getResultData() {
                $sl = new StretchLeague();
        return $sl->getResultData($this->_teamName);
    }

}
