<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "dal/DAL.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dal = new DAL();

    $Nome = trim($_POST["nome"]);
    $CC = trim($_POST["cc"]);
    $NUtente = trim($_POST["numutentesaude"]);
    $Data = trim($_POST["data"]);
    $Email = trim($_POST["email"]);
    $Telefone = trim($_POST["telefone"]);
    $Altura = trim($_POST["altura"]);
    $Peso = trim($_POST["peso"]);
    
    $Pergunta1 = isset($_POST["pergunta1"]) && $_POST["pergunta1"] === "sim";
    $Pergunta1_1 = $Pergunta1 ? trim($_POST["tipo_cancro"]) : "";
    $Pergunta1_2 = $Pergunta1 ? trim($_POST["tempo_cancro"]) : "";
    $Pergunta2 = isset($_POST["pergunta2"]) && $_POST["pergunta2"] === "sim";
    $Pergunta2_1 = $Pergunta2 ? trim($_POST["grau_parentesco"]) : "";
    $Pergunta3 = isset($_POST["pergunta3"]) && $_POST["pergunta3"] === "sim";
    $Pergunta3_1 = $Pergunta3 ? trim($_POST["tipo_medicamento"]) : "";
    $Pergunta4 = isset($_POST["pergunta4"]) && $_POST["pergunta4"] === "sim";
    $Pergunta4_1 = $Pergunta4 ? trim($_POST["doenca_cronica"]) : "";
    $Pergunta5 = isset($_POST["pergunta5"]) && $_POST["pergunta5"] === "sim";
    $Pergunta6 = isset($_POST["pergunta6"]) && $_POST["pergunta6"] === "sim";
    $Pergunta7 = isset($_POST["pergunta7"]) && $_POST["pergunta7"] === "sim";
    $Pergunta8 = isset($_POST["pergunta8"]) && $_POST["pergunta8"] === "sim";
    $Pergunta9 = isset($_POST["pergunta9"]) && $_POST["pergunta9"] === "sim";
    $Pergunta10 = isset($_POST["pergunta10"]) && $_POST["pergunta10"] === "sim";
    $Pergunta11 = isset($_POST["pergunta11"]) && $_POST["pergunta11"] === "sim";

    $result = $dal->registerAnamnese(
        $Nome, $CC, $NUtente, $Data, $Email, $Telefone,
        $Altura, $Peso, $Pergunta1, $Pergunta1_1, $Pergunta1_2,
        $Pergunta2, $Pergunta2_1, $Pergunta3, $Pergunta3_1,
        $Pergunta4, $Pergunta4_1, $Pergunta5, $Pergunta6,
        $Pergunta7, $Pergunta8, $Pergunta9, $Pergunta10, $Pergunta11
    );

    if ($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados.";
    }
    $dal->closeConn();
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="icon" type="image/x-icon" href="image/Imagem1.png">
    <title>Prevents Cancer</title>
    <link rel="stylesheet" type="text/css" href="Css/Anamnese.css">
    <meta charset="UTF-8">
    <script>
        function mostrarPerguntaAdicional(pergunta, valor, idAdicional) {
            document.getElementById(idAdicional).style.display = (valor === 'sim') ? 'block' : 'none';
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="quadrado">
            <div class="quadrado2">
                <a href="Redirecionar.php">Página Inicial</a>
            </div>
            <h2>Formulário de Registo de Paciente</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <p><span class="error">* Campo obrigatório</span></p>

                <label>Nome: <input type="text" name="nome" required></label><br><br>

                <label>CC: <input type="text" name="cc" required pattern="\d{9}" title="Deve conter 9 dígitos."></label><br><br>

                <label>Número de Utente: <input type="text" name="numutentesaude" required pattern="\d{9}" title="Deve conter 9 dígitos."></label><br><br>

                <label>Data de Nascimento: <input type="date" name="data" required></label><br><br>

                <label>Email: <input type="email" name="email" required></label><br><br>

                <label>Telefone: <input type="text" name="telefone" required pattern="\d{9}" title="Deve conter 9 dígitos."></label><br><br>

                <label>Altura (em cm): <input type="text" name="altura" required></label><br><br>

                <label>Peso (em kg): <input type="text" name="peso" required></label><br><br>

                <label>Já teve algum tipo de cancro?
                    <select name="pergunta1" onchange="mostrarPerguntaAdicional('pergunta1', this.value, 'pergunta1_adicional')" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <div id="pergunta1_adicional" class="hidden" style="display:none;">
                    <label>Tipo de cancro: <input type="text" name="tipo_cancro"></label><br><br>
                    <label>Há quanto tempo?
                        <select name="tempo_cancro">
                            <option value="menos_1">Menos de 1 ano</option>
                            <option value="1_5">1-5 anos</option>
                            <option value="mais_5">Mais de 5 anos</option>
                        </select>
                    </label><br><br>
                </div>

                <label>Tem algum parente com histórico de cancro?
                    <select name="pergunta2" onchange="mostrarPerguntaAdicional('pergunta2', this.value, 'pergunta2_adicional')" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <div id="pergunta2_adicional" class="hidden" style="display:none;">
                    <label>Grau de parentesco:
                        <select name="grau_parentesco">
                            <option value="pai">Pai</option>
                            <option value="irmao">Irmão</option>
                        </select>
                    </label><br><br>
                </div>

                <label>Está a tomar algum medicamento atualmente?
                    <select name="pergunta3" onchange="mostrarPerguntaAdicional('pergunta3', this.value, 'pergunta3_adicional')" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <div id="pergunta3_adicional" class="hidden" style="display:none;">
                    <label>Tipo de medicamento: <input type="text" name="tipo_medicamento"></label><br><br>
                </div>

                <label>Tem alguma doença crónica?
                    <select name="pergunta4" onchange="mostrarPerguntaAdicional('pergunta4', this.value, 'pergunta4_adicional')" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <div id="pergunta4_adicional" class="hidden" style="display:none;">
                    <label>Qual doença crónica: <input type="text" name="doenca_cronica"></label><br><br>
                </div>

                <label>Já fez alguma cirurgia?
                    <select name="pergunta5" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>É alérgico a algum medicamento?
                    <select name="pergunta6" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>Fuma?
                    <select name="pergunta7" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>Bebe álcool?
                    <select name="pergunta8" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>Pratica atividade física regularmente?
                    <select name="pergunta9" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>Já esteve exposto a radiações?
                    <select name="pergunta10" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <label>Tem histórico de depressão ou ansiedade?
                    <select name="pergunta11" required>
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </label><br><br>

                <input type="submit" value="Submeter">
            </form>
        </div>
    </div>
</body>

</html>