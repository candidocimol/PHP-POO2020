<?php

class Comentario extends DataBase{
    /** 
     * @var int Identificador 
     * @access private
    */
    private $id;
    /** 
     * @var string Comentário
     * @access private
    */
    private $comentario;
    /** 
     * @var object Notícia
     * @access private
    */
    private $noticia;
    /** 
     * @var string Nome do usuário
     * @access private
    */
    private $nomeUsuario;

    public function __construct($id, $comentario, $noticia, $nomeUsuario){
        $this->id=$id;
        $this->comentario=$comentario;
        $this->noticia=$noticia;
        $this->nomeUsuario=$nomeUsuario;
    }

}