<h1>MVC:</h1>
Ele contém 3 pastas, sendo elas vendor, public, App. Na pasta vendor, vai conter algumas configurações do MVC em geral, sendo elas:
• vendor/composer/ : Contém os arquivos para o autoload da página index;
• vendor/MF/ : Contém as configurações do miniframework, onde vamos ter as pastas Controller, Init e Model;
	vendo/MF/Controller/: Lá irá ter um arquivo que tem como sua direcionar para as páginas e carregar os layouts (configuração do $this->render() );
	vendor/MF/Init/ : Lá vamos ter a configuração do bootstrap do framework, lá conseguimos pegar a URL da página que esta sendo acessada e criar uma rota para ela, assim, damos origem as route; 
	vendo/MF/Model/ : Nesta pasta vamos ter dois arquivos, o Container e o Model, fundamentais para faz conexão com os modelos e definir alguns atributos ;
		vendor/MF/Model/Container/: Vamos ter a configuração para instânciarmos o modelo através de uma função.
		vendor/MF/Model/Model/: Temos uma classe abstrata dos modelos, onde podemos definir variáveis globais em todos os demais modelos, e temos uma função que concta com o banco de dados;
• vendo/autoload.php: Arquivos usado para efetuar o autoload, sendo puxado as suas configurações do composer.

<b>Partindo para a pasta public</b>
Lá vai conter arquivos que precisam estar no servidor para funcionar, como por exemplo, imagens, css, bootstrap, dataTable, etc. Caso não tenha esses arquivos lá não conseguiremos puxar eles para o frontEnd.

<b>Pasta App</b>
Lá que vamos fazer todas as configurações da página, isto é, definir qual  banco de dados vamos usar, configurar as rotas das páginas, criar modelos, controllers e páginas de navegação.
• App/Controllers/: Vamos definir nossos controllers nesta página, onde sempre devemos seguir a sintaxe:
	<nome do controller>Controller.php
• App/Models/: Nesta pasta vamos criar funções que serão usadas nas páginas, por exemplo o CRUD.
• App/Views/: Pasta onde vai conter toda a páginação tanto uma página em sí, quanto um layout., o index, página de login, etc. Podendo ser nos seguintes tipo, HTML, PHP, PHTML.
	App/Views/Index/: Vai contér as páginas do site, podendo ser a página completa ou 	então somente o seu body. Ela pode ser dos seguintes tipos, HTML, PHTML, PHP;
	App/Views/Partials/: Contém o layout das páginas;
• App/Conection.php: Pasta onde configuramos a conexão com o banco de dados, colocando seu nome, path, user, senha, e  o tipo.
.App/Route.php: Pasta que tem como sua função definir o caminho das rotas, e escolher em qual Controller ela vai ser executada.

<b>Como usar:</b>
• App/Controller/: 
1.	Devemos colocar o seu namespace logo de começo: App\Controllers;
2.	Vamos pegar alguns recursos da pasta MF usando o use: MF\Controller\Action; e também o MF\Model\Container;
3.	Logo em seguida definimos a sua classe, ela deve ter o mesmo nome do arquivo.

• App/Models/:
1.	Devemos colocar o seu namespace no começo: App\Models;
2.	Pegar um recurso da pasta MF usando o use: MF\Model\Model;
3.	Criar um classe, que deve ter o mesmo nome que o arquivo.
4.	Definimos as funções que quermos.

• App/Views/:
1.	Podemos criar as páginas do jeito que quisermos.

• App/Conction.php:
1.	Vamos alterar o nome do banco de dados dentro do try que esta na função getDb.

• App/Route.php:
1.	Vamos definir seu namespace: App;
2.	Vamos pegar um recurso do MF: MF\Init\Bootstrap;
3.	Vamos criar uma classe com o mesmo nome do arquivo e extender Bootstrap.
4.	Criaremos uma função com propriedade protected e chamada initRoutes.
5.	Vamos criar as suas rotas dentro da função initRoutes;
6.	Deve seguir a sintaxe:
	$route['<nome de identificação>'] = array (
	'route' => '<rota do usuário ('/home')', 
	'controller' => '<nome do controller sem o '.php'>
	'action' => '<nome da função dentro do controller que vai trabalhar a rota>'

<h3><strong>OBS:</strong> Todos os arquivos com links, devem ser seguidos através da pasta public.</h3>

<h1>Banco de dados Usuário:</h1>
Tem que conter pelo menos, nome, email, senha, SIAPE (meio de login). Caso tenha mais informações, podemos adiciona-lá em vendor/MF/Models/Model.php ou então dentro de um App/Models dentro de um modelo.