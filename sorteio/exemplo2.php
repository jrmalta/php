<form method="POST">
    Número: <input type="text" name="txtNumero">
    <br>
    <input type="submit" value="Tentar Sorte">
</form>
<?php
    if(isset($_POST["txtNumero"])){
    $numero = 20;
    $gera = rand(1,100);
 
    if($gera == $numero)
        echo "Você venceu com o número: ".$numero;
    else
        echo "Você perdeu, tente novamente.";
}
?>