<?php

    function controllers_autoload($classname){
        include 'controllers/' . $classname . 'Controller.php';
    }

    spl_autoload_register('controllers_autoload');