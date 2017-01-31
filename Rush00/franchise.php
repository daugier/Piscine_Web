<?php
	include "database/get_csv.php";
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
			<?php
			$i = 1;
			$j = 0;
			$len = 1;
			while (($data = get_csv("database/type_of_card.csv", $i)) !== false)
			{
				if (is_numeric($data[0]) == TRUE)
					$len++;
				$i++;
			}
			$i = 1;
			$len--;
			while ($i <= $len)
			{
				$data = get_csv("database/type_of_card.csv", $i);
				echo '<div id="login">
				<div class="form">
					<form class="end" action="categorie.php" method="get" target="_self">
						<h3>Categorie</h3>
						<div>
							<input class= "nodisplay" name="type" value="'.$data[0].'">
							<button type="submit" value="OK">'.$data[1].'</button>
						</div>
					</form>
				</div>
				</div>';
				$i++;
			}
			?>
			<div id="login" class="shadow">
				<div class="form">
					<form class="connexion" action="login.php" method="get" target="_self">
						<h3>Connexion</h3>
						<div>
							<label>Identidiant</label>
							<input type="text" placeholder="Entrez identifiant" name="identifiant" required>
							<label>Mot de passe</label>
							<input type="password" placeholder="Entez mot de passe" name="mot de passe" required>
							<button class="btn" type="submit" value="OK">Go</button>
	            		 	<a href="#" class="quit">X</a>
						</div>
					</form>
				</div>
			</div>
			<div id="register" class="shadow">
				<div class="form">
					<form class="connexion" action="register.php" method="get" target="_self">
						<h3>Inscription</h3>
						<div>
							<label>Identidiant</label>
							<input type="text" placeholder="Entrez identifiant" name="identifiant" required>
							<label>Mot de passe</label>
							<input type="password" placeholder="Entez mot de passe" name="mot de passe" required>
							<button class="btn" type="submit" value="OK">Go</button>
 	    		        	<a href="#" class="quit">X</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><center>
	</body>
</html>