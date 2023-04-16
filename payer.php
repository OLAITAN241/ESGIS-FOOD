<?php
// Vérification des données de paiement et insertion dans la base de données
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $numero_carte = $_POST['numero_carte'];
    $date_expiration = $_POST['date_expiration'];
    $code_securite = $_POST['code_securite'];

    // Vérifier si toutes les données ont été saisies
    if(empty($nom) || empty($prenom) || empty($email) || empty($numero_carte) || empty($date_expiration) || empty($code_securite)){
        $message = "Veuillez remplir tous les champs !";
    } else {
        // Insertion des données dans la base de données
        $servername = "localhost";
        $username = "username";
        $password = "";
        $dbname = "food";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO paiements (nom, prenom, email, numero_carte, date_expiration, code_securite)
            VALUES ('$nom', '$prenom', '$email', '$numero_carte', '$date_expiration', '$code_securite')";
            $conn->exec($sql);
            $message = "Paiement effectué avec succès !";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Paiement en ligne</title>
</head>
<body>
    <h1>Paiement en ligne</h1>
    <form method="POST" action="">
        <label>Nom :</label>
        <input type="text" name="nom" required><br><br>
        <label>Prénom :</label>
        <input type="text" name="prenom" required><br><br>
        <label>Email :</label>
        <input type="email" name="email" required><br><br>
        <label>Numéro de carte :</label>
        <input type="text" name="numero_carte" required><br><br>
        <label>Date d'expiration :</label>
        <input type="date" name="date_expiration" required><br><br>
        <label>Code de sécurité :</label>
        <input type="password" name="code_securite" required><br><br>
        <input type="submit" name="submit" value="Payer">
    </form>
    <?php if(isset($message)){ echo $message; } ?>
</body>
</html>
