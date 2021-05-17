<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div>
	<form method="POST" action="login.php">
		<fieldset>
		<legend>Formulaire de Connection</legend>
		<table>
			<tr> 
				<?php if(!empty($_GET["error"]))  echo "Nom d'utilisateur ou mot de passe incorrect";?>
			</tr>
			<tr>
				<td><label>Nom d'utilisateur :</label></td>
				<td><input type="text" name="username" required=""></td>
			</tr>

			<tr>
				<td>Mot de passe :</td>
				<td><input type="password" name="mdp" required=""></td>
			</tr>

			<tr>
				<td>Creer votre compte </td>
				<td><a href="inscription.php">Inscrivez-vous!</a></td>
			</tr>

			<tr>
				<td><input id="bt1" type="submit" name="" value="Se Connecter"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</div>
</body>
</html>
