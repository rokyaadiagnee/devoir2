<?php
require_once 'connexion.php';
require_once 'class.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
     $prenom=$_POST['prenom'];{
     $nom=$_POST['nom'];
     $adresseMail = $_POST['email'];
     $telephone=$_POST['telephone'];
     $numerodecompte = $_POST['numerodecompte'];
     $solde=$_POST['solde'];
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css.css">
 

<form method="post"><h2>Création de Compte Bancaire</h2>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>
    
    <label for="email">email:</label>
    <input type="text" id="email" name="email" required><br><br>
    
    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone" required><br><br>
    
    <label for="numeroCompte">Numéro de Compte :</label>
    <input type="text" id="numerodeCompte" name="numerodeCompte" required><br><br>
    
    <label for="solde">Solde Initial :</label>
    <input type="text" id="solde" name="solde" required><br><br>
    
    <input type="submit" value="Se connecter">
</form>

</body>
</html>

<style>
body {
    background-image: url('image3.jpg');
    background-repeat: round;
    color: black;
    font-family: Arial, sans-serif;
  }
  
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid black;
  }
  
  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid black;
  }
  
  input[type="submit"] {
    background-color: black;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }
  </style>