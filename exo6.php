<?php
$produit = [
    "nom" => "Ordinateur",
    "prix" => 350000,
    "stock" => 15
];

// Afficher le nom du produit.
echo $produit['nom'];
echo "<br>";echo "<br>";

// Afficher son prix.
echo $produit['prix'];
echo "<br>";echo "<br>";
// Afficher : "Produit disponible" si le stock est supérieur à 0.

if ($produit['stock']>0) {
    echo "Produit disponible";
}else {
    echo "Produit indisponible";
}
