<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
  and open the template in the editor.
 */

/**
 * Description of Categoriaes
 *
 * @author IFSul
 */
class Categoriaes extends Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->model=new CategoriaDAO();

    }

    public function index() {
      $data['listCategoria'] = $this->model->getListCategoria();


        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("categoria",$data);
        $this->view->load("footer");
    }



}
