<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro de Usuário</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <h1>Formulário</h1>

    <form id="form" action="crud.php" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <button type="submit" class="btn btn-primary" name="submit" formaction="crud.php?acao=insert">Inserir</button>
      <button type="submit" class="btn btn-secondary" name="submit" formaction="crud.php?acao=update">Atualizar</button>
    </form>

    <br>
    
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Senha</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once 'conexao.php';

        // Seleção de dados na tabela cad_usuario
        $sql = "SELECT id, nome, senha, email FROM cad_usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            //echo "<td><a href=\"crud.php?acao=edit&nome=" . $row['nome'] . "\">Editar</a> | <a href=\"crud.php?acao=delete&nome=" . $row['nome'] . "\">Excluir</a></td>";
            echo "<td><a href=\"#\" class=\"editar-link\" data-id=\"" . $row['id'] . "\">Editar</a>   <a href=\"crud.php?acao=delete&id=" . $row['id'] . "\">Excluir</a></td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
  <script>
  $(document).ready(function() {
    // Captura o ID do registro ao clicar no link de edição
    $(".editar-link").click(function(e) {
      e.preventDefault();
      var id = $(this).data("id");

      // Faz uma requisição AJAX para obter os dados do registro
      $.ajax({
        url: "get_registro.php", // Arquivo PHP que obtém os dados do registro
        type: "GET",
        data: {
          id: id
        },
        dataType: "json",
        success: function(data) {
          // Preenche os campos do formulário com os dados obtidos
          $("#nome").val(data.nome);
          //$("#senha").val(data.senha);
          $("#email").val(data.email);
          $("#editarId").val(id); // Define o ID do registro sendo editado
        },
        error: function() {
          alert("Erro ao obter os dados do registro.");
        }
      });
    });
  });
</script>


</body>

</html>
