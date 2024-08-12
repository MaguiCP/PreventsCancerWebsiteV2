<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Login.php");
    exit;
}

if ($_SESSION["username"] === "admin") {
    header("location: PaginaInicialAdmin.php");
} else if ($_SESSION["username"] === "utente") {
    header("location: PaginaInicialUtente.php");
} else if ($_SESSION["username"] === "medico") {
    header("location: PaginaInicialMedico.php");
}
