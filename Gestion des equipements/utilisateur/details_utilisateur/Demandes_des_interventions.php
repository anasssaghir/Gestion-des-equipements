<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demande d'intervention</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="//localhost/MH/css/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
		<button><a href="//localhost/MH/utilisateur/utilisateur_fonctions.php">Retour</a></button>
			<h1>Informations equipement</h1>
			<form method="post">	
			<table>
			<tr>
				<input type="text" name="A"  placeholder='Nom equipement' required>
			</tr>
			<tr>
				<input type="text" name="B"  placeholder='Probleme' required>
			</tr>
			</table>
				<input type="submit" name ="submit" type="submit" value="Enregistrer la demande">
<?php
$con=mysqli_connect("localhost","root","","gestion_equipements");
if(ISSET($_POST['submit'])){
	if(!$con){
	die("connection failed".mysqli_connect_error());
	}else{
		$sql = "insert into demande_intervention (nom_equipement,probleme)
		VALUES ('".$_POST['A']."',
		'".$_POST['B']."')";
		if(mysqli_query($con,$sql)){
			echo "Nouvelle demande d'intervention ajouter";
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