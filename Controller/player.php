<?php

class player extends Controller {

    public $links = [];

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->playerData = $this->model->getPlayerData();
        $this->view->render("player/index");
    }

    public function edit($playerId = null) {
        if ($playerId == null) {
            $this->view->render("index/index");
            return;
        }
        if (filter_input(INPUT_POST, 'run') !== null) {
            //try to input data
            $this->model->updatePlayerData();
        }
        $this->view->playerData = $this->model->getPlayerEditData($playerId);
        $this->view->render("player/edit");
    }

}
