<?php
$etudiant = ["nom" => "Diallo","prenom" => "Awa","age" => 20];

// Afficher le prénom.
echo $etudiant["prenom"];
echo "<br>";echo "<br>";

// Afficher l'âge.
echo $etudiant["age"];
echo "<br>";echo "<br>";

// Afficher toutes les informations avec une boucle.
foreach ($etudiant as $key => $value) {
    echo "$key : $value"."<br>";
}