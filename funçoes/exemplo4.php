<?php


function ola(){


$argumentos= func_get_arg();
return $argumentos;
 
}

var_dump(ola("bom dia",10));

?>