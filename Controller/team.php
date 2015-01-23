<?php

class team extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render("team/index");
    }

    public function selection() {
        $this->view->render("team/selection");
    }



}