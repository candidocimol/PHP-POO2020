<?php


/**
 * Classe Usuario
 * @version 1.0
 * @author Cândido 
 */
class Usuario extends DataBase{
    /** 
     * @var int Identificador 
     * @access private
    */
    private $id;
    /** @var string Nome do usuário 
    * @access private 
    */
    private $nome;
    /** @var string Email do usuário 
     * @access private
    */
    private $email;
    /** @var string Senha do usuário 
    * @access private
    */
    private $senha;

    
    /** Metodo construtor 
     * @param  int $id
     * @param string $nome
     * @param string $email
     * @param string $senha
    */
    public function __construct($id, $nome, $email, $senha){
        parent::__construct();
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    /**
     * Método mágico que retorna uma descrição da classe 
     * quando houver tentativa de acewssar o objeto como string
     * @return string Descrição do objeto
     */
    public function __toString(){
        return "Classe Usuario";
    }

    /**
     * Método mágico que é chamado quando  houver chada a metodo não existente no objeto.
     * @param string $nome Nome do metodo chamado
     * @param array $parametros Parametros informados
     * @return string Mensagem para o usuário
     */
    public function __call($nome, $parametros){
        /*Tratar a falha com trow */
        return "<br/> Método não existente:".$nome;

    }

    /**
     * Método mágico que é chamado toda vez que for feito um clone do objeto
     */
    public function __clone(){
        echo "Objeto clonado";
    }
    /**
     * Método mágico que é chamdo toda vez que for tentado acessar 
     * diretamente um atributo privado ou protegido,
     * @param string Atributo do objeto
     * @param string Valor para o atributo/propriedade
     */
    public function __set($propriedade, $valor){
        $this->{$propriedade}=$valor;
       
    }
    /**
     * Método mágico que é chamado todo vez que for tentados acessar 
     * o valor deum atributo privado  ou protegido
     * @param string $propriedade
     * @return  valor da propriedade
     */
    public function __get($propriedade){
        return $this->{$propriedade};
    }

    
    /**
     * Este método recebe o identificador único do objeto
     * @param int $id identificador único
     */
    public function setId($id){
        $this->id=$id;
    }

    /**
     * Método que retorn o valor do identificador único do objeto
     * @return int $this->id 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Este método recebe o valor para o atributo nome
     * @param string $nome atributo nome
     */
    public function setNome($nome){
        $this->nome=$nome;
    }

    /**
     * Este método que retorn o atributo nome
     * @return string $nome atributo nome
     */
    public function getNome(){
        return $this->nome;
    }
    /**
     * Este método recebe o valor para o atributo email
     * @param string $email atributo email
     */
    public function setEmail($email){
        $this->email=$email;
    }
    /**
     * Este método que retorna o atributo email
     * @return string $email atributo email
     */
    public function getEmail(){
        return $this->email;
    }
    /**
     * Este método recebe o valor para o atributo senha
     * @param string $senha atributo senha
     */
    public function setSenha($senha){
        $this->senha=$senha;
    }
    /**
     * Este método que retorna o atributo senha
     * @return string $senha atributo senha
     */
    public function getSenha(){
        return $this->senha;
    }

    
    public function listar(){
        $resultado= $this->query("SELECT * FROM usuario");
     
        if($resultado->rowCount() > 0){
			$usuarios=null;
			// Retorna a consulta
			While($item=$resultado->fetch(PDO::FETCH_ASSOC)){
				$usuarios[]=$item;
			}
			return $usuarios;
		}
		return null;
    }

    public function listarMax(){
        $colunas=['nome','email'];
        $where=['id'=>1];
        return $this->select("usuario",$colunas,$where);
    }
    
    public function login(){
        $this->select("usuario", ["email","nome"]);
    }
}