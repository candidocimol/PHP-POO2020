<?php

/**
 * Noticia- Classe Noticia
 * @version 1.0
 * @author Cândido
 * @since 0.1
 */
class Noticia extends DataBase{
    /** 
     * @var int Identificador 
     * @access private
    */
    private $id;
    /** 
     * @var string titulo
     * @access private
    */
    private $titulo;
    /** 
     * @var text descricao 
     * @access private
    */
    private $descricao;
    /** 
     * @var date data 
     * @access private
    */
    private $data;
    /** 
     * @var object  usuario 
     * @access private
    */
    private $usuario;
    /** 
     * @var string URL da imagem
     * @access private
    */
    private $imagem;
    /** 
     * @var array Lista de comentários
     * @access private
    */
    private $comentarios;

    public function __construct($id, $titulo, $descricao,$data,$usuario,$imagem=null){
        $this->id=$id;
        $this->titulo=$titulo;
        $this->descricao=$descricao;
        $this->data=$data;
        $this->usuario=$usuario;
        $this->imagem=$imagem;
    }

    

}