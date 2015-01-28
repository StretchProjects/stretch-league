<?php

class fixtures_model extends Model {

    public function getFixtureData() {
        $db = new Database();
        $dates = $db->select("SELECT DISTINCT fixture_date from fixtures;");
        $fixtures = [];
        for ($i = 0; $i < count($dates); $i++) {
            array_push($fixtures, $db->select(
            "SELECT home_team_name, away_team_name, fixture_time, referee_name, DATE_FORMAT(fixture_date, '%e %M %Y') as fixture_date"
            . " FROM fixtures WHERE fixture_date = " . $dates[$i]['fixture_date'] .";"
            ));
        }
        return $fixtures;
    }

}
