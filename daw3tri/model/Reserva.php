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
    
    private $name;
    private $email;
    private $idreserva;
    private $password;
    
    public function __construct($name, $email,$password=null, $idreserva=null) {
        $this->name = $name;
        $this->email = $email;
        $this->idreserva = $idreserva;
        $this->password = $password;
    }
    function getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getName() {
        return $this->name;
    }

    function getTitle() {
        return $this->email;
    }

    function getIdreserva() {
        return $this->idreserva;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setTitle($email) {
        $this->email = $email;
    }

    function setIdreserva($idreserva) {
        $this->idreserva = $idreserva;
    }
    
}
