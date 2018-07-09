<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            $Login = $_COOKIE['login'];
            $Pedido = $_POST['Pedido'];
            $Quantidade = $_POST['Quantidade'];   
            if($Pedido === "Selecione..."){
                echo"<script language='javascript' type='text/javascript'>alert('Escolha um produto!');window.location.href='Compra.php'</script>";
            }else{
                $connect=mysqli_connect ('172.16.0.2','acampos','123abc','acampos');//Habilita conexão com o servidor 
                $query = "INSERT INTO `acampos`.`Pedidos`
                                        (`Login`,
                                        `Pedidos`,
                                        `Quantidade`)
                                        VALUES
                                        ('".$Login."',
                                        '".$Pedido."',
                                        ".$Quantidade.")";

                $insert = mysqli_query($connect,$query);
                if($insert){
                          echo"<script language='javascript' type='text/javascript'>alert('Pedido realizado com sucesso!');window.location.href='Carrinho.php'</script>";
                        }else{
                          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível realizar o pedido, consulte a gerência ou tente de novo mais tarde!');window.location.href='Compra.php'</script>";
                        }   
            }
            
            

