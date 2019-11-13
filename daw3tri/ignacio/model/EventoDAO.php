<?php

class EventoDAO extends Model {

    private $listEvento;

    public function __construct() {
        parent::__construct();
        $this->listaEvento = [];
    }

    public function getListEvento() {
        $sql = "SELECT * FROM evento";
        $result = $this->ExecuteQuery($sql, []);

        foreach ($result as $linha) {
            $evento = new Evento( $linha['id_evento'],$linha['name'], $linha['text'], $linha['fecha']);

            $this->listEvento[] = $evento;
        }

        return $this->listEvento;
    }

        public function insertEvento($evento) {
            $sql = "INSERT INTO `evento`(`name`, `text`, `fecha`) VALUES(:name,:text,:fecha)";
            if ($this->ExecuteCommand($sql, [':name' => $evento->getName(), ':text' => $evento->getText(), ':fecha' => $evento->getFecha()])) {
                return true;
            } else {
                return false;
            }
        }
        public function updateEvento($evento) {
            $sql = "UPDATE evento SET name = :name, text = :text, fecha = :fecha  WHERE  id_evento = :id_evento";
            $param=[':name'=>$evento->getName(),':text'=>$evento->getText(), ':fecha'=>$evento->getFecha(),':id_evento'=>$evento->getId_evento()];
            if($this->ExecuteCommand($sql, $param)){
                return true;
            }else{
                return false;
            }
        }


        public function removeEvento($id){
            $sql = "DELETE FROM evento WHERE  id_evento = :id_evento";
            $param=[':id_evento'=>$id];
            if($this->ExecuteCommand($sql, $param)){
                return true;
            }else{
                return false;
            }
        }
      

        public function getEventoById($evento) {

                $sql = "SELECT * FROM evento  WHERE id_evento = :id_evento";
                $result = $this->ExecuteQuery($sql, [':id_evento' => $evento]);
                if ($result) {
              
                    return $result[0];
                } else {
                    return false;
                }
        }
}
