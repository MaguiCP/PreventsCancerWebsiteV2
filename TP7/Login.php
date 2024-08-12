<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "dal/DAL.php";

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: PaginaInicialUtente.php");
    exit;
}

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor insira o nome.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor insira a password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {

        $dal = new DAL();
        if ($dal->checkUser($username, $password)) {

            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            if ($username === "admin") {
                header("location: PaginaInicialAdmin.php");
            } else if ($username === "utente") {
                header("location: PaginaInicialUtente.php");
            } else if ($username === "medico") {
                header("location: PaginaInicialMedico.php");
            }
        } else {
            $login_err = "Nome ou password inválidos.";
        }
        $dal->closeConn();
    } else {
        $login_err = "Nome ou password inválidos.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="image/Imagem1.png">
    <title>Prevents Cancer</title>
    <link rel="stylesheet" type="text/css" href="Css/Login.css">
    <meta charset="UTF-8">
</head>

<body>

    <?php
    if (!empty($login_err)) {
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="PaginaInicial.php">Pagina Inicial</a>
    </div>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="username" placeholder="Nome"
                    class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <input type="password" name="password" placeholder="Password"
                    class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <button type="submit">Login</button>
                <p>Não tem conta? <a href="Registar.php">Criar conta</a></p>
            </form>
        </div>
    </div>
</body>

</html>