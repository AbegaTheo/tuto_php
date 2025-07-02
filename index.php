<?php
/* // 1. Entiers (int)
$age = 25;
$nombreProduits = -3;

// 2. Nombres à virgule flottante
$prix = 19.99;
$temperature = -3.5;

// 3. Chaînes de caractères (string)
$prenom = "Jean";
$message = 'Bonjour le monde !';

// 4. Booléens (bool)
$estActif = true;
$estAdmin = false;

// 5. Tableaux (array)
$fruits = ["Pomme", "Banane", "Orange"];
$couleurs = array("Rouge", "Vert", "Bleu"); 

// 6. Tableaux associatifs
$personne = [
    "nom" => "Dupont",
    "age" => 30,
    "estEtudiant" => false
];

// 7. NULL
$variableNull = null;

// 8. Objets (object)
$date = new DateTime();

// Affichage de 1-4, et 7
echo "Types Entiers (int) : " . $age . " et " . $nombreProduits . "<br>";
echo "Types Nombres à virgule flottante : " . $prix . " et " . $temperature . "<br>";
echo "Types Chaînes de caractères (string) : " . $prenom  . " - " . $message. "<br>";
echo "Types Booléens (bool) : " . $estActif . " et " . $estAdmin . "<br>";
echo "Types NULL : " . $variableNull . "<br>";
echo "Types Tableaux (array) :" . "<br>";
echo "<pre>";
print_r($fruits);
print_r($couleurs);
echo "<pre>";
echo "Types Tableaux associatifs : " . $personne["nom"] . " a " . $personne["age"] . " ans et " . ($personne["estEtudiant"] ? "est étudiant" : "n'est pas étudiant") . "<br>";
echo "Types Objets (object) : " . $date->format('d/m/Y H:i:s') . "<br>"; */

// 9. Ressources (fichier)
/* $fichier = fopen("fichier.txt", "r");

// 10. Fonctions anonymes
$maFonction = function($x) { return $x * 2; };

if ($fichier) {
    while (($ligne = fgets($fichier)) !== false) { echo htmlspecialchars($ligne) . "<br>"; }
    fclose($fichier);
} else { echo "Erreur : Impossible d'ouvrir le fichier."; } 

$resultat = $maFonction(5);
echo "Le résultat est : " . $resultat . "<br>";

//Les structures de controles :  d'abord les conditions (if, elseif, else et switch) Ex : 
$note = 14;
if ($note >= 16) {
    echo "Très bien";
} elseif ($note >= 12) {
    echo "Assez bien" . "<br>";
} else {
    echo "Passable" . "<br>";
}

// switch
$jour = "Lundi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine" . "<br>";
        break;
    case "Vendredi":
        echo "Bientôt le week-end" . "<br>";
        break;
    default:
        echo "Jour quelconque" . "<br>";
}

// ensuites les boucles (for, while, do-while et foreach). Ex : 
// for
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
// while
$i = 0;
while ($i < 5) {
    echo $i . " ";
    $i++;
}
// do-while
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i < 5);
//foreach
$pays = ["France", "Allemagne", "Espagne"];
foreach ($pays as $p) {
    echo "<br>" . $p . " ";
} */

require "voiture.php";

$maVoiture = new Voiture();
$maVoiture->marque = "Toyota";
$maVoiture->rouler(100);
$maVoiture->kilometrage = 400;
echo $mavoiture->kilometrage;
?>