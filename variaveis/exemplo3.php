
<?php

$nome ="Hcode"; //string

$site='www.hcode.com.br'; //string

$ano=1988;  //numero
$salario =5500.00; //pontoflutuante
$bloqueado=false;   //boleano

////////////////
$frutas= array("abacaxi","laranja","manga");
echo $frutas[2];

//////objeto
$nascimento =new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo3.php","r");

//var_dump($arquivo);

$nulo = NULL;
$vazio ="";

?>