<?php
$notes = [12, 15, 18, 10, 14];


// Calculer la somme des notes.
$somme = 0;
$max=$notes[0];
foreach($notes as $note){
    $somme=$somme + $note;
    if ($note>$max) {
        $max=$note;
    }
}

// Calculer la moyenne.
$moyenne = $somme/count($notes);

// Afficher la note la plus élevée.

echo "La somme est : $somme ";
echo "<br>";echo "<br>";
echo "La moyenne est : $moyenne ";

echo "<br>";echo "<br>";
echo "La plus grande note est : $max ";
