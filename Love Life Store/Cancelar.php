<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$Pedido = $_GET['Pedido'];

#chama o arquivo de configuração com o banco
require 'Conection.php';

#seleciona os dados da tabela produto
$query = mysql_query("DELETE FROM `acampos`.`Pedidos`
                                    WHERE ID_Pedido = ".$Pedido.";");
if($query){
    echo"<script language='javascript' type='text/javascript'>alert('Pedido cancelado com sucesso!');window.location.href='Carrinho.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Falha ao cancelar pedido!');window.location.href='Carrinho.php'</script>";  
}

