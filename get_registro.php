<?php
require_once 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Seleciona os dados do registro com base no ID
    $sql = "SELECT nome, senha, email FROM cad_usuario WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row); // Retorna os dados do registro como JSON
    } else {
        echo json_encode(null); // Retorna nulo se o registro não for encontrado
    }
} else {
    echo json_encode(null); // Retorna nulo se o ID não for fornecido
}

$conn->close();
?>
