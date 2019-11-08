<?php


class Admin extends Controller{
 
    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
    }
    
    public function index() {
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("index");
    }
    
}
