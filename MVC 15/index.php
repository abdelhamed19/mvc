<?php
    function loadClasses($class_name){
        $classesPath = './classes/'.$class_name.'.php';
        $controllersPath = './controllers/'.$class_name.'.php';

        if(file_exists($classesPath)){
            require_once($classesPath);
        }else if(file_exists($controllersPath)){
            require_once($controllersPath);
        }    
    }

    spl_autoload_register(loadClasses);

    require_once('routes.php');
?>