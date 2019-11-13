<?php

class UsuarioDAO extends Model {

    private $listUsuario;

    public function __construct() {
        parent::__construct();
        $this->listaUsuario = [];
    }

    public function getListUsuario() {
        $sql = "SELECT * FROM usuario";
        $result = $this->ExecuteQuery($sql, []);

        foreach ($result as $linha) {
            $usuario = new Usuario( $linha['id_usuario'],$linha['name'], $linha['gmail'], $linha['password']);

            $this->listUsuario[] = $usuario;
        }

        return $this->listUsuario;
    }

        public function insertUsuario($vid) {
            $sql = "INSERT INTO `usuario`(`name`, `gmail`, `password`) VALUES(:name,:gmail,:password)";
            if ($this->ExecuteCommand($sql, [':name' => $vid->getName(), ':gmail' => $vid->getGmail(), ':password' => $vid->getPassword()])) {
                return true;
            } else {
                return false;
            }
        }
        public function updateNews($usuario) {
            $sql = "UPDATE usuario SET name = :gmail, gmail = :gmail, password = :password  WHERE  id_usuario = :id_usuario";
            $param=[':name'=>$usuario->getName(),':gmail'=>$usuario->getGmail(), ':password'=>$usuario->getPassword(),':id_usuario'=>$usuario->getId_usuario()];
            if($this->ExecuteCommand($sql, $param)){
                return true;
            }else{
                return false;
            }
        }


        public function getUsuarioById($vid) {

                $sql = "SELECT * FROM usuario  WHERE id_usuario = :id_usuario";
                $vid = $this->ExecuteQuery($sql, [':id_usuario' => $vid]);
                return new Usuario($vid['id_usuario'], $vid['name'], $vid['gmail'], $vid['password']);

        }
}
