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
        $this->view->load("index", $data);
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
                $habitacion = new Habitacion($descripcion, $src, $name,null);
    
                if($this->model->insertHabitacion($habitacion)){
    
                  $this->view->location('AdminHabitaciones');
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar imAgem!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
      }
      else{$data['msg'] = 'Error ao subir habitacion';}
      }
    
      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('habitacion_add', $data);
      $this->view->load('footer');
    }
      public function edit($id) {
        $data['habitacion'] = $this->model->getHabitacionById($id);
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
            $id_hab = filter_input(INPUT_POST, 'id'); 
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $src = $caminho;
            $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
            if ($name && $src && $descripcion ) {
              $habitacion = new Habitacion($descripcion, $src, $name, $id);
    
                if($this->model->updateImg($habitacion)){
                    // $this->view->location($this->url.'/w');
                    $this->view->location($this->config->base_url.'admin');
                    return true;
                } else {
                    $data['msg'] = 'Erro ao editar imAgem!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
      }
      else{$data['msg'] = 'Error ao subir habitacion';}
      }
    
      $this->view->load('header');
      $this->view->load('nav');
      $this->view->load('habitacion_upd', $data);
      $this->view->load('footer');
    
      }


      public function removeHabitacion($id) {
        $data['msg']  = "";
        if (filter_input(INPUT_POST, 'del')) {
            $this->model->removeHabitacion($id);
            $this->index();
        } else {
            $data['habitacion'] = $this->model->getHabitacionById($id);
            $this->view->load('header');
            $this->view->load('nav');
            $this->view->load('habitacion_remove',$data);
            $this->view->load('footer');
        }
    }

}
