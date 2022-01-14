<?php 

namespace MF\Controller;

abstract class Action {

    protected $view; //Esta disponivel em qualquer objeto de IndexController

    public function __construct() {
        $this->view = new \stdClass(); //Podemos criar objetos vázios que podem ser compostos de atributos
    }

    protected function render($view, $layout = '') {
        $this->view->page = $view;     
        
        $phtml_layout = "../App/Views/Partials/".$layout.".phtml";
        $html_layout ="../App/Views/Partials/".$layout.".php";
        $php_layout = "../App/Views/Partials/".$layout.".html";


        //Procura páginas de Layout com o final HTML, PHP, PHTML

        if(file_exists($phtml_layout)) {

			require_once $phtml_layout;

		} elseif(file_exists($html_layout)) {

			require_once $html_layout;

		} elseif(file_exists($php_layout)) {

			require_once $php_layout;
			
		} else {

			$this->content();
			
		}
    }

    protected function content() {
        $classAtual = get_class($this); //Pegamos o diretorio da onde esta o Controller = App/Controller/IndexController

        $classAtual = str_replace('App\\Controllers\\', '', $classAtual); //Tiramos o path e deixamos somente o nome da classe | IndexController

        $classAtual = strtolower(str_replace('Controller', '', $classAtual)); //Tiramos o "Controller" por ser um nome comum em todos os controllers

        //Procura páginas com o final HTML, PHP, PHTML

        $phtml_page = "../App/Views/".$classAtual."/".$this->view->page.".phtml";
        $html_page = "../App/Views/".$classAtual."/".$this->view->page.".html";
        $php_page = "../App/Views/".$classAtual."/".$this->view->page.".php";
        $error = "../App/Views/".$classAtual."/".$this->view->page.".php";
        $page404 = "../App/Views/Index/404.php";


		if (file_exists($phtml_page)) {

			require_once $phtml_page;

		} elseif (file_exists($html_page)) {

			require_once $html_page;

		} elseif (file_exists($php_page)) {

			require_once $php_page;

		} 

        $css = "../App/Views/Assets/css/".$this->view->page.".css";

        //Arquivo CSS
        if (file_exists($css)) {
            require_once $css;
        }
    }
}


?>