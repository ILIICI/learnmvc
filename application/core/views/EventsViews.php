<?php
namespace application\core\views;
use application\core\Views as RootView;

class EventsViews extends RootView {
    
    public function __construct(){
        parent::__construct();
    }
    public function viewContent(){
        echo "EventsView<br/>";
    }
}


?>