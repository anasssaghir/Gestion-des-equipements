<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demandes</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<button><a href="//localhost/MH/admin/admin_fonctions.php">Retour</a></button>
			<h1 align="center" style="color:red">Informations demandes</h1>

<?php			
$bdd = new PDO('mysql:host=localhost;dbname=gestion_equipements', 'root', '');
$reponse = $bdd->query('SELECT * FROM demande_equipement');
?>
<h2 style="color:green">Demandes des equipements :</h2>
<table align="center">
<tr>
<th>Id demande equipement</th>
<th>Nom equipement</th>
<th>Marque</th>
<th>Taille</th>
<th>Quantite</th>
<th>Reference</th>
<th>Traitement</th>
</tr>
<?php
while ($donnees = $reponse->fetch())
{
?>
<tr>
<td>
    <option value="<?php echo $donnees['idDemandesEquipement']; ?>"><?php echo $donnees['idDemandesEquipement']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['nom_equipement']; ?>"><?php echo $donnees['nom_equipement']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['marque']; ?>"><?php echo $donnees['marque']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['taille']; ?>"><?php echo $donnees['taille']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['quantite']; ?>"><?php echo $donnees['quantite']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['reference']; ?>"><?php echo $donnees['reference']; ?></option>
</td>
<td>
	<button><a href="//localhost/MH/admin/details_admin/Traiter_demandes_des_equipements.php">Traiter</a></button>
</td>
</tr>
	<?php
}
?>
</table>
<table align="center">
<tr>
<th>Id logiciel</th>
<th>Nom logiciel</th>
<th>Licence</th>
<th>Version</th>
<th>Langue</th>
<th>Traitement</th>
</tr>
<?php			
$bdd = new PDO('mysql:host=localhost;dbname=gestion_equipements', 'root', '');
$reponse = $bdd->query('SELECT * FROM demande_installation');
?>
<h2 style="color:green">Demandes des installations :</h2>
<?php			
while ($donnees = $reponse->fetch())
{
?>
<tr>
<td>
    <option value="<?php echo $donnees['idDemandesInstallation']; ?>"><?php echo $donnees['idDemandesInstallation']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['nom_logiciel']; ?>"><?php echo $donnees['nom_logiciel']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['licence']; ?>"><?php echo $donnees['licence']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['version']; ?>"><?php echo $donnees['version']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['langue']; ?>"><?php echo $donnees['langue']; ?></option>
</td>
<td>
	<button><a href="//localhost/MH/admin/details_admin/Traiter_demandes_des_installations.php">Traiter</a></button>
</td>
</tr>
	<?php
}
?>
</table>
<table align="center">
<th>Id equipement</th>
<th>Nom equipement</th>
<th>Probleme</th>
<th>Traitement</th>
<?php			
$bdd = new PDO('mysql:host=localhost;dbname=gestion_equipements', 'root', '');
$reponse = $bdd->query('SELECT * FROM demande_intervention');
?>
<h2 style="color:green">Demandes des interventions :</h2>
<?php			
while ($donnees = $reponse->fetch())
{
?>
<tr>
<td>
    <option value="<?php echo $donnees['idDemandeIntervention']; ?>"><?php echo $donnees['idDemandeIntervention']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['nom_equipement']; ?>"><?php echo $donnees['nom_equipement']; ?></option>
</td>
<td>
    <option value="<?php echo $donnees['probleme']; ?>"><?php echo $donnees['probleme']; ?></option>
</td>
<td>
	<button><a href="//localhost/MH/admin/details_admin/Traiter_demandes_des_interventions.php">Traiter</a></button>
</td>
</tr>
	<?php
}
?>
</table>

<style>
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color: #D0E3FA;
background-image: url;
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
</style>