
<?php
$servername = "localhost"; //nom de server
$user_name = "root";//nom de l'utilisateur(par défaut c'est root)
$pass_word = "";
$dbname = "food";//nom de la base donnée créée

try {
    //Création de la connexion
    $connexion = new PDO("mysql:host=localhost; dbname", 'root', '');
} catch(\Throwable $th) {
    die("La connexion a échoué");
    exit;
}

if(isset($_POST['envoi']) ){
    //verifier si le formulaire envoyé existe
    if( !empty($_POST['name']) & !empty($_POST['pass_word']) & !empty($_POST['email']) ){
        //verifier si les champs du nom, de pass_word et l'email sont pas vide
        //stoctage des données entrer pas l'user dans les trois variables suivantes
        $user_name=$_POST['name'];
        $email=$_POST['email'];
        $pass_word=$_POST['pass_word'];

        //requete sql qui permet de verifier si ce compte existe dans la base de donnée et laisse passer l'user
        $sql="SELECT COUNT(*) FROM inscription WHERE email='$email AND pass_word='$pass_word' AND name='$username'";
        $res=$connexion->query($sql);
        $count=$res->fetchColumn();//return un nombre
        if($count>0){
            //s'il arrive à trouver, ce qui veut dire que notre nombre retourner est supérieur à 0
            header('Location: acceuil.php'); //renvoi vers la page d'accueil
        }else{
            echo "Utilisateur ou mot de passe incorret"; //sinon il renvoi ce text
        }
    }
}

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