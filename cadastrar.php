<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h3>CADASTRAR PRODUTO</h3>
    <form action="insert.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="descricao" name="descricao">

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca">

        <label for="estoque">Estoque</label>
        <input type="number" id="estoque" name="estoque">

        <label for="preco">Preco</label>
        <input type="number" id="preco" name="preco" step="any">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>