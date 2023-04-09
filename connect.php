<?php
$servername = "localhost"; //nom de server
$user_name = "root";//nom de l'utilisateur(par défaut c'est root)
$pass_word = "";
$dbname = "food";//nom de la base donnée créée

try {
    //Création de la connexion
    $connexion = new PDO("mysql:host=$servername; dbname", 'root', '');
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
    }
}

?>