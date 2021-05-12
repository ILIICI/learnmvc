<?php
namespace application\core\views;
use application\core\Views as RootView;

class ContactsViews extends RootView {
    
    public function __construct(){
        parent::__construct();
    }
    public function viewContent(){
        echo "ContactsView<br/>";
    }
}


?>