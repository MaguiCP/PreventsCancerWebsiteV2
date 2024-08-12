<?php
class DAL
{
    private $DB_NAME = "preventscancer";
    private $DB_HOST = "localhost";
    private $DB_USER = "root";
    private $DB_PASS = "";
    private $link = null;

    public function __construct()
    {
        $this->link = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        if (mysqli_connect_errno()) {
            throw new Exception("Erro ao conectar à base de dados: " . mysqli_connect_error());
        }
    }

    public function closeConn()
    {
        mysqli_close($this->link);
    }

    public function existUser($username)
    {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    return $stmt;
                } else {
                    return null;
                }
            }
        }
    }

    public function checkUser($username, $password)
    {
        $stmt = $this->existUser($username);
        if ($stmt != null) {
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

            if (mysqli_stmt_fetch($stmt)) {
                if (password_verify($password, $hashed_password)) {
                    return True;
                }
            } else {
                return False;
            }
        } else {
            return False;
        }
    }

    public function registerUser($username, $password)
    {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                header("location: Login.php");
            } else {
                echo "Não foi possível registar o utilizador.";
            }
        }
    }

    public function resetPassword($username, $password)
    {
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_password, $username);
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                return True;
            }
            return False;
        }
    }

    public function registerAnamnese(
        $Nome, $CC, $NUtente, $Data, $Email, $Telefone, 
        $Altura, $Peso, $Pergunta1, $Pergunta1_1, $Pergunta1_2, 
        $Pergunta2, $Pergunta2_1, $Pergunta3, $Pergunta3_1, 
        $Pergunta4, $Pergunta4_1, $Pergunta5, $Pergunta6, 
        $Pergunta7, $Pergunta8, $Pergunta9, $Pergunta10, $Pergunta11) {

        $Pergunta1 = $Pergunta1 ? 'sim' : 'não';
        $Pergunta2 = $Pergunta2 ? 'sim' : 'não';
        $Pergunta3 = $Pergunta3 ? 'sim' : 'não';
        $Pergunta4 = $Pergunta4 ? 'sim' : 'não';
        $Pergunta5 = $Pergunta5 ? 'sim' : 'não';
        $Pergunta6 = $Pergunta6 ? 'sim' : 'não';
        $Pergunta7 = $Pergunta7 ? 'sim' : 'não';
        $Pergunta8 = $Pergunta8 ? 'sim' : 'não';
        $Pergunta9 = $Pergunta9 ? 'sim' : 'não';
        $Pergunta10 = $Pergunta10 ? 'sim' : 'não';
        $Pergunta11 = $Pergunta11 ? 'sim' : 'não';
    
        $sql = "INSERT INTO anamnese (
            Nome, CC, NUtente, DataNascimento, Email, Telefone, 
            Altura, Peso, Pergunta1, Pergunta1_1, Pergunta1_2, 
            Pergunta2, Pergunta2_1, Pergunta3, Pergunta3_1, 
            Pergunta4, Pergunta4_1, Pergunta5, Pergunta6, 
            Pergunta7, Pergunta8, Pergunta9, Pergunta10, Pergunta11
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($this->link, $sql);
        if (!$stmt) {
            throw new Exception("Erro ao preparar a query: " . mysqli_error($this->link));
        }

        mysqli_stmt_bind_param(
            $stmt, 
            "siissiddssssssssssssssss",
            $Nome, $CC, $NUtente, $Data, $Email, $Telefone, 
            $Altura, $Peso, $Pergunta1, $Pergunta1_1, $Pergunta1_2, 
            $Pergunta2, $Pergunta2_1, $Pergunta3, $Pergunta3_1, 
            $Pergunta4, $Pergunta4_1, $Pergunta5, $Pergunta6, 
            $Pergunta7, $Pergunta8, $Pergunta9, $Pergunta10, $Pergunta11
        );

        if (mysqli_stmt_execute($stmt)) {
            return True;
        } else {
            throw new Exception("Erro ao executar a query: " . mysqli_stmt_error($stmt));
        }
    }
}