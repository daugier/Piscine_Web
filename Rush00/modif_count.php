<?php
	session_start();
?>
<html>
	<head>
	<title>L'heure du Duel !</title>
		<link type="text/css" href="./css/interface.css" media="all" rel="stylesheet"/>
	</head>
	<body>
	<center><div>
		<div class="title">
			<a href="index.php"><img src="img/colo.png" style="width:500px;height:200px;"></a>
		</div>
		<div class="cadre">
			<div class="menu">
				<ul>
					<?php
						if ($_SESSION["logged_on_user"] != 0)
						{
							echo '<li><a href="logout.php">Deconnexion</a></li>';
							echo '<li><a href="modif_count.php">mon compte</a></li>';
							if ($_SESSION["logged_on_user"] == 2)
							{
								echo '<li><a href="admin.php">Administrateur</a></li>';
								echo '<li><a href="commande.php">Commande</a></li>';
							}
						}
						else
						{
							echo '<li><a href="#login">Connexion</a></li><li><a href="#register">Inscription</a></li>';
						}
					?>
					<li><a href="produits.php">Produits</a></li>
					<li><a href="panier.php">Panier</a></li>
					<li><a href="franchise.php">Categories</a></li>
				</ul>
			</div>
			<div class="form">
				<div class="admin" style="top: 25%;">
					<form action="modif_acc.php" method="get" target="_self">
						<h3>Changer mon mot de passe</h3>
						<div>
							<label>Identidiant</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez identifiant" name="login" required>
							<label style="margin-left:-65px;"></br>Ancien Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="password" required>
							<label style="margin-left:-18px;"></br>Nouveau Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="newpassword" required>
							<button type="submit" value="OK">Modifier</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top: 50%;">
					<form action="supprimer_mon_compte.php" method="get" target="_self">
						<h3>Supprimer mon compte</h3>
						<div>
							<label>Identidiant</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez identifiant" name="login" required>
							<label style="margin-left:55px;"></br>Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="password" required>
							<button type="submit" value="OK">Supprimer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div></center>
	</body>
</html>