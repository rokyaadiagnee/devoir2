<?php
class Client {
    public $prenom;
    public $nom;
    public $adresse;
    public $telephone;

    public function __construct($prenom, $nom, $adresse, $telephone) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }
}

class CompteBancaire {
    public $numeroCompte;
    public $solde;
    public $proprietaire;

    public function __construct($numeroCompte, $solde, $proprietaire) {
        $this->numeroCompte = $numeroCompte;
        $this->solde = $solde;
        $this->proprietaire = $proprietaire;
    }

    public function deposer($montant) {
        $this->solde += $montant;
    }

    public function retirer($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant.";
        }
    }

    public function virerVers($compteDestinataire, $montant) {
        if ($this->solde >= $montant) {
            $this->retirer($montant);
            $compteDestinataire->deposer($montant);
        } else {
            echo "Solde insuffisant pour effectuer le virement.";
        }
    }
}

class OperationBancaire {
    public static function genererReleve($compte) {
        echo "Relevé de compte pour " . $compte->proprietaire->prenom . " " . $compte->proprietaire->nom . " :\n";
        echo "Solde initial : " . $compte->solde . "\n";
        // Logique pour afficher les opérations effectuées
    }
}
?>