<?php

class index_model extends Model {

    public function getTableData() {
        $sl = new StretchLeague();
        return $sl->getTableData();
    }

}
