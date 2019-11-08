<?php


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
      
            $habitacion = $result[0];
            new Habitacion($habitacion['id_habitacion'], $habitacion['descripcion'], $habitacion['src'], $habitacion['name']);        } else {
            return null;
        }
    }

    public function insertHabitacion($habitacion) {
        $sql = "INSERT INTO habitacion (descripcion,src,name) VALUES(:descripcion,:src,:name)";
        if ($this->ExecuteCommand($sql, [':descripcion' => $habitacion->getName(), ':src' => $habitacion->getSrc(), ':name' => $habitacion->getDescripcion()])) {
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