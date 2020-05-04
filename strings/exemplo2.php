<?php
$nome="joao rangel"; 

$nome =strtoupper($nome);  //tudo maiusculo

echo $nome;

$nome= strtolower($nome); //minusculo
echo "<br>";

echo $nome;
echo "<br>";

echo ucwords($nome); //primeira de cada palavra
echo "<br>";
echo ucfirst($nome); // primeira letra somente da palavra
echo "<br>";

?>