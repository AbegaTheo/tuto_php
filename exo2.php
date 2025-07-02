<?php

// Interface Affichable
interface Affichable {
    public function afficherDetails();
}

// Classe Personne
class Personne {
    private string $nom;
    private int $age;
    private int $id;

    // Constructeur
    public function __construct(string $nom, int $age, int $id) {
        $this->nom = $nom;
        $this->age = $age;
        $this->id = $id;
    }

    // Getters
    public function getNom(): string {
        return $this->nom;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getId(): int {
        return $this->id;
    }

    // Setters
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }
    
    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    // Méthode sePresenter
    public function sePresenter(): void {
        echo "Bonjour, Je m'appelle {$this->nom} et j'ai {$this->age} ans.<br>";
    }
}

// Classe Etudiant qui hérite de Personne et implémente Affichable
class Etudiant extends Personne implements Affichable {
    private array $notes = [];

    // Ajouter une note
    public function ajouterNote(float $note): void {
        $this->notes[] = $note;
    }

    // Calculer la moyenne
    public function calculerMoyenne(): float {
        if (empty($this->notes)) {
            return 0;
        }
        $somme = array_sum($this->notes);
        return $somme / count($this->notes);
    }

    // Implémentation de la méthode afficherDetails()
    public function afficherDetails(): void {
        $this->sePresenter();
        echo "Notes : " . implode(" | ", $this->notes) . "<br>";
        echo "Moyenne des notes : " . number_format($this->calculerMoyenne(), 2) . "<br>";
    }
}

// --- Exemple d'utilisation ---
echo "<h6>--- Exemple 1 ---</h6>";
$etudiant = new Etudiant("Abel", 22, 1);
$etudiant->ajouterNote(15.5);
$etudiant->ajouterNote(17);
$etudiant->ajouterNote(14.75);
$etudiant->afficherDetails();

/* echo "<h6>--- Exemple 2 ---</h6>";
$etudiant2 = new Etudiant("Bob", 20, 2);
$etudiant2->ajouterNote(18);
$etudiant2->ajouterNote(16);
$etudiant2->ajouterNote(17.5);
$etudiant2->ajouterNote(19);
$etudiant2->afficherDetails(); */
