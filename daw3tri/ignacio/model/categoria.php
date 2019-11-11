<?php


class Categoria {

    private $title;
    private $text;
    private $id_categoria;

    public function __construct($title, $text, $id_categoria=null) {
        $this->title = $title;
        $this->text = $text;
        $this->id_categoria = $id_categoria;
    }



    function getText() {
        return $this->text;
    }
    function getTitle() {
        return $this->title;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }


    function setText($text) {
        $this->text = $text;
    }
    function setTitle($title) {
        $this->title = $title;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

}
