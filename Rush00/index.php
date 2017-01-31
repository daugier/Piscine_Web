<?php
include "database/get_csv.php";
	session_start();
?>
<html>
	<head>
	<title>L'heure du Duel !</title>
		<link type="text/css" href="./css/interface.css" media="all" rel="stylesheet"/>
	</head>
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
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="img/img1.png" style="width:300px;height:120px;">
				</div>
				<div class="mySlides fade">
					<img src="img/img2.png" style="width:300px;height:120px;">
				</div>
				<div class="mySlides fade">
					<img src="img/img3.png" style="width:300px;height:120px;">
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);
				function plusSlides(n)
				{
 					showSlides(slideIndex += n);
				}
				function currentSlide(n)
				{
 					showSlides(slideIndex = n);
				}
				function showSlides(n)
				{
 					var i;
 					var slides = document.getElementsByClassName("mySlides");
 					var dots = document.getElementsByClassName("dot");
					if (n > slides.length)
					{
							slideIndex = 1
					} 
					if (n < 1)
					{
						slideIndex = slides.length
					}
					for (i = 0; i < slides.length; i++)
					{
  						slides[i].style.display = "none"; 
					}
					for (i = 0; i < dots.length; i++)
					{
    					dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block"; 
					dots[slideIndex-1].className += " active";
				}	
			</script>
			<?php
			$i = 1;
			$j = 0;
			$len = 1;
			while (($data = get_csv("database/card.csv", $i)) !== false)
			{
				if ($data[0] >= 1)
					$len++;
				$i++;
			}
			$i = 0;
			$len--;
			while ($j < 8 && $j < $len)
			{
				$data = get_csv("database/card.csv", $i);
				if ($data[0] >= 1)
				{
					echo '<div class="carte">
					<h2>'.$data[1].'</h2>
    				<h3><b>'.$data[3].'</b></h3> 
					<img src="cartes/'.$data[2].'" alt="Avatar" style="width:200px">
					<p style="color:green">Prix:'.$data[4].'$</p>
					<form action="add_card.php" method="get" target="_self">
					    <input class= "nodisplay" name="id" value="'.$data[0].'">
					     <input class= "nodisplay" name="page" value="1">
						<button type="submit" value="OK">Ajouter au panier</button>
					</form>
					</div>';
					$j++;
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
							<input type="text" placeholder="Entrez identifiant" name="login" required>
							<label>Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="password" required>
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
							<input type="text" placeholder="Entrez identifiant" name="login" required>
							<label>Mot de passe</label>
							<input type="password" placeholder="Entrez mot de passe" name="password" required>
							<button class="btn" type="submit" value="OK">Go</button>
              				<a href="#" class="quit">X</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body></center>
</html>