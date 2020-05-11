<?php

$pessoas =array();

array_push($pessoas ,array(       //adiciona mais informaçao 
  "nome"=>"joao",
  "idade"=>20

));

array_push($pessoas ,array(
  "nome"=>"julia",
  "idade"=>23

));

echo json_encode($pessoas);  //tranforma array em json (en code )



?>