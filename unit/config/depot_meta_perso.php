<?php

	// nom du test
	$test = 'config/meta_perso';

	// recherche test.inc qui nous ouvre au monde spip
	$deep = 1;
	$include = '../tests/test.inc';
	while (!defined('_SPIP_TEST_INC') && $deep++ < 6) {
		$include = '../' . $include;
		@include $include;
	}
	if (!defined('_SPIP_TEST_INC')) {
		die("Pas de $include");
	}

	include_spip('inc/config');

### verifier que la table spip_toto n'existe pas deja ! ###

	$trouver_table = charger_fonction('trouver_table','base');
	if (isset($GLOBALS['toto']) OR $trouver_table('spip_toto'))
		die('<b>Une table spip_toto existe deja !</b>');

### lire_config meta ###

	$meta = $GLOBALS['meta'];
	
	// les bases de test
	$assoc = array('one' => 'element 1', 'two' => 'element 2');
	$serassoc = serialize($assoc);
	
	// on flingue meta a juste nos donnees
	$GLOBALS['meta'] = array('dummy'=>'');
	$GLOBALS['toto'] = array(
		'zero' => 0,
		'zeroc' => '0',
		'chaine' => 'une chaine',
		'assoc' => $assoc,
		'serie' => serialize($assoc)
	);

	$essais[] = array(0, '/toto/zero');
	$essais[] = array('0', '/toto/zeroc');
	$essais[] = array('une chaine', '/toto/chaine');
	$essais[] = array($assoc, '/toto/assoc');
	$essais[] = array($assoc, '/toto/serie');
	$essais[] = array(serialize($assoc), '/toto/serie','',0);
	$essais[] = array(null, '/toto/rien');
	$essais[] = array('defaut', '/toto/rien','defaut');
	$essais[] = array(null, '/meta/chaine');
	$essais[] = array(null, 'chaine');

	$err = tester_fun('lire_config', $essais);

	// retablissement des metas
	$GLOBALS['meta']=$meta;
	unset($GLOBALS['toto']);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<b>lire_config meta</b><dl>' . join('', $err) . '</dl>');
	}

### ecrire_config meta ###

	/*
	 * Notes sur l'ecriture :
	 * - dans le tableau $GLOBALS['meta'], les valeurs transmises
	 * conservent effectivement leur type
	 * - si l'on applique un lire_metas() (reecriture du tableau $GLOBALS['meta']
	 * depuis les informations de la table spip_meta, les types de valeurs
	 * sont tous des types string (puisque la colonne 'valeur' de spip_meta est
	 * varchar (ou text).
	 * 	- 0 devient alors '0'
	 *  - array(xxx) devient 'Array'
	 *
	 * Cela ne se produit pas avec le depot 'metapack' qui serialize systematiquement
	 * tout ce qu'on lui donne (et peut donc restituer le type de donnee correctement).
	 *
	 */
	$essais = array();
	$essais[] = array(true, '/toto/test_cfg_zero', 0);
	$essais[] = array(true, '/toto/test_cfg_zeroc', '0');
	$essais[] = array(true, '/toto/test_cfg_chaine', 'une chaine');
	$essais[] = array(true, '/toto/test_cfg_assoc', $assoc);
	$essais[] = array(true, '/toto/test_cfg_serie', serialize($assoc));

	$err = tester_fun('ecrire_config', $essais);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<b>ecrire_config meta</b><dl>' . join('', $err) . '</dl>');
	}

	if (!isset($GLOBALS['toto']) OR !$trouver_table('spip_toto'))
		die('<b>La table spip_toto n\'a pas ete cree !</b>');
	
### re lire_config meta ###

	$essais = array();
	$essais[] = array(0, '/toto/test_cfg_zero');
	$essais[] = array('0', '/toto/test_cfg_zeroc');
	$essais[] = array('une chaine', '/toto/test_cfg_chaine');
	$essais[] = array($assoc, '/toto/test_cfg_assoc');
	$essais[] = array(serialize($assoc), '/toto/test_cfg_serie','',0);

	$err = tester_fun('lire_config', $essais);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<b>relecture ecrire_config meta</b><dl>' . join('', $err) . '</dl>');
	}

### re effacer_config meta ###

	$essais = array();
	$essais[] = array(true, '/toto/test_cfg_zero');
	$essais[] = array(true, '/toto/test_cfg_zeroc');
	$essais[] = array(true, '/toto/test_cfg_chaine');
	$essais[] = array(true, '/toto/test_cfg_assoc');
	$essais[] = array(true, '/toto/test_cfg_serie');

	$err = tester_fun('effacer_config', $essais);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<b>effacer_config meta</b><dl>' . join('', $err) . '</dl>');
	}

	
### re lire_config meta ###

	$essais = array();
	$essais[] = array(null, '/toto/test_cfg_zero');
	$essais[] = array(null, '/toto/test_cfg_zeroc');
	$essais[] = array(null, '/toto/test_cfg_chaine');
	$essais[] = array(null, '/toto/test_cfg_assoc');
	$essais[] = array(null, '/toto/test_cfg_serie');

	$err = tester_fun('lire_config', $essais);
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<b>relecture effacer_config meta</b><dl>' . join('', $err) . '</dl>');
	}

## verifier que la table spip_toto a bien ete supprimee par le dernier effacement
	if (isset($GLOBALS['toto']) OR $trouver_table('spip_toto'))
		die('<b>La table spip_toto n\'a pas ete supprimee par le dernier effacement de config !</b>');

	
	echo "OK";


