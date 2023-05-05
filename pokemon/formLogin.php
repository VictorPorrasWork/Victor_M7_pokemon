<link rel="stylesheet" href="CSS/styles.css">
<?php
	session_start();
?>
<form method="POST" action="usuaris/validarUsuari.php">
	Username <input type="text" name="username"><br>
	Password <input type="password" name="password"><br>
	<input type="submit" value="validar">
</form>
<?php
	if(isset($_SESSION["missatge"]))
		echo "<br>".$_SESSION["missatge"];
?>