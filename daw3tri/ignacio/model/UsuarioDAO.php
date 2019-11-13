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

        public function insertUsuario($usuario) {
            $sql = "INSERT INTO `usuario`(`name`, `gmail`, `password`) VALUES(:name,:gmail,:password)";
            if ($this->ExecuteCommand($sql, [':name' => $usuario->getName(), ':gmail' => $usuario->getGmail(), ':password' => $usuario->getPassword()])) {
                return true;
            } else {
                return false;
            }
        }
        public function updateUsuario($usuario) {
            $sql = "UPDATE usuario SET name = :gmail, gmail = :gmail, password = :password  WHERE  id_usuario = :id_usuario";
            $param=[':name'=>$usuario->getName(),':gmail'=>$usuario->getGmail(), ':password'=>$usuario->getPassword(),':id_usuario'=>$usuario->getId_usuario()];
            if($this->ExecuteCommand($sql, $param)){
                return true;
            }else{
                return false;
            }
        }


        public function getUsuarioById($id) {

                $sql = "SELECT * FROM usuario  WHERE id_usuario = :id_usuario";
                $u = $this->ExecuteQuery($sql, [':id_usuario' => $id]);
                if($u){
                    $usuario = $u[0];
                    // return new Usuario($usuario[0]['id_usuario'], $usuario[0]['name'], $usuario[0]['gmail'], $usuario[0]['password']);
                    return new Usuario($usuario['id_usuario'], $usuario['name'], $usuario['gmail'], $usuario['password']);
                }else{
                    return false;
                }
                
        }


        public function removeUsuario($id) {
            $sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
            if($this->ExecuteCommand($sql, [':id_usuario'=>$id])){
                return true;
            }else{
                return false;
            }
        }
}
