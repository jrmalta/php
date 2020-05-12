<?php 

$nome = (int)$_GET["a"]; //get e post string ,conversao (int)  

var_dump($nome); //mostra tipo de variavel 

$ip =$_SERVER["REMOTE_ADDR"]; // ip do provedor de acesso,pega informaçoes do ambiente 

$ip = $_SERVER["SCRIPT_NAME"];


echo $ip;

?>