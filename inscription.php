<?php
require_once 'connexion.php';
require_once 'class.php';
$identfiant_valide ="email";
$identfiant_valide ="motdepasse";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $adressemail = $_POST['email'];
    $password = $_POST['motdepasse'];


}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<body>
    <header>
        
    </header>
    
    <section class="login-form"><h1> Se Connexion</h1>
        <form method="post" action="/index.php">
            <label for="username">AdresseMail:</label><br>
            <input type="text" id="email" name="email" required><br>
            <label for="motdepasse">Mot de passe:</label><br>
            <input type="motdepasse" id="motdepassed" name="motdepasse" required><br><br>
            <input type="submit" value="login">
        </form>
                    <p class="error"></p>
            </section>
    
   
</html>
</body>
<style>
        
        body {
    background-image: url('images2.jpeg');
    background-position: 0%;
    margin: 0;
    padding: 0;
}
header {
    color: #f07909;
    padding: 20px 0;
    text-align: center;
    
}
.login-form {
    width: 320px; 
    margin: 50px auto 0; 
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc; 
    border-radius: 5px;
    box-shadow: 0 0 10px black;
}
label {
    display: block;
    margin-bottom: 5px;
    
}
input[type="text"],
input[type="password"] {
    width: calc(100% - 22px); 
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
input[type="submit"] {
    width: calc(100% - 22px); 
    padding: 10px;
    background-color: #2053ca;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #2d1b12;
}
.error {
    color: red;
    margin-top: 10px;
}
footer {
    color: #180901;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
    
}

        
    </style>