<?php
class Usuario extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new UsuarioDAO();
    }

    public function index() {
        $data['listUsuario'] = $this->model->getListUsuario();
        
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("Usuario", $data);
        $this->view->load("footer");
    }

}
