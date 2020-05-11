<form>

	<input type="text" name="nome">
	<input type="date" name="Nascimento">
	<input type="submit" value="OK">
	<input type="reset" value="limpar">

</form>

<?php

if(isset($_GET)){

foreach ($_GET as $key => $value) {
  
  echo $key .":". $value;
 

  echo "<br>";

}
}
?>