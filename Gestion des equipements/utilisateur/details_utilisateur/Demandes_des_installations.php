<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demande Installation</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="//localhost/MH/css/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
		<button><a href="//localhost/MH/utilisateur/utilisateur_fonctions.php">Retour</a></button>
			<h1>Informations logiciel</h1>
			<form method="post">	
			<table>
			<tr>
				<input type="text" name="A"  placeholder='Nom logiciel' required>
			</tr>
			<tr>
				<input type="text" name="B"  placeholder='Licence' required>
			</tr>
			<tr>
				<input type="text" name="C"  placeholder='Version' required>
			</tr>
			<tr>
				<input type="text" name="D"  placeholder='Langue' required>
			</tr>
			</table>
				<input type="submit" name ="submit" type="submit" value="Enregistrer la demande">
				<?php
$con=mysqli_connect("localhost","root","","gestion_equipements");
if(ISSET($_POST['submit'])){
	if(!$con){
	die("connection failed".mysqli_connect_error());
	}else{
		$sql = "insert into demande_installation (nom_logiciel,licence,version,langue)
		VALUES ('".$_POST['A']."',
		'".$_POST['B']."',
		'".$_POST['C']."',
		'".$_POST['D']."')";
		if(mysqli_query($con,$sql)){
			echo "Nouvelle demande d'installation ajouter";
		}else{
			echo "Erreur".$sql."<br>".mysqli_error($con);
		}
	}
}
?>
		</form>
		</div>
	</body>
</html>	