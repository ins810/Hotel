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

        public function insertEvento($vid) {
            $sql = "INSERT INTO `evento`(`name`, `text`, `fecha`) VALUES(:name,:text,:fecha)";
            if ($this->ExecuteCommand($sql, [':name' => $vid->getName(), ':text' => $vid->getText(), ':fecha' => $vid->getFecha()])) {
                return true;
            } else {
                return false;
            }
        }
        public function updateNews($evento) {
            $sql = "UPDATE evento SET name = :text, text = :text, fecha = :fecha  WHERE  id_evento = :id_evento";
            $param=[':name'=>$evento->getName(),':text'=>$evento->getText(), ':fecha'=>$evento->getFecha(),':id_evento'=>$evento->getId_evento()];
            if($this->ExecuteCommand($sql, $param)){
                return true;
            }else{
                return false;
            }
        }


        public function getEventoById($vid) {

                $sql = "SELECT * FROM evento  WHERE id_evento = :id_evento";
                $vid = $this->ExecuteQuery($sql, [':id_evento' => $vid]);
                return new Evento($vid['id_evento'], $vid['name'], $vid['text'], $vid['fecha']);

        }
}
