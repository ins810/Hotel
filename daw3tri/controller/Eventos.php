<?php
class Eventos extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new EventoDAO();
    }

    public function index() {
        $data['listEvento'] = $this->model->getListEvento();
        
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("evento_list", $data);
        $this->view->load("footer");
    }

}
