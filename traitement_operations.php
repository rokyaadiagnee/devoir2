<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "connexion";

// Création de la connexion
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO sur exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} 
catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $nom=$_POST['nom'];
     $adresse=$_POST['adresse'];
     $telephone=$_POST['telephone'];
     $depot=$_POST['depot'];     
     $retrait=$_POST['retrait'];
     $virement=$_POST['virement'];
     
}
?>

    