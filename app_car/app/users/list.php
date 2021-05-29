<?php
    include '../../classes/session/Session.php';
    Session::validSession(true);
?>

<html>
<head>
    <title>Visualizar Usuarios</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visualizar Usuarios</li>
        </ol>
    </nav>

    <h1>Visualizar <a href="new.php">
            <button class="btn btn-success" type="button">Cadastrar</button>
        </a></h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include 'action/select.php';
        if ($usuarios){
            foreach ($usuarios as $usuario){
                echo '<tr>';
                echo '<td>' . $usuario['id'] . '</td>';
                echo '<td>' . $usuario["email"] . '</td>';
                echo '<td>' . '********'. '</td>';
                echo '<td>
                           <a href="action/delete.php?id=' . $usuario['id'] . '">
                                <button type="button" class="btn btn-danger">Deletar</button>
                           </a>
                           
                           <a href="edit.php?id=' . $usuario['id'] . '">
                                <button type="button" class="btn btn-primary">Editar</button>
                           </a>
                           
                      </td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>

</div>


</body>

</html>