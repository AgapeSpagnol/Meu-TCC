<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Love Life Store</title>
        <link rel="stylesheet" type="text/css"  href="lovelifestore.css" /> 
        <link rel="shortcut icon" type="image/x-icon" href="Imagens/Icone.ico">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
            }
        </style>
    </head>
    <body>

    <header class="header-home">
        <a href="Home.html"><img src="Imagens/Logo.png" id="Logo"></a>
        <br><br><br><br>

        <ul class="menu">

            <li><center><a href="Home.html">Home</a></center></li>
            <li><center><a href="Loja.html">Loja</a></center></li>
            <li><center><a href="Sobre a Empresa.html">Sobre a Empresa</a></center></li>
            <li><center><a href="Contatos.html">Contatos</a></center></li>

        </ul>

    </header>

<!--    <a href="Cadastrar Produtos.php"><input type="submit"  value="Cadastrar Produtos" ></a>-->
    
    <?php
    require("Conection.php");

    $res = mysql_query("SELECT * FROM Produtos_Cadastrados"); /* Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    echo "<center><table>
        <br><br><br><br>
        <center><legend>Produtos 🍉 🍹 </legend></center><br><br>
        <tr>
        <th width='50'><b><i>ID</td></i></b> 
        <th width='50'><b><i>Nome</td></i></b> 
        <th width='250'><b><i>Ingredientes</td></i></b>
        <th width='250'><b><i>Descrição</td></i></b>
        <th width='20'><b><i>Preço</td></i></b>
        
     </tr>";

    /* Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while ($escrever = mysql_fetch_array($res)) {

        /* Escreve cada linha da tabela */
        echo "<tr><td value='id_Produtos'>" . $escrever['ID_Produtos_Cadastrados'] . "</td><td>" . $escrever['Nome'] . "</td><td>" . $escrever['Ingredientes'] . "</td><td>" . $escrever['Descricao'] .
        "</td><td>" . $escrever['Preco'] .
        "<td><a style='color:red' href='Excluir.php?Pedido=" . $escrever['ID_Produtos_Cadastrados'] . "'>Excluir</a></td></td>" . "</tr>";
    }/* Fim do while */

    echo "</table></center>";

    mysql_close(conexao);
    ?>

    <div id="redesociais">
        <a href=https://goo.gl/wqvVJ8><img src="Rede Social/Facebook.png"  id="facebook"></a>
        <a href=https://goo.gl/mLLJEx><img src="Rede Social/Instagram.png" id="instagram"></a>
<!--        <a href=lovelifestore1@gmail.com><img src="Rede Social/GMAIL.png"  id="gmail"></a>-->
    </div>

</body>
</html>
