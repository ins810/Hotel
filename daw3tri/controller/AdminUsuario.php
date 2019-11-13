<?php


class AdminUsuario extends Admin {


    function __construct() {
        parent::__construct();
        $this->model = new UsuarioDAO();
    }

    public function index() {
      $data['listUsuario'] = $this->model->getListUsuario();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('usuario_list',$data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg']="";
        if (filter_input(INPUT_POST, 'add')) {
          $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
          $gmail = filter_input(INPUT_POST, 'gmail',FILTER_SANITIZE_STRING);
          $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);

            if($name && $gmail && $password) {
                if($this->model->insertUsuario(new Usuario(null,$name,$gmail,$password))){
                    $this->view->location('AdminUsuario');
                }else{
                    $data['msg']= "Erro ao cadastrar!!";
                }
            }else{
                $data['msg']= "Preencha todos os campos!";
            }
        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('usuario_add',$data);
        $this->view->load('footer');
    }
    public function editUsuario($id) {
      $data['news'] = $this->model->getNoticiaById($id);
      $data['msg'] = "";

        if (filter_input(INPUT_POST,'upd')) {

          $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
          $gmail = filter_input(INPUT_POST, 'gmail',FILTER_SANITIZE_STRING);
          $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);


          if($name && $gmail && $password) {
                //atualizar no banco de dados a notícia
                $noticia = new Usuario(null,$name,$gmail,$password);
                if ($this->model->updateUsuario($usuario)) {
                  $this->view->location($this->view->getUrl()."AdminNews");
                  return true;
                } else {
                  $data['msg'] = 'Erro ao atualizar usuario!';

                }
                } else {
                $data['msg'] = 'Preencha todos os campos!';
                }
                }
                $this->view->load('header');
                $this->view->load('nav');
                $this->view->load('usuario_upd', $data);
                $this->view->load('footer');
                }

}
