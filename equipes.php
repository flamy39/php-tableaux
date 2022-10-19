<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$equipeRecherche = readline("Saisir une équipe : ");

// version avec boucle
$trouve = false;
foreach ($equipes as $equipe) {
    if ($equipeRecherche == $equipe) {
        $trouve = true;
        break;
    }
}
if ($trouve) {
    echo "$equipeRecherche est présente !";
} else {
    echo "$equipeRecherche n'est pas présente !";
}

// version sans boucle
if (in_array($equipeRecherche,$equipes)) {
    echo "$equipeRecherche est présente !";
} else {
    echo "$equipeRecherche n'est pas présente !";
}
