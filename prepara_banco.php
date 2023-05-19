<?php

// Configurações do banco de dados
$servername = "localhost"; // Altere para o nome do seu servidor MySQL
$username = "root"; // Altere para o nome de usuário do seu banco de dados
$password = "123456"; // Altere para a senha do seu banco de dados

// Criação da conexão com o servidor MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Criação do banco de dados
$sql = "CREATE DATABASE sis_cad";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso!";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

// Seleciona o banco de dados
$conn->select_db("sis_cad");

// Criação da tabela cad_usuario
$sql = "CREATE TABLE cad_usuario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela cad_usuario criada com sucesso!";
} else {
    echo "Erro ao criar a tabela cad_usuario: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();

?>
