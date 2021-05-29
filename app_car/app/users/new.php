<?php
include '../../classes/session/Session.php';
Session::validSession(true);
?>

<html>
<head>
    <title>Cadastrar Usuario</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

<div class="container">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Usuario</li>
        </ol>
    </nav>

    <h1>Cadastrar Usuario <a href="list.php"><button class="btn btn-success" type="button">Visualizar todos</button></a></h1>

    <form method="POST" action="action/save.php">

        <div class="row">
            <div class="col">
                <input type="email" name="email" required class="form-control" placeholder="Email...">
            </div>
            <div class="col">
                <input type="password" name="senha" required class="form-control" placeholder="Senha...">
            </div>
            <div class="col">
                <input type="password" name='confirmar_senha' required class="form-control" placeholder="Confirmar senha...">
            </div>
        </div>
        <br>
        <?php

            /* Email invalido */
            if ($_GET['email_existente'] == true) {
                echo '<div class="alert alert-warning" role="alert">
                               Opa! Esse email ja esta sendo utilizado!
                            </div>';
            }
        ?>

        <br>
        <!-- Botao cadastrar -->
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>

</body>

</html>