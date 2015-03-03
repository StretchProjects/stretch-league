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
        $run = filter_var(filter_input(INPUT_POST, 'run'), FILTER_SANITIZE_URL);
        $team_id = $this->sl->getTeamIdFromName(filter_input(INPUT_POST, 'team_name'));
        $player_id = filter_var(filter_input(INPUT_POST, 'player_id'), FILTER_SANITIZE_URL);
        $fixture_id = filter_var(filter_input(INPUT_POST, 'fixture_id'), FILTER_SANITIZE_URL);

        if ($run == 'insert') {
            echo $this->sl->insertGoalscorer($team_id, $fixture_id, $player_id);
        } else if ($run == 'delete') {
            echo $this->sl->deleteGoalscorer($team_id, $fixture_id, $player_id);
        }
    }

}
