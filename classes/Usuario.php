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

    public function index(){
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['perfil']=="admin"){
                $this->listar();
            }else{
                header("location:".HOME_URI);
            }
        }else{
            header("location:".HOME_URI);
        }
    }
    
    public function listar(){
        $resultado= $this->query("SELECT * FROM usuario");
     
        if($resultado->rowCount() > 0){
			$usuarios=null;
			// Retorna a consulta
			While($item=$resultado->fetch(PDO::FETCH_ASSOC)){
				$usuarios[]=$item;
            }
            var_dump($usuarios);
			return $usuarios;
		}
		return null;
    }


    public function listarMax(){
        $colunas=['nome','email'];
        $where=['id'=>1];
        return $this->select("usuario",$colunas,$where);
    }
    /**
     * Método de Login
     */
    public function login(){
        require PATH .'/views/tema/header.php';
       				
        require PATH .'/views/paginas/usuarios/login.php';
			
        require PATH .'/views/tema/footer.php';
    }

    /**
     * Método para autenticação de Usuário
     */
    public function autenticar(){
        $cols=['nome','email','perfil'];
        $where=['email'=>$_POST['email'], 'senha'=>md5($_POST['senha'])];
        $resultado=$this->select("usuario",$cols ,$where);
        if($resultado){
            $_SESSION['user']=$resultado[0];
            echo "Sucesso!";
        }else{
            echo "Usuário não encontrado!";
        }

        header("location:".HOME_URI);
    }

    /**
     * Método Logout
     * 
     */
    public function logout(){
        unset($_SESSION['user']);
        header("location:".HOME_URI);
    }
}