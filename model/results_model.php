<?php

class results_model extends Model {

    public function getResultData() {
        $sl = new StretchLeague();
        return $sl->getResultData();
    }

}
