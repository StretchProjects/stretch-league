<?php

class results extends Controller {

    public $links = ['input'=>'create'];

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->resultsData = $this->model->getResultData();
        $this->view->render("results/index");
    }

    public function input($referee_id = null) {
        if (is_null($referee_id)) {
             $this->view->render("index/index");
        }
        $this->view->resultsInputData = $this->model->getResultsInputData($referee_id);
        $this->view->render("results/input");
    }

}
