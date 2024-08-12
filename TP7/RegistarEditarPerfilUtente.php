<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="image/Imagem1.png">
    <title>Prevents Cancer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Css/Perfil.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
                <img src="image/preventscancer.png" style="border-radius: 50%">
                <a href="Redirecionar.php">Pagina Inicial</a>
            </div>
            <div class="row">
                <div class="column left">
                    <div class="col-md-4 mt-1">
                        <div class="card text-center sidebar">
                            <div class="card-body">
                                <div style="text-align:center">
                                    <img src="image/profile.jpg" width="150">
                                    <a href="">Editar Foto</a>
                                    <div class="mt-3">
                                        <h5>Nome</h5>
                                        <input type="text" id="primeironome" name="primeironome" placeholder="nome">
                                        <input type="text" id="sobrenome" name="sobrenome" placeholder="apelido">
                                    </div>
                                    <div style="margin-top: 10%">
                                        <hr>
                                        <a href="PerfilUtente.php">Voltar</a>
                                        <hr>
                                        <a href="PerfilUtente.php">Guardar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <div style="margin-left: 2%">
                                <div style="margin-right: 2%">
                                    <h1 class="m-3 pt-3">Registar/Editar Perfil do Utente</h1>
                                    <div class="card-body">
                                        <div class="col-md-3">
                                            <h5>Nome Completo</h5>
                                        </div>
                                        <input type="text" id="nome" name="nome" placeholder="nome completo">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Nº de Identificacao Civil (CC)</h5>
                                        </div>
                                        <input type="text" id="cartaocidadao" name="cartaocidadao"
                                            placeholder="11111111111-111">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Nº de Utente de Saude</h5>
                                        </div>
                                        <input type="text" id="numutentesaude" name="numutentesaude"
                                            placeholder="111111111">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Data Nascimento</h5>
                                        </div>
                                        <input type="date" id="data" name="data">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Numero telefone</h5>
                                        </div>
                                        <input type="tel" id="telefone" name="telefone" placeholder="987654321">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Email</h5>
                                        </div>
                                        <input type="email" id="email" name="email" placeholder="enter@email">
                                        <hr>
                                        <div class="col-md-3">
                                            <h5>Morada</h5>
                                        </div>
                                        <input type="text" id="morada" name="morada" placeholder="Rua X, 10, 1ºdir">,
                                        <input type="text" id="codigo-postal" name="codigo-postal"
                                            placeholder="1111-111">
                                        <input type="text" id="cidade" name="cidade" placeholder="cidade">
                                        <div class="col-md-3">
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>