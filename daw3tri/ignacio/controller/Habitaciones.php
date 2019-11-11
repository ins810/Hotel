<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
  and open the template in the editor.
 */

/**
 * Description of Habitaciones
 *
 * @author IFSul
 */
class Habitaciones extends Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->model=new HabitacionDAO();

    }

    public function index() {
      $data['listHabitacion'] = $this->model->getListHabitacion();


        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("index",$data);
        $this->view->load("footer");
    }



}
