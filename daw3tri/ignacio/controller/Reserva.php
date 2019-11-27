<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserva
 *
 * @author IFSul
 */
class Reserva extends Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->model = new ReservaDAO();
    }

    public function index() {
        $data['listReserva'] = $this->model->getListReservaHabitacion();

        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("reserva", $data);
        $this->view->load("footer");
    }

   

}