1 INTRODUÇÃO

Para a disciplina de Programação para Internet em Back-end, formalizo a execução da atividade do portifólio, de desenvolver uma aplicação web simples de cadastro de usuário, com o BOOTSTRAP, PHP, MYSQL e APACHE. 

Na execução desta atividade, utilizei o Windows 10, Visual Studio Code e o XAMPP. Lembrando que o XAMPP é uma ferramenta que instala automaticamente o APACHE, PHP e MYSQL. No front-end, utilizei HTML e uma classe CSS do Bootstrap, e no back-end o PHP junto com o JavaScript. Para testar a aplicação, o deploy foi feito no apache, criando o projeto diretamente na pasta htdocs.
	
2 MÉTODOS

Para construção da página web, utilizei o Visual Studio Code e as seguintes tecnologias: Bootstrap, HTML, JavaScript, XAMPP, PHP, MYSQL e o APACHE. O sistema operacional utilizado foi o Windows 10.
  
3 DESENVOLVIMENTO

Após leitura da situação proposta e entendimento do que deveria ser feito, iniciei a execução da atividade nesta ordem:

1º - Em C:\xampp\htdocs, estruturei as pastas e arquivos do projeto no Visual Studio Code. 

2º - Criei o código do arquivo “prepara_banco.php” para estabelecer a conexão com o servidor MySQL e criar um banco de dados chamado "sis_cad" e uma tabela chamada "cad_usuario" dentro desse banco de dados. Essa tabela será usada para armazenar as informações da aplicação de cadastro de usuários, como nome, senha e -mail.

3º - Criei o código do arquivo “conexao.php” que estabelece uma conexão com o banco de dados MySQL usando as configurações fornecidas e verifica se a conexão foi bem-sucedida. É uma etapa inicial comum para a maioria das aplicações PHP que precisam interagir com um banco de dados.

4º - Criei o código do arquivo “index.php” que contém o front-end da aplicação. Na construção da página utilizei HTML para criar um formulário de cadastro de usuários e exibir uma tabela com os dados cadastrados. Para estilização, usei o arquivo CSS do Bootstrap, tornando a interface visualmente agradável.
Além disso, a página prevê um CRUD (Create, Read, Update, Delete) completo. Os usuários poderão inserir novos registros através do botão "Inserir" e atualizar registros existentes com o botão "Atualizar". Os dados deverão ser enviados para um arquivo PHP (crud.php) para processamento e interação com o banco de dados MySQL.
O PHP foi a linguagem de programação utilizada para a interação com o banco de dados. No caso ele que irá estabelecer uma conexão com o banco, executar as consultas SQL para recuperar, modificar dados e gerenciar a lógica por trás do formulário e das tabelas.
A página também conta com o JavaScript que é empregado para adicionar interatividade à página. Ele é responsável por capturar o evento de clique no link "Editar", realizar requisições AJAX para buscar dados de um registro específico no servidor e preencher automaticamente os campos do formulário com esses dados.
No geral, essa página combina HTML, CSS, PHP e JavaScript para criar uma interface de usuário interativa que permite aos usuários cadastrar, visualizar, atualizar e excluir registros em um banco de dados.

5º - Criei o código do arquivo “crud.php” que contém o back-end da aplicação. Este código é o arquivo PHP responsável por processar as ações relacionadas ao CRUD (Create, Read, Update, Delete) em um banco de dados MySQL. Abaixo, como o arquivo foi estruturado:

a.	Primeiro, o arquivo inclui o arquivo de conexão com o banco de dados (conexao.php) para estabelecer a conexão com o MySQL;

b.	Em seguida, é configurado o relatório de erros do MySQLI para lançar exceções em caso de erros;

c.	O código verifica a ação a ser executada com base nos parâmetros passados na URL ($_GET['acao']);

d.	Se a ação for "insert" e o botão de envio do formulário ($_POST['submit']) for pressionado, o código processa o formulário de inserção. Ele recupera os valores dos campos do formulário (nome, senha e email), executa uma consulta SQL para inserir os dados na tabela "cad_usuario" e exibe uma mensagem de sucesso ou erro;

e.	Se a ação for "update" e o botão de envio do formulário for pressionado, o código processa o formulário de atualização. Ele recupera os valores dos campos do formulário, executa uma consulta SQL para atualizar os dados na tabela "cad_usuario" com base no nome fornecido e exibe uma mensagem de sucesso ou erro;

f.	Tanto no Insert como no Update, a senha é criptografada usando a função password_hash() com o algoritmo bcrypt;

g.	Se a ação for "delete" e o parâmetro "id" estiver presente na URL, o código processa a exclusão do registro. Ele recupera o valor do parâmetro "id", executa uma consulta SQL para excluir o registro correspondente na tabela "cad_usuario" e exibe uma mensagem de sucesso ou erro;

h.	O código trata exceções lançadas pelo MySQLi, caso ocorram erros durante as consultas ao banco de dados, exibindo uma mensagem de erro apropriada;

i.	Por fim, o código fecha a conexão com o banco de dados.

6º - Criei o código do arquivo “get_registro.php” que recebe um parâmetro "id" através da URL e retorna os dados de um registro específico da tabela "cad_usuario" em formato JSON. Ele é utilizado em conjunto com JavaScript para fazer requisições assíncronas ao servidor e obter os dados de um registro específico para preencher o formulário de edição.

4 CONCLUSÃO

O sistema completo ficou assim:
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/cf5ea865-76b7-4240-b8d2-59ecfe10fb38)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/09727402-aa9d-4057-836f-030453963528)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/ad9417e3-479b-4785-972b-534259413224)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/0a25d89d-bd4f-4a99-bda3-63bca98278c6)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/8e4b9ede-64b9-425a-ae57-240dae4b7da8)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/16851134-4e84-4d03-970f-50e2fcba9f70)
![image](https://github.com/icarograciano/crud_com_php_cad_user/assets/70548062/0f7fcba1-81ab-4aeb-8fa2-a33699e140b1)

 5 AUTOR
 
 Icaro Graciano
 
 
 
 




