<?php
// Déclaration du tableau associatif de commandes
$commandes = [
    [
        'id' => 1,
        'client' => 'Alice',
        'montant' => 150,
        'payé' => true
    ],
    [
        'id' => 2,
        'client' => 'Bob',
        'montant' => 75,
        'payé' => false
    ],
    [
        'id' => 3,
        'client' => 'Charlie',
        'montant' => 300,
        'payé' => true
    ]
];

// 1. Liste des commandes avec le statut et la catégorie
echo "1. Liste des commandes:" . "<br>";
foreach ($commandes as $commande) {
    // Déterminer le statut
    $statut = $commande['payé'] ? 'payé' : 'impayé';
    
    // Déterminer la catégorie
    if ($commande['montant'] > 200) {
        $categorie = 'élévé';
    } elseif ($commande['montant'] > 100) {
        $categorie = 'moyen';
    } else {
        $categorie = 'bas';
    }
    
    echo "Commande #{$commande['id']} - Client: {$commande['client']}, Montant: {$commande['montant']} ($categorie); Statut: $statut." . "<br>";
}

// 2. Calculer le montant total des commandes
$total = 0;
foreach ($commandes as $commande) {
    $total += $commande['montant'];
}
echo "<br>" . "2. Montant total des commandes: $total" . "<br>";

// 3. Trouver la commande avec le montant le plus élevé
$maxMontant = 0;
$commandeMax = null;

foreach ($commandes as $commande) {
    if ($commande['montant'] > $maxMontant) {
        $maxMontant = $commande['montant'];
        $commandeMax = $commande;
    }
}

echo "<br>" . "3. Commande la plus élevée:" . "<br>";
echo "Commande #{$commandeMax['id']} - Client: {$commandeMax['client']}, Montant: {$commandeMax['montant']}" . "<br>";
?>