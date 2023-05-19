<?php
$servername = "localhost"; // Altere para o nome do seu servidor MySQL
$username = "root"; // Altere para o nome de usuário do seu banco de dados
$password = "123456"; // Altere para a senha do seu banco de dados
$dbname = "sis_cad"; // Altere para o nome do banco de dados

// Criação da conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
