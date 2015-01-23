<?php

class Bootstrap {

    function __construct() {

        if (filter_input(INPUT_GET, 'url')) {
            //validate data
            //if page exists, redirect
            //if (page doesnt exist, display error page
            //    url=[league,table,result]
            $url = explode("/", rtrim(filter_var(filter_input(INPUT_GET, 'url'), FILTER_SANITIZE_URL), '/'));

            $file = CONTROLLER_FOLDER . $url[0] . '.php';

            if (file_exists($file)) {
                require_once $file;
                $this->_loadPageFromUrl($url);
            } else {
                $this->_loadPage('error');
            }
        } else {
            //redirect to homepage
            $this->_loadPage('index');
        }
    }

    private function _loadPage($name) {
        require_once CONTROLLER_FOLDER . $name . '.php';
        $controller = new $name();
        $controller->loadModel($name);
        $controller->index();
    }

    private function _loadPageFromUrl($url) {
        $controller = new $url[0]();
        $controller->loadModel($url[0]);

        if (isset($url[2]) && method_exists($controller, $url[1])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1]) && method_exists($controller, $url[1])) {
            $controller->{$url[1]}();
        } else {
            $controller->index();
        }
    }

}
