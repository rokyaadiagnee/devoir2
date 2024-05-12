<?php
require_once 'connexion.php';
require_once 'class.php';
$identfiant_valide ="AdresseMail";
$identfiant_valide ="password";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $adresseMail = $_POST['AdresseMail'];
    $password = $_POST['password'];


}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Comptes Bancaires</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Comptes Bancaires</h2>
        <table>
            <thead>
                <tr>
                    <th>Numéro de Compte</th>
                    <th>Solde</th>
                    <th>Propriétaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1 111 500</td>
                    <td>Latifa Dia</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2 342 000</td>
                    <td>Ndella Sokeng</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>50 000 000</td>
                    <td>Joseph Ndiaye</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<style>
    body {
    background-image: url('image4.avif');
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 50px auto;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #dddddd;
    text-align: left;
}

table th {
    background-color: #f2f2f2;
}

</style>
