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
      if($data['evento'] = $this->model->getEventoById($id)){
        echo "oidnaoeidn";
      }
      $data['msg'] = "";

              if (filter_input(INPUT_POST,'upd')) {

                $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
                $text = filter_input(INPUT_POST, 'text',FILTER_SANITIZE_STRING);
                $fecha = filter_input(INPUT_POST, 'fecha',FILTER_SANITIZE_STRING);

                if($name && $text && $fecha) {
                      $evento = new Evento($id,$name,$text,$fecha);
                      if ($this->model->updateEvento($evento)) {
                        $this->index();
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

              public function remove($id) {
                $data['obj'] = $this->model->getEventoById($id);
                $data['msg']="";
          
                  if (filter_input(INPUT_POST, 'del')) {
                      $this->model->removeEvento($id);
                      $this->index();
                  } else {
                      $this->view->load('header');
                      $this->view->load('nav');
                      $this->view->load('evento_remove', $data);
                      $this->view->load('footer');
                  }
              }
}
