<?php

class View {
    public function render($name) {
        require_once VIEW_FOLDER . 'header.php';
        require_once VIEW_FOLDER . $name . '.php';
        require_once VIEW_FOLDER . 'footer.php';
    }

}