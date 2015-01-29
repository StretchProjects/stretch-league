<?php

class team extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($teamAlias = null) {
        $this->view->teamData = $this->model->getTeamData($teamAlias);
        $this->view->fixturesData = $this->model->getFixtureData();
        $this->view->resultsData = $this->model->getResultData();
        $this->view->playerData = $this->model->getPlayerData();
        $this->view->render("team/index");
    }

    public function selection() {
        $this->view->render("team/selection");
    }



}