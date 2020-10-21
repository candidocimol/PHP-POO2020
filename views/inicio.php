<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo HOME_URI;?>views/css/style.css" />
	<title>Criação de Sites</title>
</head>
<body>
	<header>
		<div id="h-logo"><img src="<?php echo HOME_URI ?>/views/images/logo.png" style="height:75px"/></div>
		<div id='h-center'><p>Programação Orientada a Objetos com PHP</p></div>
		<div id='h-user'>
			
		</div>
    </header>
    <div id="msg">
    
<?php
	if(isset($_SESSION['msg'])){
		foreach($_SESSION['msg'] AS $msg){
			echo "<div  class='msg alert alert-".$msg['class']."' role='alert'>"
			.$msg['msg'].
			"
		  </div>";
		}
		unset($_SESSION['msg']);
		echo "<script>$('.msg').hide(3000);</script>";
	}
?>
    </div>
    <nav class="clearfix">
        <ul>
            <li><a href="<?php echo HOME_URI;?>">Início</a></li>
            <li><a href="<?php echo HOME_URI;?>urlAmigavel/">URL Amigável</a></li>
            <li><a href="<?php echo HOME_URI;?>contato/">Contato</a></li>
            <li><a href="<?php echo HOME_URI;?>usuario/">Usuário</a></li>
            <li><a href="<?php echo HOME_URI;?>noticias/">Notícias</a></li>
            
        </ul>
    </nav>
    <main>
        <div class="wrap">
            <h1>Programação Orientada a Objetos com PHP</h1>
            <p>	Programação orientada a objetos é um estilo de programação que permite os desenvolvedores agruparem tarefas semelhantes em classes.</p>

            <h2>Classes</h2>
            <p>A definição de uma classe começa com a palavra chave class, seguida do nome da classe, seguido de um par de colchetes que englobam as definições de propriedades e métodos pertecentes à classe.</p>

            <h2>Objetos</h2>
            <p>Para criar uma instância de uma classe, a instrução new deve ser utilizada. Um objeto sempre será criado a não ser que a classe tenha um construtor definido que dispare uma exceção em caso de erro. Classes devem ser definidas antes de instanciadas</p>

            <h2>Propriedades e Métodos</h2>
            <p>Propriedades e métodos de classe vivem em "namespaces" separados, de forma que é possível ter uma propriedade e método com mesmos nomes. A referência a propriedades e métodos tem a mesma notação, e a decisão de se uma propriedade será acessada ou uma chamada a um método feita, depende somente do contexto, ou seja, se está tentando acessar uma variável ou chamar um método.</p>

            <h2>Herança</h2>
            <p> Uma classe pode herdar métodos e propriedades de outra classe usando a palavra-chave extends na declaração da classe. Não é possível herdar múltiplas classes; uma classe só pode herdar uma classe base.</p>


        </div> 

    </main>
    <footer>
	<p>Escola Técnica Estadual Monteiro Lobato</p>
	<p> Curso Técnico em Informática </p>
	<p>Disciplina de Criação de Sites</p>
	<p>Professor Cândido Farias</p>
    </footer>
</body>
</html>