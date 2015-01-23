<?php

class error extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render("error/index");
    }


}