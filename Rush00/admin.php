<?php
	include "admin/rm_user.php";
	session_start();
?>
<html>
	<head>
	<title>L'heure du Duel !</title>
		<link type="text/css" href="./css/interface.css" media="all" rel="stylesheet"/>
	</head>
	<body>
	<center><body>
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
				<div class="admin" style="top: 10%;">
					<form action="register.php" method="get" target="_self">
						<h3>Creer un compte</h3>
						<div>
							<label>Identidiant</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez identifiant" name="login" required>
							<label>Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="password" required>
							<button type="submit" value="OK">Creer</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top: 25%;">
					<form action="rm_user.php" method="get" target="_self">
						<h3>Supprimer un compte</h3>
						<div>
							<label>Identidiant</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez identifiant" name="login" required>
							<button type="submit" value="OK">Supprimer</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:40%;">
					<form action="access.php" method="get" target="_self">
						<h3>Ajouter un admin</h3>
						<div>
							<label>Identidiant</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez identifiant" name="login" required>
							<button type="submit" value="OK">Autoriser</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:59%;">
					<form action="add_card_stock.php" method="get" target="_self">
						<h3>Ajouter une carte</h3>
						<div>
							<label>Nom de la carte</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez le nom de la carte" name="nom_de_la_carte" required>
							<label>Image</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez l'image" name="img" required>
							<label></br>License</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez la license" name="license" required>
							<label>Prix</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez le prix" name="prix" required>
							<label></br>Stock disponible</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez le nombre" name="stock_disponible" required>
							<button type="submit" value="OK">Ajouter</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:78%;">
					<form action="rm_card_stock.php" method="get" target="_self">
						<h3>Supprimer une carte</h3>
						<div>
							<label>Id de la carte</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez l'id de la carte" name="id" required>
							<button type="submit" value="OK">Supprimer</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:92%;">
					<form action="add_categorie.php" method="get" target="_self">
						<h3>Ajouter une categorie</h3>
						<div>
							<label>nom de la categorie</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez nom categorie" name="type" required>
							<button type="submit" value="OK">Ajouter</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:106%;">
					<form action="rm_categorie.php" method="get" target="_self">
						<h3>Supprimer une categorie</h3>
						<div>
							<label>nom de la categorie</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez nom categorie" name="type" required>
							<button type="submit" value="OK">Supprimer</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:122%;">
					<form action="add_card_in_type.php" method="get" target="_self">
						<h3>Ajouter une carte a une categorie</h3>
						<div>
							<label>Id de la carte</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez un ID carte" name="carte_id" required>
							<label></br>Id categorie</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez id categorie" name="type_id" required>
							<button type="submit" value="OK">Ajouter</button>
						</div>
					</form>
				</div>
				<div class="admin" style="top:140%;">
					<form action="rm_card_in_type.php" method="get" target="_self">
						<h3>supprimer une carte d'une categorie</h3>
						<div>
							<label>Id de la carte</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez un ID carte" name="carte_id" required>
							<label></br>Id categorie</label>
							<input style="margin-top:20px;" type="text" placeholder="Entrez id categorie" name="type_id" required>
							<button type="submit" value="OK">supprimer</button>
						</div>
					</form>
				</div>
			</div>
	</div>
	</body></center>
</html>