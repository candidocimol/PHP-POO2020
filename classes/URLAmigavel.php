<?php
/**
 * UrlAmigavel - Classe UrlAmigável
 *
 * @author Cândido
 * @version 1.0
 * @since 0.1
 */
class UrlAmigavelController extends MainController
{

	/**
	* Carrega a página "/views/home/index.php"
	* 
	*/
    public function index() {
		// Título da página
		$this->title = 'URL Amigável';
		
		
		
		/** Carrega os arquivos do view **/
	
		require PATH .'/views/tema/header.php';
       	
        require PATH .'/views/tema/menu.php';
			
        require PATH .'/views/urlAmigavel/index.php';
			
        require PATH .'/views/tema/footer.php';
		
    } // index
	
} // class UrlAmigavel