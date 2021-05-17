<?php
session_start();

$username = $_SESSION ["username"];

if ($_SESSION["auth"] == true && session_destroy()) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compte Utilisateur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<center id=centrer><?php echo "Bienvenue Mr/Mme"." ".$username." "."vous êtes connecté" ?></center>
 
</body>
</html>

<?php
}else{
	header("location:index.php");
}
?>