<?php

class player extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->playerData = $this->model->getPlayerData();
        $this->view->render("player/index");
    }

}
