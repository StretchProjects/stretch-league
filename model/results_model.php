<?php

class results_model extends Model {

    public function __construct() {
        $this->sl = new StretchLeague();
    }

    public function getResultData() {
        return $this->sl->getResultData();
    }

    public function getResultsInputData($referee_id) {
        $data = $this->sl->getResultsInputData($referee_id); //$data[0][fixture_id]
        for ($i = 0; $i < count($data); $i++) {

            $data[$i]['goalscorers'] = $this->getGoalscorerData($data[$i]['fixture_id']);
        }
        return $data;
    }

    public function getGoalscorerData($fixture_id) {
        return $this->sl->getGoalscorerData($fixture_id);
    }

    public function updateResultsInputData() {
        $data['home_team_id'] = $this->sl->getTeamIdFromName(filter_input(INPUT_POST, 'home_team_name'));
        $data['away_team_id'] = $this->sl->getTeamIdFromName(filter_input(INPUT_POST, 'away_team_name'));
        $data['fixture_id'] = filter_var(filter_input(INPUT_POST, 'fixture_id'), FILTER_SANITIZE_URL);
        var_dump($data); die();
    }

}
