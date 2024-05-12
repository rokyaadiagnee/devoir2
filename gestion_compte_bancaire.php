<?php
require_once 'connexion.php';
require_once 'class.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom=$_POST['nom'];
    $adresse=$_POST['adresse'];
    $telephone=$_POST['telephone'];
    $depot=$_POST['depot'];     
    $retrait=$_POST['retrait'];
    $virement=$_POST['virement'];

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
        <h2>gestion des Comptes Bancaires</h2>
        <table>
            <thead>
            <tr>
                    <th>Numéro de Compte</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                    <th>telephone</th>
                    <th>depot</th>
                    <th>retrait</th>
                    <th>virement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td> Dia</td>
                    <td>Latifa </td>
                    <td>latifadia@gmail.com </td>
                    <td>110002233 </td>
                    <td>200000 </td>
                    <td>250000</td>
                    <td>1500000</td>
                </tr>
                <tr>
                     <td>2</td>
                    <td> Sokeng</td>
                    <td> Ndella </td>
                    <td> ndellasokeng@gmail.com</td>
                    <td>223339900 </td>
                    <td>50000000 </td>
                    <td>230000</td>
                    <td>300000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td> Ndiaye</td>
                    <td>Joseph </td>
                    <td>josephndiaye@gmail.com </td>
                    <td>334448877 </td>
                    <td>90000000 </td>
                    <td>870000</td>
                    <td>4500000</td>
            
                </tr>
            </tbody>
        </table>
    </div>
                        
<button> <input type="text" id="depot" name="depot" required>depot</button>
<button> <input type="text" id="Retrait" name="Retrait" required> Retrait</button>
<button> <input type="text" id="Virement" name="Virement" required>Virement</button>
<input type="submit" value="envoyer">
</body>
</html>
<style>
body {
    background-image: url('images5.jpeg');
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    background-repeat: round;
}

.container {
    width: 80%;
    margin: 20px auto;
}

h2 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    padding: 10px 20px;
    background-color: #2053ca;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="text"] {
    padding: 5px;
    width: 150px;
    margin-right: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #2053ca;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover,
input[type="submit"]:hover {
    background-color: #2053ca;
}
</style>

    