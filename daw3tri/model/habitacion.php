<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author IFSul
 */
class Habitacion {
    //put your code here



    private $descripcion;
    private $src;
    private $name;
    private $id_habitacion;

    public function __construct($descripcion,$src, $name, $id_habitacion=null) {
        $this->descripcion = $descripcion;
        $this->src = $src;
        $this->name = $name;
        $this->id_habitacion = $id_habitacion;
    }


    function getDescripcion() {
        return $this->descripcion;
    }
    function getName() {
        return $this->name;
    }
    function getSrc() {
        return $this->src;
    }

    function getId_habitacion() {
        return $this->id_habitacion;
    }


    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    function setName($name) {
        $this->name = $name;
    }
    function setSrc($src) {
        $this->src = $src;
    }

    function setId_habitacion($id_habitacion) {
        $this->id_habitacion = $id_habitacion;
    }

}
