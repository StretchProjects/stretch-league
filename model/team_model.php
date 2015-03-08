<?php

class team_model extends Model {

    private $db;
    private $_allTeams;
    private $_teamName;
    private $sl;

    public function __construct() {
        $this->db = new Database();
        $this->sl = new StretchLeague();
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
        return $this->sl->getPlayerData($this->_teamName);
    }

    public function getFixtureData() {
        return $this->sl->getFixtureData($this->_teamName);
    }

    public function getResultData() {
        return $this->sl->getResultData($this->_teamName);
    }

    public function updateTeamInputData() {
        $team_id = $this->sl->getTeamIdFromName(filter_input(INPUT_POST, 'team_name'));
        $team_crest = filter_input(INPUT_POST, 'team_crest');
        $team_manager = filter_input(INPUT_POST, 'team_manager');
        $ground_name = filter_input(INPUT_POST, 'ground_name');
        $ground_capacity = filter_input(INPUT_POST, 'ground_capacity');
        $ground_address = filter_input(INPUT_POST, 'ground_address');
        $team_contact_number = filter_input(INPUT_POST, 'team_contact_number');

        $this->sl->updateTeamData($team_id, $team_crest, $team_manager, $ground_name, $ground_capacity, $ground_address, $team_contact_number);
    }

    public function getTeamSelectionData($teamAlias) {
        $data = $this->sl->getTeamSelectionData($teamAlias);
        $data['available_players'] = array();

        for ($i = 0; $i < count($data['team_players']); $i++) {
            $include = true;
            for ($j = 0; $j < count($data['selected_players']); $j++) {
                if ($data['team_players'][$i]['player_id'] == $data['selected_players'][$j]['player_id']) {
                    $include = false;
                    break;
                }
            }
            if ($include) {
                array_push($data['available_players'], $data['team_players'][$i]);
            }
        }

        return $data;
    }

}
