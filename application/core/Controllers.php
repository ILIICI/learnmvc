<?php
namespace application\core;
require_once 'application/core/Views.php';
require_once 'application/core/Models.php';

class Controllers {
    
    public function __construct($viewName){
        require_once 'application/core/views/' . $viewName . '.php' ;
        $insert = 'application\core\\views\\' . $viewName;
        $objViews = new $insert;
    }
    
    
}
?>