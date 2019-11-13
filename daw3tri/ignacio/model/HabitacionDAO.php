<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiaDAO
 *
 * @author IFSul
 */
class HabitacionDAO extends Model {

    private $listHabitacion;

    public function __construct() {
        parent::__construct();
        $this->listaHabitacion = [];
    }

    public function getListHabitacion() {
        $sql = "SELECT * FROM habitacion";
        $result = $this->ExecuteQuery($sql, []);

        foreach ($result as $linha) {
            $habitacion = new Habitacion($linha['descripcion'], $linha['src'], $linha['name'], $linha['id_habitacion']);

            $this->listHabitacion[] = $habitacion;
        }

        return $this->listHabitacion;
    }


    public function getHabitacionById($id) {
        $sql = "SELECT * FROM habitacion  WHERE id_habitacion = :id_habitacion";
        $result = $this->ExecuteQuery($sql, [':id_habitacion' => $id]);
        if ($result) {
            return $result[0];
        } else {
            return false;
        }
    }

    public function insertHabitacion($habitacion) {
        $sql = "INSERT INTO habitacion (descripcion,src,name) VALUES(:descripcion,:src,:name)";
        if ($this->ExecuteCommand($sql, [':descripcion' => $habitacion->getDescripcion(), ':src' => $habitacion->getSrc(), ':name' => $habitacion->getName()])) {
            return true;
        } else {
            return false;
        }
    }
    public function updateImg($habitacion) {
        $sql = "UPDATE habitacion SET descripcion = :descripcion, src = :src, name = :name  WHERE id_habitacion = :id_habitacion";
        $param=[':descripcion'=>$habitacion->getDescripcion(),':src'=>$habitacion->getSrc(), ':name'=>$habitacion->getName(),':id_habitacion'=>$habitacion->getId_habitacion()];
        if($this->ExecuteCommand($sql, $param)){
            return true;
        }else{
            return false;
        }
    }



    }
