<?php   

spl_autoload_register(function($className) {
    $fileController = 'controller/' . $className . '.class.php';
    $fileModel      = 'model/' . $className . '.class.php';
    if (file_exists($fileModel)) {
        require_once $fileModel;
    }
    if (file_exists($fileController)) {
        require_once $fileController;
    }
});