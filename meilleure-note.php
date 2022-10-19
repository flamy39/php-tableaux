<?php

$notes  = [10,12.5,14,7,15,9.5,8];

// Version avec boucle
$noteMax = 0;
foreach ($notes as $note) {
    if ($note > $noteMax) {
        $noteMax = $note;
    }
}
echo $noteMax;
echo PHP_EOL;
// Version sans boucle
$noteMax = max($notes);
echo $noteMax;
