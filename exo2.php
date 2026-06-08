<?php

$fruits = ["Pomme", "Banane", "Orange", "Mangue"];


// Afficher le nombre de fruits.
echo "Le nombre de fruit est: ".count($fruits);

// Ajouter un fruit à la fin du tableau.
$fruits[]="Ananas";
array_push($fruits,"Poire");
echo "<br>";echo "<br>";

// Réafficher le nombre de fruits.
echo "Le nombre de fruit apres ajout est: ".count($fruits);

// var_dump($fruits);

