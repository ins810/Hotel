<?php


class AdminReserva extends Admin {


    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new ReservaDAO();
    }

    public function index() {
        $data['listReserva'] = $this->model->getListReserva();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('reserva', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        $data['lista'] = $this->model->getListHabitacion();
        if (filter_input(INPUT_POST, 'add')) {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
            $id_habitacion = filter_input(INPUT_POST, 'id_habitacion');
            if ($title && $text) {
                $reserva = new Reserva($title, $text);
                if ($this->model->insertReserva($reserva, $id_habitacion)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar reserva!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('reserva_add', $data);
        $this->view->load('footer');
    }

    public function removeReserva($id) {
        if (filter_input(INPUT_POST, 'del')) {
            $this->model->removeReserva($id);
            $this->index();
        } else {
            $data['reserva'] = $this->model->getReservaById($id);
            $this->view->load('header');
            $this->view->load('nav');
            $this->view->load('reserva_remove', $data);
            $this->view->load('footer');
        }
    }

    public function edit($id) {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'update')) {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
            if ($title && $text) {
                $reserva = new Reserva($text, $title, null, $id);
                if ($this->model->updateReserva($reserva)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao atualizar Re zr vá!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['reserva'] = $this->model->getReservaById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('reserva_upd', $data);
        $this->view->load('footer');
    }

}
