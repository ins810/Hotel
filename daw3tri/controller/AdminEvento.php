<?php


class AdminEvento extends Admin {


    function __construct() {
        parent::__construct();
        $this->model = new EventoDAO();
    }

    public function index() {
      $data['listEvento'] = $this->model->getListEvento();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('evento_list',$data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg']="";
        if (filter_input(INPUT_POST, 'add')) {
          $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
          $text = filter_input(INPUT_POST, 'text',FILTER_SANITIZE_STRING);
          $fecha = filter_input(INPUT_POST, 'fecha',FILTER_SANITIZE_STRING);

            if($name && $text && $fecha) {
                if($this->model->insertEvento(new Evento(null,$name,$text,$fecha))){
                    $this->view->location('AdminEvento');
                }else{
                    $data['msg']= "Erro ao cadastrar!!";
                }
            }else{
                $data['msg']= "Preencha todos os campos!";
            }
        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('evento_add',$data);
        $this->view->load('footer');
    }
    public function editEvento($id) {
      $data['news'] = $this->model->getNoticiaById($id);
      $data['msg'] = "";

        if (filter_input(INPUT_POST,'upd')) {

          $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
          $text = filter_input(INPUT_POST, 'text',FILTER_SANITIZE_STRING);
          $fecha = filter_input(INPUT_POST, 'fecha',FILTER_SANITIZE_STRING);


          if($name && $text && $fecha) {
                //atualizar no banco de dados a notícia
                $noticia = new Evento(null,$name,$text,$fecha);
                if ($this->model->updateEvento($evento)) {
                  $this->view->location($this->view->getUrl()."AdminNews");
                  return true;
                } else {
                  $data['msg'] = 'Erro ao atualizar evento!';

                }
                } else {
                $data['msg'] = 'Preencha todos os campos!';
                }
                }
                $this->view->load('header');
                $this->view->load('nav');
                $this->view->load('evento_upd', $data);
                $this->view->load('footer');
                }

}
