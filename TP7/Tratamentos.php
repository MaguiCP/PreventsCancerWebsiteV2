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
    <link rel="stylesheet" type="text/css" href="Css/Tratamentos.css">
</head>

<body>
    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="Redirecionar.php">Página Inicial</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="header">
                <h1> Tratamentos prostáticos </h1>
                <h1> </h1>
            </div>
            <div class="content">
                <div class="card">
                    <h4> Braquiterapia </h4>
                    <p> A braquiterapia prostática é uma das terapêuticas oncológicas mais eficazes no tratamento do
                        cancro da próstata e pode ser utilizada entre 80 a 90% dos casos de tumores localizados. Esta
                        técnica apresenta vários benefícios, quando comparada com outros tratamentos: </p>
                    <li>Elevada taxa de sucesso; </li>
                    <li>Intervenção rápida, entre 1 a 2 horas; </li>
                    <li>Rápido regresso à actividade diária. </li>
                    <a href="https://www.institutodaprostata.com/pt/tratamentos/cancro-da-prostata/braquiterapia">Saiba
                        mais</a>
                    <img src="image/hormoterapia.jpg">
                </div>
                <div class="card">
                    <h4> Radioterapia Externa </h4>
                    <p> A Radioterapia Externa é uma técnica utilizada no tratamento do cancro da próstata localizado -
                        que ainda não disseminou para fora dos limites do órgão -, ou em tumores localmente avançados,
                        que afectam apenas a área adjacente à próstata. Nalguns casos, a terapêutica também é benéfica
                        no controlo da progressão do tumor e no alívio dos sintomas. Pode ainda ser utilizada para o
                        tratamento de metástases do tumor (por exemplo quando se localizam no osso), se foram
                        sintomáticas ou muito pouco numerosas.</p>
                    <a
                        href="https://www.institutodaprostata.com/pt/tratamentos/cancro-da-prostata/radioterapia-externa">Saiba
                        mais</a>
                    <img src="image/cirurgica.jpg">
                </div>
                <div class="card">
                    <h4> Crioterapia </h4>
                    <p> É uma técnica minimamente invasiva e com bons resultados no tratamento dos tumores localizados
                        da próstata ou com baixo e médio risco de disseminação. É também utilizada com sucesso no
                        tratamento das recidivas do cancro da próstata - após radioterapia externa, cirurgia ou
                        braquiterapia.
                        Esta opção terapêutica recorre à utilização de agulhas especiais, nas quais circula um gás
                        líquido, o árgon, que submete a próstata a frio intenso, de forma controlada, destruindo o
                        tecido cancerígeno deste órgão. </p>
                    <a href="https://www.institutodaprostata.com/pt/tratamentos/cancro-da-prostata/crioterapia">Saiba
                        mais</a>
                    <img src="image/remedio.jpg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="header">
                <h1> Exames</h1>
                <h1> </h1>
            </div>
            <div class="content">
                <div class="card">
                    <h4> Exame dp PSA </h4>
                    <p> O PSA quer dizer “Antigénio Específico da Próstata” (utiliza-se internacionalmente a sigla PSA,
                        do inglês “Prostate Specific Antigen”).
                        É assim possível medir os níveis de PSA no sangue, através de uma simples análise sanguínea. O
                        valor obtido permite ajudar a diferenciar se estamos em presença de uma situação de aumento
                        benigno da próstata ou de cancro da próstata. Se houver uma suspeita da presença de cancro, deve
                        ser realizada uma biópsia da próstata.
                    </p>
                    <a href="https://www.institutodaprostata.com/pt/analises-e-exames/exame-do-psa">Saiba mais</a>
                    <img src="image/PSA.jpg">
                </div>
                <div class="card">
                    <h4> Toque rectal </h4>
                    <p> O toque rectal é um exame de rotina fundamental para avaliar a saúde da próstata. Consiste na
                        palpação do revestimento do recto e dos órgãos circundantes - como a próstata - para despistar
                        alguma anomalia.
                        Trata-se de uma avaliação que oferece dados únicos e imprescindíveis acerca das características
                        deste órgão. Informações que nem o PSA ou a Ecografia disponibilizam, tais como: dimensões e
                        volume da próstata; tipo e regularidade da superfície.
                    </p>
                    <a href="https://www.institutodaprostata.com/pt/analises-e-exames/toque-rectal">Saiba mais</a>
                    <img src="image/toque retal.png">
                </div>
                <div class="card">
                    <h4> Exames Adicionais </h4>
                    <p> Depois, caso o médico considere necessário, podem ser necessários métodos de diagnóstico
                        complementares, tais como: </p>
                    <li> <a href="https://www.institutodaprostata.com/pt/analises-e-exames/ecografia-da-prostata">Ecografia
                            transrectal da próstata</a></li>
                    <li> <a
                            href="https://www.institutodaprostata.com/pt/analises-e-exames/ressonancia-magnetica-nuclear">Ressonância
                            magnética nuclear</a></li>
                    <li> <a
                            href="https://www.institutodaprostata.com/pt/analises-e-exames/tomografia-computorizada-tac">Tomografia
                            computadorizada</a></li>
                    <p>Quando o cancro é diagnosticado precocemente, o prognóstico é bastante favorável.</p>
                    <img src="image/adicionais.jpg">
                </div>
            </div>
        </div>
    </div>
</body>

</html>