<?php

class team extends Controller {

    public $links = ['selection' => 'input'];

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

    public function edit($teamAlias = null) {
        if (filter_input(INPUT_POST, 'run') !== null) {
            //try to input data
            $this->model->updateTeamInputData();
        }
        $this->view->teamData = $this->model->getTeamData($teamAlias);
        $this->view->render("team/edit");
    }

    public function selection($teamAlias) {
        if (filter_input(INPUT_POST, 'run') !== null) {
            //try to input data
            $this->model->updateTeamSelectionData();
        }
        $this->view->teamSelectionData = $this->model->getTeamSelectionData($teamAlias);
        $this->view->render("team/selection");
    }

}
