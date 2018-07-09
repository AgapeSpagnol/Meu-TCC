<html>
    <head>
        <meta charset="UTF-8">
        <title>Love Life Store</title>
        <link rel="stylesheet" type="text/css"  href="lovelifestore.css" /> 
        <link rel="shortcut icon" type="image/x-icon" href="Imagens/Icone.ico">
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



    <form method="POST" action="Cadastrar Produtos.php" id="formulariodeprodutos">

        <Font color="green" size="100px"> Produtos 📝 </Font><br><br>

        <center> <table cellspacing="10" >
                <tr>
                <tr>
                    <td>
                        <label for="nome" size="100px">Nome: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="nome" size="48">
                    </td>
                <tr>

                    <td>
                        <label for="ingredientes" size="50px">Ingredientes:</label>
                    </td>
                    <td align="left">
                        <textarea rows="4" cols="50" name="ingredientes"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numero" size="50px">Descrição:</label>
                    </td> 
                    <td align="left">
                        <textarea rows="4" cols="50" name="descicao"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bairro" size="50px">Preço: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="preço" size="25">
                </tr>
                <input type="submit" name="Cadastrar Produto" value="Cadastrar Produto">
            </table></center>
</form>
        <?php
        include("Conexao.php");


        $nome = $_POST['nome'];
        $ingredientes = $_POST['ingredientes'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $cadastrar = $_POST ['Cadastrar Produto'];

        if ($nome == "" || $nome == null) {//Se login esta vazio,ou seja, valor que tem endereço na Memória, ou se login esta Null não tem qualquer referencia.
            echo"<script language='javascript' type='text/javascript'>alert('O campo Nome deve ser preenchido!');window.location.href='Cadastrar Produtos.php';</script>";
//Echo esta exibindo uma mensagem em js do tipo alerta, e esta mensagem será exibida na tela de html.
        } else {
            $query = "INSERT INTO Produtos_Cadastrados (Nome,Ingredintes,Descricao,Preco)"
                    . "VALUES ('$nome','$ingredientes','$descricao','$preco)";
            $insert = mysql_query($query, $connect);

            if ($insert) {
                echo"<script language='javascript' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='Administrador.php'</script>";
            } else {
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse Produto!');window.location.href='Cadastar Produtos.php'</script>";
            }
        }
        ?>
    </body>
</html>
