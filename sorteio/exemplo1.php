<?php

$participantes = array("Rafael","Joao","Maria","Julia","Antonio");


$numParticipantes=sizeof($participantes);


$sorteado=$participantes[rand(0,$numParticipantes)];



echo $sorteado;

?>