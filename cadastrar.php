<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="card border-secondary mb-5">
        <div class="card-header text-white bg-primary mb-3">
            <h1>CADASTRAR PRODUTO</h1>
        </div>
        <div class="card-body">
            <form action="insert.php" method="post">
                <div  class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
                <div  class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>
                <div  class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="number" class="form-control" id="estoque" name="estoque">
                </div>
                <div  class="form-group">
                    <label for="preco">Preco</label>
                    <input type="number" class="form-control" id="preco" name="preco" step="any">
                </div>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>
</html>