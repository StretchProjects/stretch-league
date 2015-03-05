<?php

class referee extends Controller {

    public $links = [];

    public function __construct() {
        parent::__construct();
    }

    public function edit($refereeId = null) {
        if ($refereeId == null) {
            $this->view->render("index/index");
            return;
        }
        if (filter_input(INPUT_POST, 'run') !== null) {
            //try to input data
            $this->model->updateRefereeData();
        }
        $this->view->refereeData = $this->model->getRefereeData($refereeId);
        $this->view->render("referee/edit");
    }

}
