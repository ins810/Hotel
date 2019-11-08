<?php

class AdminHabitaciones extends Admin {

    public function __construct() {
        parent::__construct();
        $this->model = new HabitacionDAO();

    }

    public function index() {
        $data['listHabitacion'] = $this->model->getListHabitacion();
        $this->view->load("header");
        $this->view->load("nav");
        $this->view->load("habitacion_list", $data);
        $this->view->load("footer");


    }
    public function add() {
        $data['msg'] = '';
    
      if (filter_input(INPUT_POST, 'add')) {
        $caminho = getcwd();
        $diretorio =  $caminho. "/system/upload/";
        // $arquivo = $diretorio . basename($_FILES["arquivo"]["name"]);
        $novonome = rand(1,9999).$_FILES['arquivo']['name'];
        $arquivo = $diretorio . $novonome;
    
        if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo)) {
            $data['msg'] = "Upload do arquivo  ". basename( $_FILES["arquivo"]["name"]). " feito com sucesso .!! <br>";
    
            $caminho = $novonome;
    
            $if = true;
        } else {
            $data['msg'] = "Erro ao subir habitacion";
            $if = false;
        }
        if( $if = true){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $src = $caminho;
            $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
            if ($name && $src && $descripcion ) {
                $img = new Imagem($descripcion, $src, $name,null);
    
                if($this->model->insertImagem($img)){
    
                  $this->view->location('AdminGallery');
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar imAgem!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
      }
      else{$data['msg'] = 'Error ao subir img';}
      }
    
      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('habitacion_add', $data);
      $this->view->load('footer');
    }
      public function edit($id) {
        $data['habitacion'] = $this->model->getImagemById($id);
        $data['msg'] = "";
    
      if (filter_input(INPUT_POST, 'upd')) {
        $caminho = getcwd();
        $diretorio =  $caminho. "/system/upload/";
        // $arquivo = $diretorio . basename($_FILES["arquivo"]["name"]);
        $novonome = rand(1,9999).$_FILES['arquivo']['name'];
        $arquivo = $diretorio . $novonome;
    
        if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo)) {
            $data['msg'] = "Upload do arquivo  ". basename( $_FILES["arquivo"]["name"]). " feito com sucesso .!! <br>";
    
            $caminho = $novonome;
    
            $if = true;
        } else {
            $data['msg'] = "Erro ao subir habitacion";
            $if = false;
        }
        if( $if = true){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $src = $caminho;
            $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
            if ($name && $src && $descripcion ) {
              $img = new Imagem($descripcion, $src, $name,null);
    
                if($this->model->updateImg($img)){
    
                  $this->view->location('AdminGallery');
                    return true;
                } else {
                    $data['msg'] = 'Erro ao editar imAgem!';
    
                    var_dump($data);
                  //
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
      }
      else{$data['msg'] = 'Error ao subir img';}
      }
    
      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('habitacion_upd', $data);
      $this->view->load('footer');
    
      }

}
