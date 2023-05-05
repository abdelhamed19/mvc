<?php

class Route {
    public static function get($route, $function){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method !== 'GET'){ return; }
        $struct = self::checkStructure($route, $_SERVER['REQUEST_URI']);
        if($struct){
            $params = self::getParams($route, $_SERVER['REQUEST_URI']);
            $function->__invoke($params);
            die();
        }
    }
    public static function urlToArray($url1, $url2){
        $a = array_values(array_filter(explode('/', $url1), function($val){ return $val !== ''; }));
        $b = array_values(array_filter(explode('/', $url2), function($val){ return $val !== ''; }));
        if(true) array_shift($b);
        return array($a, $b);
    }
    public static function checkStructure($url1, $url2){
        list($a, $b) = self::urlToArray($url1, $url2);
        if(sizeof($a) !== sizeof($b)){
            return false;
        }

        foreach ($a as $key => $value){
            if($value[0] !== ':' && $value !== $b[$key] || $value[0] === ':' && $b[$key][0] === '?'){
                return false;
            }
        }
        return true;
    }
    public static function getParams($url1, $url2){
        list($a, $b) = self::urlToArray($url1, $url2);
        $params = array('params' => array(), 'query' => array());
        foreach($a as $key => $value){
            if($value[0] == ':'){
                $param = explode('?', $b[$key])[0];
                $params['params'][substr($value, 1)] = $param;
            }
        }
        $queryString = explode('?', end($b))[1];
        parse_str($queryString, $params['query']);
        return $params;
    }
}

?>