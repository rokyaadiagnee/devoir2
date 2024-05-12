<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images1.jpeg'); 
            background-size: cover; 
            background-position: center;
            
            
        }

        .menu {
            background-color: #555;
            padding: 10px 0;
            margin: auto;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            display: inline;
        }

        .menu ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        .menu ul li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="compte_bancaire.php">Création de Compte Bancaire</a></li>
            <li><a href="gestion_compte_bancaire.php">gestion compte bancaire</a></li>
            <li><a href="historique.php">historique</a></li>
        </ul>
    </div>
</body>
</html>
