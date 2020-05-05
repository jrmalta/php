<?php
$suaIdade=125;
$idadeCriança =12;
$idadeMaior=18;
$idadeMelhor=65;


if ($suaIdade <= $idadeCriança ) {

	echo "Criança";

}


else if($suaIdade <=$idadeMaior) 
{

echo"adolecente";



}


else if($suaIdade <=$idadeMelhor) 
{

echo"Adulto";


}

else {

	echo "Idoso";
}

echo"<br>";

echo($suaIdade < $idadeMaior)?"menor de idade":"maior de idade";

?>