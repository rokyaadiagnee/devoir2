<?php
require_once 'connexion.php';
require_once 'class.php';
// Vérifiez si la requête est une requête AJAX POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['operation']) && $_POST['operation'] == 'virement') {
    // Récupérez les numéros de compte source et destination et le montant du virement
    $numeroCompteSource = $_POST['numeroCompteSource'];
    $numeroCompteDest = $_POST['numeroCompteDest'];
    $montant = $_POST['montant']; // Assurez-vous que ce paramètre est envoyé par la requête AJAX

    // Effectuez ici les opérations de virement (mise à jour de la base de données, etc.)

    // Réponse du serveur
    echo "Virement effectué avec succès du compte numéro " . $numeroCompteSource . " vers le compte numéro " . $numeroCompteDest;
}
?>