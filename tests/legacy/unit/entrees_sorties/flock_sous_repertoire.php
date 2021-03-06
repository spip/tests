<?php

/**
 * Tests unitaires de sous_repertoire()
 * du fichier ecrire/inc/flock.php
 */

$test = 'sous_repertoire';
$remonte = __DIR__ . '/';
while (!is_file($remonte . "test.inc")) {
    $remonte = $remonte."../";
}
require $remonte . 'test.inc';

$ok = true;

$sous_repertoire = 'test' . md5(rand());

include_spip('inc/flock');

$ok = (sous_repertoire(_NOM_TEMPORAIRES_ACCESSIBLES, $sous_repertoire) === _NOM_TEMPORAIRES_ACCESSIBLES . $sous_repertoire . '/');

// Nettoyage
@unlink(_NOM_TEMPORAIRES_ACCESSIBLES . $sous_repertoire . '/.ok');
@rmdir(_NOM_TEMPORAIRES_ACCESSIBLES . $sous_repertoire);

if ($ok) {
    echo "OK";
}
