<?php

$notes  = [10,12.5,14,7,15,9.5,8];

// version boucle
// Vérifier s'il y a des notes dans le tableau
if (count($notes) > 0 ) {
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;   // $somme = $somme +$note
    }
    $moyenne = $somme / count($notes);
    echo round($moyenne, 2);
} else {
    echo "Il n'a aucune note !";
}
echo PHP_EOL;

// version sans boucle
if (count($notes) > 0) {
    $moyenne = array_sum($notes) / count($notes);
    echo round($moyenne,2);
}

// Appréciation
if ($moyenne < 10) {

} elseif ($moyenne < 12) {

} elseif ($moyenne < 14) {

} elseif ($moyenne < 16) {

} else {

}

