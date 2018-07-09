<html>
    <head>
        <meta charset="UTF-8">
        <title>Love Life Store</title>
        <link rel="stylesheet" type="text/css"  href="lovelifestore.css" /> 
        <link rel="shortcut icon" type="image/x-icon" href="Imagens/Icone.ico"> 
    </head>
    <body>

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


<?php
#chama o arquivo de configuração com o banco
require 'Conection.php';

#seleciona os dados da tabela produto
$query = mysql_query("SELECT ID_Produtos_Cadastrados, Nome FROM Produtos_Cadastrados");

# abaixo montamos um formulário em html
# e preenchemos o select com dados
?>

<form name="produto" method="post" action="AddPedido.php" id="Produtos">
    <?php
    $login_cookie = $_COOKIE['login'];
    ?>
    <center><font size='5px'>Bem vindo, <font color='green' size='5px'><?php echo $login_cookie . "." ?></font> 🍹 🍉 🍎 🍓 🍋 🍍 </font></center> <br>
    <label for="">Selecione um Suco: </label>
    <select name="Pedido">
        <option>Selecione...</option>

        <?php while ($prod = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $prod['ID_Produtos_Cadastrados'] ?>"><?php echo $prod['Nome'] ?></option>
        <?php } ?>

    </select>
    <br>
    <label>Quantidade</label>
    <select name="Quantidade">
        <?php
        while ($i < 100) {
            $i = $i + 1;
            ?><option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php
        }
        ?>

    </select>
    <br><br>
    <input type="submit" value="Finalizar">
</form>


<?php
// put your code here
?>
</body>
</html>
