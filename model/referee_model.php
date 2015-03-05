<?php

class referee_model extends Model {

    private $sl;

    public function __construct() {
        $this->sl = new StretchLeague();
    }

    public function getRefereeData($refereeId) {
        return $this->sl->getRefereeData($refereeId);
    }

    public function updateRefereeData() {
        $refereeId = filter_input(INPUT_POST, 'person_id');
        $refereeName = filter_input(INPUT_POST, 'person_name');

        $this->sl->updateRefereeData($refereeId, $refereeName);
    }

}
