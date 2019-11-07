<?php

class AdminHabitaciones extends Admin {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("imagem_list", $data);
        $this->view->load("footer");


    }


}
