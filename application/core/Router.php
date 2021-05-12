<?php
namespace application\core;


class Router {
private $path = 'application/core/controllers/';
    
    function __construct(){
        $this->check_file_exists($this->readURL());
    }
    
    private function readURL(){
        $url = $_SERVER['REQUEST_URI'];
        $url = ucfirst(str_replace("/learnmvc/","",$url));
        return $url;
    }
    
    private function check_file_exists($arg){
        $var = $this->path . $arg . 'Controllers.php';
        //echo $var;
         if(file_exists($var)){
            $this->run();
        }else {
            header("HTTP/1.0 404 Not Found");
        } 
    }
    
    private function validateRoutes(){
        $var = require 'application/core/routes.php';
        $urlHolder = $this->readURL();
        foreach ($var as $key =>$value ) {
            $value_holder = $value['controller'];
            if($value_holder == $urlHolder){
                $setPageController = $path. $urlHolder.'Controllers.php';
                return $setPageController;
            }   
        }
    }

    private function run(){
        require 'application/core/controllers/' . $this->readURL() . 'Controllers.php' ;
        $name = 'application\core\\controllers\\' . $this->readURL() .'Controllers';
        $var = new $name($this->readURL()."Views");
    }
}
?>