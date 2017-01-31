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
						<h3>Commande validee</h3>
					</form>
				</div>
			</div>
		</div>
	</div></center>
	</body>
</html>