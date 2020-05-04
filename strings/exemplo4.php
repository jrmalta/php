<?php

$frase ="A repetiçao é mae da retençao.";

$palavra="mae";

$q = strpos($frase, $palavra);

$texto= substr($frase, 0,$q);  // antes do q 


var_dump($texto);

$texto2=substr($frase, $q+ strlen($palavra),strlen($frase));  

echo "<br>";

var_dump($texto2);


?>