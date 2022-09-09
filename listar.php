<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Listar Produtos</title>
</head>
<body>
  <table class="table table-striped table-dark">
    <tr>
      <td>Código</td>
      <td>Nome</td>
      <td>Marca</td>
      <td>Estoque</td>
      <td>Preço</td>
      <td></td>
      <td></td>
    </tr>
    <?php 
      require('conexao.php');
      $retorno = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id ASC");
    
      while($info_retornada = mysqli_fetch_assoc($retorno)){
        echo "<tr>";
          echo "<td>".$info_retornada['id']."</td>";
          echo "<td>".$info_retornada['descricao']."</td>";
          echo "<td>".$info_retornada['marca']."</td>";
          echo "<td>".$info_retornada['estoque']."</td>";
          echo "<td>".$info_retornada['preco']."</td>";
          echo "<td><a class='btn btn-danger' href='editar.php?id=".$info_retornada['id']."'>Editar</a></td>";
          echo "<td><a class='btn btn-warning' href='delete.php?id=".$info_retornada['id']."'>Excluir</a></td>";
        echo "</tr>";
      }
      ?>    

  </table>
  <a class="btn btn-success" href="cadastrar.php">Novo Produto</a>
</body>
</html>