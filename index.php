<?php

require_once 'config/config.php';

function __autoload($class) {
    require_once LIBRARY_FOLDER . $class . '.php';
}

$app = new Bootstrap();
