<?php

class Controller extends Database{

    public static function CreateView($viewName, $urlParams = null){
        require_once('./views/'.$viewName.'.php');
    }
}

?>