<p align=center><img src="https://user-images.githubusercontent.com/90354669/167626321-f2d6136c-e70c-40f5-8789-91867c67d8ce.png"></img></p>

<h2>Programas usados:</h2>

- Laravel ^9.11
- PHP 8.0.12 (Maquina)
- PHP ^8.0.2 (Framework)
- XAMPP 3.3.0
- Banco de Dados: MariaDB - version 10.4.21

<br>

<h2>Instalação do projeto</h2>

1. Fazer o clone ou baixar o projeto
    ``` 
    git clone -b master https://github.com/LucasAlexsander/projeto-motivos.git
    ```
2. Baixar as dependências dentro da pasta do projeto
    ```
    composer install
    ```

3. Criando o aquivo `.env`

    - Duplique o arquivo `.env.example` e troque seu nome para `.env`

4. Definir uma chave para o arquivo `.env`. Para isso use o comando:
    ```
    php artisan key:generate
    ```

5. Rodar o migrate para criar as tabelas
    ```
    php artisan migrate
    ```

<br>

<h2>Criando o primeiro usuário</h2>

1. Vá para a página de login, é preciso somente clicar no botão `admin` que fica na tela inicial

2. Aparecerá um campo escrito `Registrar Novo Usuário`

3. Preencha os campos e será criado o novo usuário

<h2>É importante configurar o arquivo ENV</h2>

1. Configure o banco de dados, fica entre a linha 11 à 16

2. E por fim, configure o `SMTP` para que possa receber e-mail caso esqueça a senha

<h2>Iniciando o projeto</h2>

1. Inicializar o banco de dados

2. Abrir o terminal na pasta raiz e digitar o seguinte comando:
    ```
    php artisan serve
    ```
3. Copiar o link do servidor que ficará disponível assim que o servidor estiver funcionando

4. Após a criação do servidor e as configurações realizadas com sucesso o programa estará pronto para uso