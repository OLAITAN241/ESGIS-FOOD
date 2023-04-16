<!DOCTYPE html>
<html>
<head>
	<title>Réserver une table - ESGIS FOOD</title>
</head>
<body>
	<h1>Réserver une table</h1>
	<form method="POST" action="process_reservation.php">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" required><br><br>
		<label for="email">Email :</label>
		<input type="email" name="email" required><br><br>
		<label for="date">Date :</label>
		<input type="date" name="date" required><br><br>
		<label for="nombre_personnes">Nombre de personnes :</label>
		<input type="number" name="nombre_personnes" required><br><br>
		<input type="submit" value="Réserver">
	</form>
</body>
</html>
