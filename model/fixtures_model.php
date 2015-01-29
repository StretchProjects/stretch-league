<?php

class fixtures_model extends Model {

    public function getFixtureData() {
        $sl = new StretchLeague();
        return $sl->getFixtureData();
    }

}
