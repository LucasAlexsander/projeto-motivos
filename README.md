<h1>MVC:</h1>
Ele contém 3 pastas, sendo elas vendor, public, App. Na pasta vendor, vai conter algumas configurações do MVC em geral, sendo elas:
• <b>vendor/composer/</b> : Contém os arquivos para o autoload da página index;
• <b>vendor/MF/</b> : Contém as configurações do miniframework, onde vamos ter as pastas Controller, Init e Model;
	<b>vendo/MF/Controller/: Lá irá ter um arquivo que tem como sua direcionar para as páginas e carregar os layouts (configuração do <b>$this->render()</b> );
	<b>vendor/MF/Init/</b>: Lá vamos ter a configuração do bootstrap do framework, lá conseguimos pegar a URL da página que esta sendo acessada e criar uma rota para ela, assim, damos origem as route; 
	<b>vendo/MF/Model/</b> : Nesta pasta vamos ter dois arquivos, o Container e o Model, fundamentais para faz conexão com os modelos e definir alguns atributos ;
		<b>vendor/MF/Model/Container/</b>: Vamos ter a configuração para instânciarmos o modelo através de uma função.
		<b>vendor/MF/Model/Model/</b>: Temos uma classe abstrata dos modelos, onde podemos definir variáveis globais em todos os demais modelos, e temos uma função que concta com o banco de dados;
• vendo/autoload.php: Arquivos usado para efetuar o autoload, sendo puxado as suas configurações do composer.

<b>Partindo para a pasta public</b>
Lá vai conter arquivos que precisam estar no servidor para funcionar, como por exemplo, imagens, css, bootstrap, dataTable, etc. Caso não tenha esses arquivos lá não conseguiremos puxar eles para o frontEnd.

<b>Pasta App</b>
Lá que vamos fazer todas as configurações da página, isto é, definir qual  banco de dados vamos usar, configurar as rotas das páginas, criar modelos, controllers e páginas de navegação.
• <b>App/Controllers/</b>: Vamos definir nossos controllers nesta página, onde sempre devemos seguir a sintaxe:
	<b><nome do controller>Controller.php</b>
• <b>App/Models/</b>: Nesta pasta vamos criar funções que serão usadas nas páginas, por exemplo o CRUD.
• <b>App/Views/</b>: Pasta onde vai conter toda a páginação tanto uma página em sí, quanto um layout., o index, página de login, etc. Podendo ser nos seguintes tipo, <b>HTML, PHP, PHTML</b>.
	<b>App/Views/Index/</b>: Vai contér as páginas do site, podendo ser a página completa ou 	então somente o seu body. Ela pode ser dos seguintes tipos, HTML, PHTML, PHP;
	<b>pp/Views/Partials/: Contém o layout das páginas;</b>
• <b>App/Conection.php</b>: Pasta onde configuramos a conexão com o banco de dados, colocando seu nome, path, user, senha, e  o tipo.
• <b>App/Route.php</b>: Pasta que tem como sua função definir o caminho das rotas, e escolher em qual Controller ela vai ser executada.

<h2><b>Como usar:</b></h2>
• <b>App/Controller/:</b>
1.	Devemos colocar o seu namespace logo de começo: <b>pp\Controllers;
2.	Vamos pegar alguns recursos da pasta MF usando o use: <b>MF\Controller\Action; e também o MF\Model\Container;
3.	Logo em seguida definimos a sua classe, ela deve ter o mesmo nome do arquivo.

• <b>App/Models/:</b>
1.	Devemos colocar o seu namespace no começo: <b>App\Models;</b>
2.	Pegar um recurso da pasta MF usando o use: <b>MF\Model\Model;</b>
3.	Criar um classe, que deve ter o mesmo nome que o arquivo.
4.	Definimos as funções que quermos.

• <b>App/Views/:</b>
1.	Podemos criar as páginas do jeito que quisermos.

• <b>App/Conction.php:</b>
1.	Vamos alterar o nome do banco de dados dentro do <b>try</b> que esta na função <b>getDb</b>.

• <b>App/Route.php:</b>
1.	Vamos definir seu namespace: <b>App;</b>
2.	Vamos pegar um recurso do MF: <b>MF\Init\Bootstrap;</b>
3.	Vamos criar uma classe com o mesmo nome do arquivo e extender <b>Bootstrap</b>.
4.	Criaremos uma função com propriedade protected e chamada <b>initRoutes</b>.
5.	Vamos criar as suas rotas dentro da função initRoutes;
6.	Deve seguir a sintaxe:
	<b>$route['<nome de identificação>'] = array (
	'route' => '<rota do usuário ('/home')', 
	'controller' => '<nome do controller sem o '.php'>
	'action' => '<nome da função dentro do controller que vai trabalhar a rota>'</b>

<h3><strong>OBS:</strong> Todos os arquivos com links, devem ser seguidos através da pasta public.</h3>

<h1>Banco de dados Usuário:</h1>
Tem que conter pelo menos, nome, email, senha, SIAPE (meio de login). Caso tenha mais informações, podemos adiciona-lá em <b>vendor/MF/Models/Model.php</b> ou então dentro de um <b>App/Models</b> dentro de um modelo.