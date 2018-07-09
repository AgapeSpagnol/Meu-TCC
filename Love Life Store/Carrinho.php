
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Love Life Store</title>
        <link rel="stylesheet" type="text/css"  href="lovelifestore.css" /> 
        <link rel="shortcut icon" href="favicon.ico" >
    </head>
    <body>

    <header class="header-home">
        <a href="Home.html"><img src="Imagens/Logo.png" id="Logo"></a>
        <br><br><br><br>

        <ul class="menu">

            <li><center><a href="Principal.php">Home</a></center></li>
            <li><center><a href="LojaPrincipal.php">Loja</a></center></li>
            <li><center><a href="Sobre a Empresa User.html">Sobre a Empresa</a></center></li>
            <li><center><a href="Contatos User.html">Contatos</a></center></li>

        </ul>
        <br><br><br>
        <?php $login_cookie = $_COOKIE['login']; ?>
        <center><font size='5px'>Bem vindo, <font color='green' size='5px'><?php echo $login_cookie . ". "; ?></font>Veja seu carrinho:</font></center>
        <br><br><br>
        <center>
            <table width="40%" cellspacing="10" border="0">
                <thead>
                    <tr>
                        <th width=1050'><b>Item</b> </th>
                        <th width='100'>Preço</th>
                        <th width='100'>Quantidade</th>
                        <th width='100'>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #chama o arquivo de configuração com o banco
                    require 'Conection.php';

                    #seleciona os dados da tabela produto


                    $query = mysql_query("SELECT (Select Nome from Produtos_Cadastrados where ID_Produtos_Cadastrados = acampos.Pedidos.Pedidos) as 'Pedido',
                                                 (Select Preco from Produtos_Cadastrados where ID_Produtos_Cadastrados = acampos.Pedidos.Pedidos) as 'Preco', 
                                                 Quantidade,
                                                  ID_Pedido
                                                FROM acampos.Pedidos;");
                    # abaixo montamos um formulário em html
                    # e preenchemos o select com dados
                    $total = 0;
                    while ($prod = mysql_fetch_array($query)) {
                        $total = $total + ($prod['Preco'] * $prod['Quantidade']);
                        ?>
                        <tr>
                            <td><?php echo $prod['Login']; ?></td>
                            <td><?php echo $prod['Pedido']; ?></td>
                            <td><?php echo $prod['Preco']; ?></td>
                            <td><?php echo $prod['Quantidade']; ?></td>
                            <td>R$<?php echo $prod['Preco'] * $prod['Quantidade']; ?>,00</td>
                            <td><a style="color:red" href="Cancelar.php?Pedido=<?php echo $prod['ID_Pedido']; ?>">Cancelar</a></td>
                        </tr>
                    <?php } ?>
                    <tr>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td></td>
                        <td></td>
                        <td>R$<?php echo $total; ?>,00</td>
                    </tr>
                </tbody>
            </table>
        </center>

    </header>



</body>
</html>