<?php

	$test = 'chemin';
	$remonte = __DIR__ . '/';
	while (!is_file($remonte."test.inc"))
		$remonte = $remonte."../";
	require $remonte.'test.inc';

	$n = count(explode(":",$GLOBALS['dossier_squelettes']));

	$chemin = creer_chemin();
	_chemin('toto');
	$chemin1 = creer_chemin();

	if (count($chemin1) != (count($chemin)+1)) {
		die('Erreur ajout chemin par la fonction _chemin() : mauvais compte'.var_dump($chemin).var_dump($chemin1));
	}

	if ($GLOBALS['dossier_squelettes']) {
		// toto a été ajouté après les chemins de dossier squelettes
		if ('toto/'!==$chemin1[$n] AND 'toto/'!==$chemin1[$n+1]) {
			die('Erreur ajout chemin par la fonction _chemin() : avec dossier_squelettes'.var_dump($chemin).var_dump($chemin1));
		}
	} else {
		// toto a été ajouté au tout début (dossier squelettes étant vide)
		// ou juste après un répertoire 'squelettes' existant
		if (@is_dir(_DIR_RACINE . 'squelettes')) {
			if ('toto/' !== $chemin1[1]) {
				die('Erreur ajout chemin par la fonction _chemin() : sans dossier_squelettes avec répertoire squelettes'.var_dump($chemin).var_dump($chemin1));
			}
		} elseif ('toto/'!==$chemin1[0]) {
			die('Erreur ajout chemin par la fonction _chemin() : sans dossier_squelettes sans répertoire squelettes'.var_dump($chemin).var_dump($chemin1));
		}
	}

	$GLOBALS['dossier_squelettes']= "titi:".$GLOBALS['dossier_squelettes'];
	$chemin2 = creer_chemin();
	if ( (count($chemin2)==count($chemin1))  OR 'titi/'!==reset($chemin2) )
		die('Erreur prise en compte dossier squelette'.var_dump($chemin1).var_dump($chemin2));

	echo "OK";


