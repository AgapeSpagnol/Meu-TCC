
<?php

header('Content-Type: text/html; charset=utf-8');
$connect = mysql_connect('127.0.0.1', 'acampos', '1999')or mysql_errno($connect);
$db = mysql_select_db('acampos');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>