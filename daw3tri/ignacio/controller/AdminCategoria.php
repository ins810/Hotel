<?php

class AdminCategoria extends Admin {


    public function __construct() {
        parent::__construct();
        $this->model = new CategoriaDAO();
    }

    public function index() {
        $data['listCategoria'] = $this->model->getListCategoria();

                //die;
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("categoria", $data);
        $this->view->load("footer");
    }

    public function add() {
        $data['msg']="";
        if (filter_input(INPUT_POST, 'add')) {
            $title = filter_input(INPUT_POST, 'title',FILTER_SANITIZE_STRING);
            $text = filter_input(INPUT_POST, 'text',FILTER_SANITIZE_STRING);
            if($title  && $text) {
                if($this->model->insertCategoria(new Categoria($title, $text))){
                    $this->view->location('AdminCategoria');
                }else{
                    $data['msg']= "Erro ao cadastrar!!";
                }
            }else{
                $data['msg']= "Preencha todos os campos!";
            }
        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('categoria_add',$data);
        $this->view->load('footer');
    }

    public function removeCategoria($id) {
      $data['categoria'] = $this->model->getCategoriaById($id);
      $data['msg']="";

        if (filter_input(INPUT_POST, 'del')) {
            $this->model->removeCategoria($id);
            $this->index();
        } else {
            $this->view->load('header');
            $this->view->load('nav');
            $this->view->load('categoria_remove', $data);
            $this->view->load('footer');
        }
    }
    public function edit($id) {
      $data['categoria'] = $this->model->getCategoriaById($id);
      $data['msg'] = "";

        if (filter_input(INPUT_POST,'upd')) {

          $title = filter_input(INPUT_POST, 'title',FILTER_SANITIZE_STRING);
          $text = filter_input(INPUT_POST, 'text',FILTER_SANITIZE_STRING);
          $id_categoria = filter_input(INPUT_POST, 'id'); 

          if($title  && $text ) {
                //atualizar no banco de dados a notícia
                $categoria = new Categoria($title, $text,$id);
                if ($this->model->updateCategoria($categoria)) {
                //   $this->view->location($this->view->getUrl()."AdminCategoria");
                $this->index();
                  return true;
                } else {
                  $data['msg'] = 'Erro ao atualizar Notícia!';
                
                }
                } else {
                $data['msg'] = 'Preencha todos os campos!';
                }
                }
                $this->view->load('header');
                $this->view->load('nav');
                $this->view->load('categoria_upd', $data);
                $this->view->load('footer');
                }

                // public function removeCategoria($id) {
                //     $data['msg']  = "";
                //     if (filter_input(INPUT_POST, 'del')) {
                //         $this->model->removeCategoria($id);
                //         $this->index();
                //     } else {
                //         $data['categoria'] = $this->model->getCategoriaById($id);
                //         $this->view->load('header');
                //         $this->view->load('nav');
                //         $this->view->load('categoria_remove',$data);
                //         $this->view->load('footer');
                //     }
                // }
}
