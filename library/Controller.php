<?php

class Controller {
    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($model) {
        if(file_exists(MODEL_FOLDER . $model . '_model.php')) {
            require_once MODEL_FOLDER . $model . '_model.php';

            $modelName = $model . '_model';
            $this->model = new $modelName();
        }
    }
}
