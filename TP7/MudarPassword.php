<?php
session_start();

require_once "dal/DAL.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Login.php");
    exit;
}

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Por favor insira uma password.";
    } elseif (strlen(trim($_POST["new_password"])) < 3) {
        $new_password_err = "Password deve ter pelo menos 3 dígitos.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Por favor confirme a password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password não corresponde.";
        }
    }

    if (empty($new_password_err) && empty($confirm_password_err)) {

        $username = $_SESSION["username"];
        $dal = new DAL();
        if ($dal->resetPassword($username, $new_password)) {

            session_destroy();
            header("location: Login.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
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
    <meta charset="UTF-8">
</head>

<body>
    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="PaginaInicial.php">Pagina Inicial</a>
    </div>
    <div class="login-page">
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="password" name="new_password" placeholder="Nova Password"
                    class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                <input type="password" name="confirm_password" placeholder="Confirmar Password"
                    class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <button type="submit" class="btn btn-primary" value="Submit"> Enviar </button>
                <p> <a class="btn btn-link ml-2" href="Redirecionar.php">Cancelar</a> </p>
            </div>
        </form>
    </div>
</body>

</html>