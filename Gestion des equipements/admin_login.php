<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Espace Admin</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="css/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
		<button><a href="index.php">Retour</a><button>
			<h1>Espace Admin</h1>
			<form name="form" method="post">	
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user" placeholder="Username" id="username_admin" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="pass" placeholder="Password" id="password_admin" required>
				<input type="submit" name ="submit" type="submit" value="Login">
							<?php
$con = mysqli_connect("localhost","root","","gestion_equipements");
if(ISSET($_POST['submit'])){
	$login=$_POST['user'];
	$password=$_POST['pass'];
	$sql=$con -> query("SELECT password_admin FROM administrateur WHERE username_admin= '$login'")or die('Erreur');

	if($ligne=mysqli_fetch_array($sql)) {
		 if($password==$ligne['password_admin']){
		$_SESSION['username_admin']=$login;
		header("location: admin/admin_fonctions.php");
		exit();
	}else{
		echo "Mot de passe invalide";
		exit();
	}
 }else{
		echo "user introuvable";
 }
}
?>
		</form>
		</div>
	</body>
</html>	