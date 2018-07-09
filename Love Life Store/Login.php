<?php

require("Conexao.php");

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['Entrar'];

if (isset($entrar)) {
//  é uma função que checa se uma variável existe e certifica-se de que seu valor não seja NULO
    $verifica = mysql_query("SELECT * FROM Clientes WHERE Login like '$login' AND Senha like '$senha'") or die("erro ao selecionar");
    if (mysql_num_rows($verifica) <= 0) { //Verifica linhas do banco de dados
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha Incorretos');window.location.href='Home.html';</script>";
        die(); //Mostra uma mensagem e/ou termina o script atual(apelido para exit);
    } else {
        setcookie("login", $login); //define um cookie para ser enviado juntamente com o resto dos cabeçalhos HTTP.
        header("Location:Principal.php"); //Redireciona para a página indicada.
    }
}