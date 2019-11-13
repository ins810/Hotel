<?php

class Usuario {
    public $gmail;
    public $password;
    public $name;
    public $id_usuario;

    public function __construct($id_usuario=null,$name,$gmail, $password) {
        $this->gmail = $gmail;
        $this->password = $password;
        $this->name = $name;
        $this->id_usuario = $id_usuario;
    }


    function getGmail() {
        return $this->gmail;
    }
    function getPassword() {
        return $this->password;
    }
    function getName() {
        return $this->name;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }


    function setGmail($gmail) {
        $this->gmail = $gmail;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    function setName($name) {
        $this->name = $name;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

}
