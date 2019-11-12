<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reserva
 *
 * @author IFSul
 */
class Reserva {
    //put your code here
    
    private $text;
    private $title;
    private $idreserva;
    private $listHabitacion;
    
    public function __construct($text, $title,$listHabitacion=null, $idreserva=null) {
        $this->text = $text;
        $this->title = $title;
        $this->idreserva = $idreserva;
        $this->listHabitacion = $listHabitacion;
    }
    function getListHabitacion() {
        return $this->listHabitacion;
    }

    function setListHabitacion($listHabitacion) {
        $this->listHabitacion = $listHabitacion;
    }

    function getText() {
        return $this->text;
    }

    function getTitle() {
        return $this->title;
    }

    function getIdreserva() {
        return $this->idreserva;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }
    
}
