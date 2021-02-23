<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demandes</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="//localhost/MH/css/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div class="login">
	<button><a href="Consulter_les_demandes.php">Retour</a></button>
	<h1>Verifier Traitement</h1>
	<?php
$con=mysqli_connect("localhost","root","","gestion_equipements");
if(ISSET($_POST['submit'])){
	if(!$con){
	die("connection failed".mysqli_connect_error());
	}else{
		$sql = "delete from demande_installation where idDemandesInstallation='".$_POST['A']."'";
		if(mysqli_query($con,$sql)){
			echo "Nouvelle demande d'installation traiter";
		}else{
			echo "Erreur".$sql."<br>".mysqli_error($con);
		}
	}
}
?>
				<form method="post">
		<SELECT name="A">
<?php			
$bdd = new PDO('mysql:host=localhost;dbname=gestion_equipements', 'root', '');
$reponse = $bdd->query('SELECT * FROM demande_installation');
 
while ($donnees = $reponse->fetch())
{
?>
    <option value="<?php echo $donnees['idDemandesInstallation']; ?>"><?php echo $donnees['idDemandesInstallation'] ; ?> - <?php echo $donnees['nom_logiciel']; ?></option>
	<?php
}
?>
	</SELECT>
      <button name="submit" type="submit" class="btn btn-success" id="contact-submit" data-submit="...Register">Confirmer</button>
		</form>
		</div>
	</body>
</html>
<style>

SELECT {
	display: inline;
	align: center;
}

</style>