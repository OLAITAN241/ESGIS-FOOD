<?php



?>


<!DOCTYPE html>
<html>
<head>
	<title>Contactez-nous - ESGIS-FOOD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<h1>Contactez-nous</h1>
		<p>N'hésitez pas à nous contacter si vous avez des questions, des commentaires ou des suggestions concernant notre restaurant.</p>
		<form>
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" placeholder="Votre nom">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" placeholder="Votre adresse email">
			</div>
			<div class="form-group">
				<label for="objet">Objet :</label>
				<input type="text" class="form-control" id="objet" placeholder="L'objet de votre message">
			</div>
			<div class="form-group">
				<label for="message">Message :</label>
				<textarea class="form-control" id="message" rows="5"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
</body>
</html>
