<html>
    <head>
        <meta charset="UTF-8">
        <title>Love Life Store</title>
        <link rel="stylesheet" type="text/css"  href="lovelifestore.css" /> 
        <link rel="shortcut icon" type="image/x-icon" href="Imagens/Icone.ico"> 
    </head>
    <body>
    <header class="header-home">
        <a href="Principal.php"><img src="Imagens/Logo.png" id="Logo"></a>
        <a href="Compra.php"><img src="Imagens/Loja/Carrinho.png" id="Carrinho"></a>
        <br><br><br><br>

        <ul class="menu">

            <li><center><a href="Principal.php">Home</a></center></li>
        <li><center><a href="LojaPrincipal.php">Loja</a></center></li>
            <li><center><a href="Sobre a Empresa User.html">Sobre a Empresa</a></center></li>
            <li><center><a href="Contatos User.html">Contatos</a></center></li>
            <li><center><a href="Home.html">Sair</a></center></li>

        </ul>
    </header>

    <br>

    <!--SLIDER-->
    <center> 
        <div class="slides" id="slider">
            <img class="mySlides" src="Imagens/Slide/Love.png">
            <img class="mySlides" src="Imagens/Slide/Porta Retrato.png">
            <img class="mySlides" src="Imagens/Slide/Beterraba e Flor.png">
            <img class="mySlides" src="Imagens/Slide/Coco.png">
            <img class="mySlides" src="Imagens/Slide/Hibisco e Flor.png">
            <img class="mySlides" src="Imagens/Slide/Bruna.png">
            <img class="mySlides" src="Imagens/Slide/Praia.png">
            <img class="mySlides" src="Imagens/Slide/Sucos.png">
            <img class="mySlides" src="Imagens/Slide/Jujuba Rosa.png">
            <img class="mySlides" src="Imagens/Slide/Energia Verde.png">
            <img class="mySlides" src="Imagens/Slide/Aloha.png">
            <img class="mySlides" src="Imagens/Slide/Abacaxi.png">
            
        </div>
    </center>


    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <!--SLIDER-->

    <form id="slogan">
        <Font style="font-family:DIN Next Light; font-size:200%">
            Somos <Font color="red"> Amor. </Font><br>
            Somos <Font color="magenta"> Vida. </Font><br>
            Somos <Font color="green">Saúde. </Font><br>
            Somos Love Life Store !!
            <b><i></i></b>
        </Font>
    </form>


    <?php
    require("Conexao.php");

    $login_cookie = $_COOKIE['login'];

    if (isset($login_cookie)) {
        echo "<center><font size='5px'>Bem vindo, <font color='green' size='5px'>$login_cookie.</font> 🍹 🍉 🍎 🍓 🍋 🍍 </font></center> <br>";
    }
    ?>

<a href=thtps://goo.gl/wqvVJ8><img src="Imagens/Rede Social/Facebook.png"  id="facebook_home_user"></a>
    <a href=https://goo.gl/mLLJEx><img src="Imagens/Rede Social/Instagram.png" id="instagram_home_user"></a>
</body>
</html>
