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
			<?php
			$i = 0;
			$cout_total = 0;
			$file = file_get_contents("database/commande.csv");
			preg_match_all("!(.*?),!", $file, $tab);
			preg_match_all("/,(.*$)/m", $file, $tab2);
    		while ($i < count($tab[1]))
        	{
					$data2 = get_csv("database/card.csv", $tab[1][$i]);
					echo '<div class="carte2">
					<h2>'.$data2[1].'</h2>
    				<h3><b>'.$data2[3].'</b></h3> 
					<img src="cartes/'.$data2[2].'" alt="Avatar" style="width:200px">
					<p style="color:green">Prix:'.$data2[4] * $tab2[1][$i].'$   quantitee : '.$tab2[1][$i].'</p>';

					$cout_total += $data2[4] * $tab2[1][$i];
				$i++;
			}
			echo '<p style="color:gold;font-size=20px;" >cout total = '.$cout_total.'</p>'
			?>
		</div>
	</div>
	</body></center>
</html>