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
			$type = $_GET['type'];
			$data = get_csv("database/type_of_card.csv", $type);
			$i = 2;
			while ($data[$i])
			{
				if (($data2 = get_csv("database/card.csv", $data[$i])) !== false)
				{
					echo '<div class="carte">
					<h2>'.$data2[1].'</h2>
    				<h3><b>'.$data2[3].'</b></h3> 
					<img src="cartes/'.$data2[2].'" alt="Avatar" style="width:200px">
					<p style="color:green">Prix:'.$data2[4].'$</p>
					<form action="add_card.php" method="get" target="_self">
						<input class= "nodisplay" name="type" value="'.$type.'">
						<input class= "nodisplay" name="id" value="'.$data2[0].'">
					    <input class= "nodisplay" name="page" value="4">
						<button type="submit" value="OK">Ajouter au panier</button>
					</form>
					</div>';
				}
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