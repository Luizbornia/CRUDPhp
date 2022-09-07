<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Produtos</title>
</head>
<body>
  <table border=1>
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
          echo "<td><a href='editar.php'>Editar</a></td>";
          echo "<td><a href='excluir.php'>Excluir</a></td>";
        echo "</tr>";
      }
      ?>    

  </table>
  <a href="cadastrar.php">Novo Usuario</a>
</body>
</html>