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
    <link rel="stylesheet" type="text/css" href="Css/Contactos.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="Redirecionar.php">Pagina Inicial</a>
    </div>

    <h1 style="text-align:center">Contactos</h1>
    <p></p>
    <div class="about-section">
        <p>Telefone: 223445667</p>
        <p>Email: prevents@cancer</p>
    </div>

    <h1 style="text-align:center">Os Nossos Medicos</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <div style="text-align:center">
                    <img src="image/medico1.jpeg" alt="John" width="200">
                    <div class="container">
                        <h2>Andreia Jacobina</h2>
                    </div>
                    <p class="title">Urologista</p>
                    <p>Línguas: Português, Inglês</p>
                    <p>andreia@jacobina</p>
                    <p>-----</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div style="text-align:center">
                    <img src="image/medico2.jpg" alt="John" width="200">
                    <div class="container">
                        <h2>Rodrigo Oliveira</h2>
                    </div>
                    <p class="title">Radioterapeuta</p>
                    <p>Linguas: Portugues, Espanhol</p>
                    <p>rodrigo@oliveira</p>
                    <p>-----</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div style="text-align:center">
                    <img src="image/medico3.jpg" alt="John" width="200">
                    <div class="container">
                        <h2>Liliana Santos</h2>
                    </div>
                    <p class="title">Cirurgiao</p>
                    <p>Linguas: Portugues, Espanhol</p>
                    <p>liliana@santos</p>
                    <p>-----</p>
                </div>
            </div>
        </div>
    </div>

</html>