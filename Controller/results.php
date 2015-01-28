<?php

class results extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->resultsData = $this->model->getResultData();
        $this->view->render("results/index");
    }

    public function input() {
        $this->view->render("results/input");
    }


}