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
                                    <img src="image/medico2.jpg" width="150">
                                    <div class="mt-3">
                                        <h1>
                                            <center>Rodrigo Oliveira</center>
                                        </h1>

                                        <hr>
                                        <a href="RegistarEditarPerfilMedico.php">Editar Perfil</a>
                                        <hr>
                                        <a href="Logout.php">Terminar sessao</a>
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
                                    <h1 class="m-3 pt-3">Perfil do Médico</h1>
                                    <div class="card-body">
                                        <div class="col-md-3">
                                            <h5>Nome Completo</h5>
                                        </div>
                                        <div class="col-md-9 text-secondary">
                                            Rodrigo dos Santos Oliveira
                                        </div>


                                        <hr>

                                        <div class="col-md-3">
                                            <h5>N Identificacao Civil (CC)</h5>
                                        </div>
                                        <div class="col-md-9 text-secondary">
                                            22222222-222
                                        </div>
                                        <hr>

                                        <div class="col-md-3">
                                            <h5>Email</h5>
                                        </div>
                                        <div class="col-md-9 text-secondary">
                                            rodrigo@oliveira
                                        </div>
                                        <hr>

                                        <div class="col-md-3">
                                            <h5>Especialidade</h5>
                                        </div>
                                        <div class="col-md-9 text-secondary">
                                            Radioterapeuta
                                        </div>

                                        <div class="col-md-3">
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <div style="margin-left: 2%">
                                <div style="margin-right: 2%">
                                    <h1 class="m-3 pt-3">Utentes</h1>
                                    <div class="card-body">
                                        <div class="col-md-3">
                                            <h5>Número de Utente de Saúde</h5>
                                        </div>
                                        <h5>111111111</h5>

                                        <hr>
                                        <h5>121348267</h5>
                                        <hr>
                                        <h5>121467489</h5>

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