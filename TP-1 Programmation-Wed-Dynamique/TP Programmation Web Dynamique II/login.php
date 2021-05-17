<?php
session_start();

$username = $_POST ["username"];
$motdepasse = $_POST ["mdp"];

try
{
$bdd = new PDO('mysql:host=localhost;dbname=dbpigier;charset=utf8',"root","");

$bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}

catch (Exception $e)
{
   die("Erreur de connection à la bas de données : " . $e->getMessage());
}

$req = $bdd -> prepare ('SELECT * FROM users  WHERE username = :username ');
$res = $req ->execute(array('username' =>  $username ));

$userinfo = $req->fetch();

$mdpbase = $userinfo[ 'password' ];

$_SESSION["username"] = $userinfo["username"];
$_SESSION["auth"] = password_verify($motdepasse,$mdpbase);

var_dump($_SESSION);

if(!empty($userinfo)){
		if ($_SESSION["auth"]) {
		header("location:logon.php");
	}else{
		header("location:index.php?error=errorpassword");
	}
} else{
	header("location:index.php?error=errorpassword");
}
?>