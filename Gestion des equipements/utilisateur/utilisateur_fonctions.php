<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Espace Utilisateur</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="../css/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
		<button><a href="//localhost/MH/utilisateur_login.php">Retour</a><button>
			<h1>Espace Utilisateur</h1>
			<form method="post">	
				<input type="submit" name="A"  value='Demande des equipements'>
				<input type="submit" name="B"  value='Demandes des installations'>
				<input type="submit" name="C"  value='Demandes des interventions'>
		</form>
		</div>
	</body>
</html>	
<?php
$con=mysqli_connect("localhost","root","","gestion_equipements");
if(ISSET($_POST['A']))
	{
	header("location: details_utilisateur/Demandes_des_equipements.php");
	}
else if(ISSET($_POST['B']))
	{
	header("location: details_utilisateur/Demandes_des_installations.php");
	}
else if(ISSET($_POST['C']))
	{
	header("location: details_utilisateur/Demandes_des_interventions.php");
	}
?>