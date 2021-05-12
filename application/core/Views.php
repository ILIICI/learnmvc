<?php
namespace application\core;

abstract class Views {

    function __construct(){
        $this->viewNavbar();
        $this->viewContent();
        $this->viewFooter();
    }
    private function viewNavbar(){
        echo "NavBar<br/>";
    }
    abstract protected function viewContent();

    private function viewFooter(){
        echo "Footer<br/>";
    }
}
?>