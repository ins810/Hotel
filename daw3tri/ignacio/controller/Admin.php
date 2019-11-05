<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author IFSul
 */
class Admin extends Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
    }
    
    public function index() {
        //echo "ADMIN";
        //die;
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("index");
        $this->view->load("footer");
    }
    
}
