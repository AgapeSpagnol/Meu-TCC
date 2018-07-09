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

    
    <?php
    require("Conection.php");

    $res = mysql_query("SELECT * FROM Clientes"); /* Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    echo "<table>
        <br><br><br><br>
        <center><legend>Clientes 👨 👩</legend></center><br>
        <tr><td><b><i>Nome</td></i></b> 
        <td><b><i>Rua</td></i></b>
        <td><b><i>Numero</td></i></b>
        <td><b><i>Bairro</td></i></b>
        <td><b><i>Cidade</td></i></b>
        <td><b><i>1º Telefone</td> </i></b>
        <td><b><i>2º Telefone2</td></i></b>
        <td><b><i>Email</td></i></b>
        <td><b><i>Login</td></i></b>
     </tr>";

    /* Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while ($escrever = mysql_fetch_array($res)) {

        /* Escreve cada linha da tabela */
        echo "<tr><td>" . $escrever['Nome'] . "</td><td>" . $escrever['Rua'] . "</td><td>" . $escrever['Numero'] .
        "</td><td>" . $escrever['Bairro'] . "</td><td>" . $escrever['Cidade'] . "</td><td>" . $escrever['Telefone1'] .
        "</td><td>" . $escrever['Telefone2'] . "</td><td>" . $escrever['Email'] . "</td><td>" . $escrever['Login'] . 
         "<td><a style='color:red' href='Excluir.php?Pedido=".$escrever['ID_Clientes']."'>Cancelar</a></td></td>".       "</tr>";
    }/* Fim do while */

    echo "</table>"; /* fecha a tabela apos termino de impressão das linhas */

    mysql_close(conexao);
    ?>

    <div id="redesociais">
        <a href=https://goo.gl/wqvVJ8><img src="Rede Social/Facebook.png"  id="facebook"></a>
        <a href=https://goo.gl/mLLJEx><img src="Rede Social/Instagram.png" id="instagram"></a>
<!--        <a href=lovelifestore1@gmail.com><img src="Rede Social/GMAIL.png"  id="gmail"></a>-->
    </div>

</body>
</html>
