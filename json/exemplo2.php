<?php
$json='[
  {
    "nome": "joao",
    "idade": 20
  },
  {
    "nome": "julia",
    "idade": 23
  }
]';

$data= json_decode($json,true); //tranforma json em array 

var_dump($data);

?>