<?php

class results_model extends Model {

    public function getResultData() {
        $db = new Database();
        $dates = $db->select("SELECT DISTINCT fixture_date from results WHERE fixture_date < curdate() + 0 ORDER BY fixture_date DESC;");
        $results = [];
        for ($i = 0; $i < count($dates); $i++) {
            array_push($results, $db->select(
            "SELECT home_team_name, away_team_name, fixture_time, DATE_FORMAT(fixture_date, '%e %M %Y') as fixture_date, home_goals_for, away_goals_for"
            . " FROM results WHERE fixture_date = " . $dates[$i]['fixture_date'] .";"
            ));
        }
        return $results;
    }

}

