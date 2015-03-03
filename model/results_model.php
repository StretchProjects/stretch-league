<?php

class results_model extends Model {

    public function __construct() {
        $this->sl = new StretchLeague();
    }

    public function getResultData() {
        return $this->sl->getResultData();
    }

    public function getResultsInputData($referee_id) {
        return $this->sl->getResultsInputData($referee_id);
    }

}
