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
class CategoriaDAO extends Model {

    private $listCategoria;

    public function __construct() {
        parent::__construct();
        $this->listaCategoria = [];
    }

    public function getListCategoria() {
        $sql = "SELECT * FROM categoria";
        $result = $this->ExecuteQuery($sql, []);

        foreach ($result as $linha) {
            $categoria = new Categoria( $linha['title'], $linha['text'], $linha['id_categoria']);

            $this->listCategoria[] = $categoria;
        }

        return $this->listCategoria;
    }


    public function getCategoriaById($id) {
        $sql = "SELECT * FROM categoria  WHERE id_categoria = :id_categoria";
        $result = $this->ExecuteQuery($sql, [':id_categoria' => $id]);
        if ($result) {

            return $result[0];
        } else {
            return false;
        }
    }

    public function insertCategoria($categoria) {
        $sql = "INSERT INTO categoria (title,text) VALUES(:title,:text)";
        if ($this->ExecuteCommand($sql, [ ':title' => $categoria->getTitle(), ':text' => $categoria->getText()])) {
            return true;
        } else {
            return false;
        }
    }
    public function updateCategoria($categoria) {
        $sql = "UPDATE categoria SET title = :title, text = :text  WHERE id_categoria = :id_categoria";
        $param=[':title'=>$categoria->getTitle(), ':text'=>$categoria->getText(),':id_categoria'=>$categoria->getId_categoria()];
        if($this->ExecuteCommand($sql, $param)){
            return true;
        }else{
            return false;
        }
    }



    }
