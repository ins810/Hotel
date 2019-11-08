<?php


class Habitaciones extends Controller {


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
