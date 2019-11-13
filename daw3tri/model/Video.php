<?php

class Evento {
    private $text;
    private $fecha;
    private $name;
    private $id_evento;

    public function __construct($id_evento=null,$name,$text, $fecha) {
        $this->text = $text;
        $this->fecha = $fecha;
        $this->name = $name;
        $this->id_evento = $id_evento;
    }


    function getText() {
        return $this->text;
    }
    function getFecha() {
        return $this->fecha;
    }
    function getName() {
        return $this->name;
    }

    function getId_evento() {
        return $this->id_evento;
    }


    function setText($text) {
        $this->text = $text;
    }
    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    function setName($name) {
        $this->name = $name;
    }

    function setId_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

}
