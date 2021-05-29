<?php
    include '../../classes/session/Session.php';
    Session::validSession(true);
?>

<html>
<head>
    <title>Cadastrar Veiculo</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="container">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.php">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastrar Veiculo</li>
            </ol>
        </nav>


        <h1>Cadastrar Veiculo <a href="list.php"><button class="btn btn-success" type="button">Visualizar todos</button></a></h1>
        <form method="POST" action="action/save.php">

            <div class="form-group">
                <label for="marca">Marca</label>
                <select class="form-control" required name="marca">
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Ford">Ford</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Volskwagen">Volkswagen</option>
                </select>
                <small class="form-text text-muted">Selecione a marca do Veiculo.</small>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" name="modelo" required class="form-control" placeholder="Modelo...">
                </div>
                <div class="col">
                    <input type="number" name="ano" required class="form-control" placeholder="Ano...">
                </div>
                <div class="col">
                    <input type="number" name='valor' required class="form-control" placeholder="Valor...">
                </div>
            </div>

            <br>
            <!-- Campo observacao -->
            <div class="form_group">
                <label for="obs">Obs:</label>
                <textarea class="form-control" name="obs" rows="3"></textarea>
            </div>

            <br>
            <!-- Botao cadastrar -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>
    </div>

</body>

</html>