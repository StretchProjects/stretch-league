<?php

class fixtures extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->fixturesData = $this->model->getFixtureData();
        $this->view->render("fixtures/index");
    }

}