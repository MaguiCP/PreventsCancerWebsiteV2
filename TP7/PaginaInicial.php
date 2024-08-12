<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="image/Imagem1.png">
    <title>Prevents Cancer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="Css/PaginaInicial.css">
</head>

<body>
    <div class="topbar">
        <img src="image/preventscancer.png" style="border-radius: 50%">
        <a href="Login.php">Log-in</a>

    </div>
    <div class="carousel-container">
        <div class="carousel-slides">
            <div class="slide1">
                <img src="image/foto.jpg">
            </div>
            <div class="slide">
                <div>
                    <img src="image/preventscancer.png">
                    <p class="sobre-nos">
                        Sobre N&oacute;s


                    </p>
                    <p class="texto-sobre-nos">
                        Somos uma empresa dedicada à prevenção do <strong>cancro de próstata</strong>, uma doença que
                        afeta <strong>milhões</strong> de homens em todo o mundo. O nosso objetivo é conscientizar a
                        população masculina sobre a importância de exames regulares e estilo de vida saudável, para
                        prevenir o <strong>cancro de próstata</strong> ou detetá-lo em estágios iniciais.
                        <br>
                        <br>
                        Contamos com uma equipa de médicos e profissionais de saúde altamente qualificados, que oferecem
                        serviços de <strong>prevenção, diagnóstico e tratamento do cancro de próstata</strong>. A nossa
                        abordagem é baseada em <strong>evidências científicas e tecnologia de ponta</strong>, garantindo
                        a precisão e eficácia dos nossos serviços.
                        <br>
                        <br>
                        Acreditamos que a <strong>prevenção</strong> é a chave para vencer a luta contra o
                        <strong>cancro de próstata</strong>, e estamos comprometidos em fornecer recursos e informações
                        para ajudar os homens a se manterem saudáveis e viverem plenamente suas vidas. Junte-se a nós na
                        luta contra o <strong>cancro da próstata</strong> - juntos podemos fazer a diferença!
                    </p>
                </div>
            </div>
        </div>
        <button class="prev">&#8249;</button>
        <button class="next">&#8250;</button>
    </div>
</body>
<script>
    const carousel = document.querySelector(".carousel-container");
    const slides = document.querySelector(".carousel-slides");
    const slideWidth = carousel.clientWidth;
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let currentSlide = 0;

    prevBtn.addEventListener("click", () => {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.childElementCount - 1;
        }
        slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    });

    nextBtn.addEventListener("click", () => {
        currentSlide++;
        if (currentSlide >= slides.childElementCount) {
            currentSlide = 0;
        }
        slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    });

</script>

</html>