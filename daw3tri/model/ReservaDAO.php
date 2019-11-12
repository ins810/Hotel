<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservaDAO
 *
 * @author IFSul
 */
class ReservaDAO extends Model {

    private $listReserva;

    public function __construct() {
        parent::__construct();
        $this->listaReserva = [];
    }

    public function getListReserva() {
        $sql = "SELECT * FROM reserva";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            $reserva = new Reserva($linha['text'], $linha['title'], null, $linha['id_reserva']);

            $this->listReserva[] = $reserva;
        }
        return $this->listReserva;
    }
    
     public function getListReservaHabitacion() {
        $sql = "SELECT * FROM reserva";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $linha) {
            
            $listHabitacion = $this->getHabitacionFromReserva($linha['id_reserva']);
            
            $reserva = new Reserva($linha['text'], $linha['title'], $listHabitacion, $linha['id_reserva']);

            $this->listReserva[] = $reserva;
        }
        return $this->listReserva;
    }

    public function getReservaById($id) {
        $sql = "SELECT * FROM reserva WHERE id_reserva = :idreserva";
        $result = $this->ExecuteQuery($sql, [':idreserva' => $id]);
//        echo "<pre>";
//        var_dump($result);
//        echo "</pre>";
        if ($result) {
            $listHabitacion = $this->getHabitacionFromReserva($id);
            $reserva = $result[0];
            return new Reserva($reserva['text'], $reserva['title'], $listHabitacion, $reserva['id_reserva']);
        } else {
            return null;
        }
    }

    public function getHabitacionFromReserva($id) {
        $sql = "SELECT i.* FROM reserva_habitacion AS ni "
                . "INNER JOIN  habitacion as i "
                . "ON i.id_imagem = ni.id_imagem WHERE id_reserva = :idreserva;";
        //SELECT * FROM habitacion WHERE id_portfolio = :idport
        $result = $this->ExecuteQuery($sql, [':idreserva' => $id]);
        $listaHabitacion = [];
        if ($result) {
            foreach ($result as $linha) {
                $listaHabitacion[] = new Imagem(
                        $linha['src'], $linha['title'], $linha['alt'], $linha['descricao'], $linha['id_imagem']);
            }
        }
        return $listaHabitacion;
    }

    public function insereReserva($reserva) {
        $sql = "INSERT INTO reserva(title,text) VALUES(:title,:text)";
        $result = $this->ExecuteCommand($sql, 
                [':title' => $reserva->getTitle(),
            ':text' => $reserva->getText()]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    
    public function atualizarReserva($reserva) {
        $sql = 'UPDATE reserva SET title = :title,'
                . ' text=:text  WHERE id_reserva =:id';
        $param = [':title'=>$reserva->getTitle(),
            ':text'=>$reserva->getText(),
            ':id'=>$reserva->getIdreserva()];
        if($this->ExecuteCommand($sql, $param)){
            return true;
        }else{
            return false;
        }
    }
    
    public function removerReserva($id) {
        $sql = "DELETE FROM reserva WHERE id_reserva = :idreserva";
        if($this->ExecuteCommand($sql, [':idreserva'=>$id])){
            return true;
        }else{
            return false;
        }
    }
    
}
