<?php
$couleurs = ["Rouge", "Vert", "Bleu", "Jaune"];

// Vérifier si "Bleu" existe dans le tableau.
// Vérifier si "Noir" existe dans le tableau.
$blueExist=false;
$noirExist=false;
foreach ($couleurs as $couleur) {
    if ($couleur=="Bleu") {
        $blueExist=true;
    }
    if ($couleur=="Noir") {
        $noirExist=true;
    }
}

// Afficher un message approprié.
if ($blueExist) {
   echo "La couleur blue est dans le tableau";
}else {
    echo "La couleur blue n'est pas dans le tableau";
}
echo "<br>";echo "<br>";

if ($noirExist) {
   echo "La couleur noire est dans le tableau";
}else {
    echo "La couleur noire n'est pas dans le tableau";
}