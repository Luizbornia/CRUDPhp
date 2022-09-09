<?php
    require('conexao.php');

    $nome       = $_POST['descricao'];
    $marca      = $_POST['marca'];
    $estoque    = $_POST['estoque'];
    $preco      = $_POST['preco'];

    $insert = mysqli_query($conexao,"INSERT INTO produtos (id, descricao, marca, estoque, preco) 
    VALUES (NULL,'$nome','$marca','$estoque','$preco')");
 
    mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Produto cadastrado</title>
</head>
<body>
    <?php if ($insert){
    echo "<div class='alert alert-success' role='alert'>Produto inserido</div>";
    echo "<a class='btn btn-success' href='listar.php'>Voltar a listagem</a>";
    }?>
    
</body>
</html>