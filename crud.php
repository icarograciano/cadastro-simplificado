<?php
require_once 'conexao.php';

// Configura o relatório de erros do MySQLi para lançar exceções
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Verifica a ação a ser executada (inserção, exclusão ou atualização)
$acao = $_GET['acao'] ?? 'insert';

try {
    if ($acao == 'insert' && isset($_POST['submit'])) {
        // Processar o envio do formulário de inserção
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        // Criptografar a senha usando bcrypt
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Inserção de dados na tabela cad_usuario
        $sql = "INSERT INTO cad_usuario (nome, senha, email) VALUES ('$nome', '$senhaCriptografada', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso!";
            header("Location: index.php"); // Redireciona para o index.php após a inserção
            exit(); // Encerra a execução do script após o redirecionamento
        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    } elseif ($acao == 'update' && isset($_POST['submit'])) {
        // Processar o envio do formulário de atualização
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        // Criptografar a nova senha usando bcrypt
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Atualização de dados na tabela cad_usuario com a nova senha criptografada
        $sql = "UPDATE cad_usuario SET senha='$senhaCriptografada', email='$email' WHERE nome='$nome'";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso!";
            header("Location: index.php"); // Redireciona para o index.php após a atualização
            exit(); // Encerra a execução do script após o redirecionamento
        } else {
            echo "Erro ao atualizar registro: " . $conn->error;
        }
    } elseif ($acao == 'delete' && isset($_GET['id'])) {
        // Processar a exclusão do registro
        $id = $_GET['id'];

        // Exclusão do registro da tabela cad_usuario
        $sql = "DELETE FROM cad_usuario WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Registro excluído com sucesso!";
            header("Location: index.php"); // Redireciona para o index.php após a exclusão
            exit(); // Encerra a execução do script após o redirecionamento
        } else {
            echo "Erro ao excluir registro: " . $conn->error;
        }
    }
} catch (mysqli_sql_exception $e) {
    // Trata a exceção lançada pelo MySQLi
    echo "Erro no banco de dados: " . $e->getMessage();
}

// Fecha a conexão com o banco de dados //
$conn->close();
?>


