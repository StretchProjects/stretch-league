<?php

class team extends Controller {

    public $links = ['selection'=>'input'];

    public function __construct() {
        parent::__construct();
    }

    public function profile($teamAlias = null) {
        $this->view->teamData = $this->model->getTeamData($teamAlias);
        $this->view->fixturesData = $this->model->getFixtureData();
        $this->view->resultsData = $this->model->getResultData();
        $this->view->playerData = $this->model->getPlayerData();
        $this->view->render("team/profile");
    }

    public function selection() {
        $this->view->render("team/selection");
    }



}