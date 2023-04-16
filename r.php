<!DOCTYPE html>
<html>
<head>
	<title>Réservation - ESGIS FOOD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="panier.php">Panier</a></li>
				<li class="active"><a href="res.php">Réservation</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="compte.php">Mon compte</a></li>
			</ul>
		</nav>
		<div class="hero">
			<h1>Réservez votre table</h1>
		</div>
	</header>
	
	<main>
		<div class="container">
			<h2>Réservez votre table</h2>
			<form action="res.php" method="POST">
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom" required>

				<label for="prenom">Prénom :</label>
				<input type="text" id="prenom" name="prenom" required>

				<label for="email">Email :</label>
				<input type="email" id="email" name="email" required>

				<label for="telephone">Téléphone :</label>
				<input type="text" id="telephone" name="telephone" required>

				<label for="date">Date :</label>
				<input type="date" id="date" name="date" required>

				<label for="heure">Heure :</label>
				<input type="time" id="heure" name="heure" required>

				<label for="nombre_personnes">Nombre de personnes :</label>
				<input type="number" id="nombre_personnes" name="nombre_personnes" required>

				<input type="submit" value="Réserver">
			</form>
		</div>
	</main>
	
	<footer>
		<p>ESGIS FOOD - Tous droits réservés</p>
	</footer>
</body>
</html>
