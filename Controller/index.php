<?php

class index extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render("index/index");
    }

    public function news() {
        $this->view->render("index/news");
    }


}