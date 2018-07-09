<?php

require("Conexao.php");

$nome = $_POST ['nome'];
$rua = $_POST ['rua'];
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$telefone1 = $_POST ['telefone1'];
$telefone2 = $_POST ['telefone2'];
$email = $_POST ['email'];
$login = $_POST ['login'];
$senha = md5($_POST ['senha']);
$cadastrar = $_POST ['Cadastrar'];


//
//$connect = mysql_connect('127.0.0.1', 'acampos', '123abc')or mysql_errno($connect);
//$db = mysql_select_db('acampos');
//$query_select = "SELECT Login FROM Clientes WHERE Login  ='$login'";
//$select = mysql_query($query_select, $connect);
//$array = mysql_fetch_array($select);
//$logarray = $array['Login'];



if ($login == "" || $login == null) {//Se login esta vazio,ou seja, valor que tem endereço na Memória, ou se login esta Null não tem qualquer referencia.
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='Cadastro de Cliente.html';</script>";
//Echo esta exibindo uma mensagem em js do tipo alerta, e esta mensagem será exibida na tela de html.
} else {
    if ($logarray == $login) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='Cadastro de Cliente.html';</script>";
        die(); //Mostra uma mensagem e/ou termina o script atual(apelido para exit);
    } else {
        $query = "INSERT INTO Clientes (Nome,Rua,Numero,Bairro,Cidade,Telefone1,Telefone2,Email,Login,Senha) "
                . "VALUES ('$nome','$rua','$numero','$bairro','$cidade','$telefone1','$telefone2','$email','$login','$senha')";
        $insert = mysql_query($query, $connect);

        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='Home.html'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='Cadastro de Cliente.html'</script>";
        }
    }
}
?>