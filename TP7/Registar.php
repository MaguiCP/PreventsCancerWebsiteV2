<?php
require_once "dal/DAL.php";

$username = $password = $confirm_password = $tipo = "";
$username_err = $password_err = $confirm_password_err = $tipo_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor insira um nome.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username só pode conter letras, números e underscores.";
    } else {
        $dal = new DAL();
        if ($dal->existUser($username) != null) {
            $username_err = "Este username já foi escolhido.";
        } else {
            $username = trim($_POST["username"]);
        }
        $dal->closeConn();
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor insira a password.";
    } elseif (strlen(trim($_POST["password"])) < 3) {
        $password_err = "Password tem que ter pelo menos 3 dígitos.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Por favor confirme a password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password não corresponde.";
        }
    }

    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $dal = new DAL();
        $dal->registerUser($username, $password);
        $dal->closeConn();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="image/Imagem1.png">
    <title>Prevents Cancer</title>
    <link rel="stylesheet" type="text/css" href="Css/Login.css">
</head>

<body>
    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="PaginaInicial.php">Pagina Inicial</a>
    </div>
    <div class="login-page">
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="text" name="username" placeholder="Nome"
                    class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <input type="password" name="password" placeholder="Password"
                    class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <input type="password" placeholder="Confirmar Password" name="confirm_password"
                    class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <button type="submit" class="btn btn-primary" value="Submit"> Enviar </button>
                <button type="reset" class="btn btn-secondary ml-2" value="Reset"> Reset </button>
                <p>Já tem conta? <a href="Login.php">Login aqui</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>