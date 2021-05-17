<?php
if (!empty($_POST)) {
	$username = $_POST["username"];
	$motdepasse = $_POST["mdp"];
	$motdepasse = password_hash($motdepasse,PASSWORD_BCRYPT);
	$confirmermdp = $_POST["confmdp"];

try
{
$bdd = new PDO('mysql:host=localhost;dbname=dbpigier;charset=utf8',"root","");

$bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}

catch (Exception $e)
{
   die("Erreur de connection à la bas de données : " . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO users (username, password) VALUES(?,?)');
$res = $req->execute(array($username,$motdepasse));

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
	<form id="form" method="POST" action="">
		<fieldset>
		<legend>Formulaire d'inscription</legend>
			<table>
								
				<tr>
					<td><label>Votre nom d'utilisateur :</label></td>
					<td><input type="text" name="username"/></td>
				</tr>

				<tr>
					<td><label>Mot de passe:</label></td>
					<td><input type="password" name="mdp"/></td>
				</tr>

				<tr>
					<td>Confirmer mot de passe :</td>
					<td><input type="password" name="confmdp"></td>
				</tr>

				<tr>
					<td><input  type="reset"  value="Annuler"></td>
					<td><input  type="submit"  value="S'inscrire"></td>
					<td><a href="index.php">Connectez-vous!</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	</body>
</html>
