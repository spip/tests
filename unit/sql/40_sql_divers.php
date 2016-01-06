<?php

	// nom du test
	$test = 'sql/sql_divers';

	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	include 'inc-sql_datas.inc';

	include_spip('base/abstract_sql');


	/*
	 * Selections mathematiques
	 */
	function test_func_mathematiques() {
		$err = $essais = array();

		//
		foreach (array(
			'COUNT'=>3,
			'SUM'=>9000,
			'AVG'=>3000,
			) as $func=>$attendu){
				$nb = sql_getfetsel("$func(un_int) AS nb", array("spip_test_tintin"));
				if ($nb != $attendu) {
					$err[] = "Selection $func en echec : attendu : $attendu, recu : $nb";
				}
		}

		//
		foreach (array(
			'EXP(0)'=>exp(0),
			'ROUND(3.56)'=>round(3.56),
			'ROUND(3.5684,2)'=>round(3.5684,2),
			'SQRT(9)'=>3,
			//'1/2'=>(0), // Le standard SQL : entier divise par entier = division entiere (pas trouve la reference)
			'1.0/2'=>(1/2), // Le standart SQL : reel divise par entier = reel
			//'4/3'=>1,
			'ROUND(4.0/3,2)'=>round(4/3,2),
			'1.5/2'=>(1.5/2),
			'2.0/2'=>(2.0/2),
			'2/2'=>(2/2),
			'md5(8)'=>md5(8),
			'md5('.sql_quote('a').')'=>md5('a'),
			) as $func=>$attendu){
				$nb = sql_getfetsel("$func AS nb", array("spip_test_tintin"),array('id_tintin='.sql_quote(1)));
				if ($nb != $attendu) {
					$err[] = "Selection $func en echec : attendu : $attendu, recu : $nb";
				}
		}

		// affichage
		if ($err) {
			return '<b>Selections multi tables</b><dl><dd>' . join('</dd><dd>', $err) . '</dd></dl>';
		}
	}

	/*
	 * Selections mathematiques
	 */
	function test_func_strings() {
		$err = $essais = array();

		//
		foreach (array(
			'CONCAT('.sql_quote("cou").','.sql_quote("cou").')'=>"coucou",
			'CONCAT('.sql_quote("cou,").','.sql_quote("cou").')'=>"cou,cou",
			) as $func=>$attendu){
				$nb = sql_getfetsel("$func AS nb", array("spip_test_tintin"),array('id_tintin='.sql_quote(1)));
				if ($nb != $attendu) {
					$err[] = "Selection $func en echec : attendu : $attendu, recu : $nb";
				}
		}

		// affichage
		if ($err) {
			return '<b>Selections strings</b><dl><dd>' . join('</dd><dd>', $err) . '</dd></dl>';
		}
	}

	/*
	 * retours des fonctions d'erreurs lors d'une requete
	 */
	function test_func_error() {
		$err = array();

		// requete sans erreur
		sql_select("*","spip_test_tintin");
		if (sql_error() != '')
			$err[] = "sql_error() non vide lors d'une requete sans erreur";
		if (sql_errno() !== 0)
			$err[] = "sql_errno() ne retourne pas 0 lors d'une requete sans erreur";

		// requete en erreur
		sql_select("*","spip_test_toto");
		if (sql_error() == '')
			$err[] = "sql_error() vide lors d'une requete en erreur";
		if (sql_errno() === 0)
			$err[] = "sql_errno() retourne 0 lors d'une requete en erreur";

		// affichage
		if ($err)
			return '<b>Retours fonctions d\'erreur</b><dl><dd>' . join('</dd><dd>', $err) . '</dd></dl>';
	}


	$err = "";
	// supprimer les eventuelles tables
	$err .= test_drop_table();
	// creer les eventuelles tables
	$err .= test_create_table();
	// inserer les donnees dans la table
	$err .= test_insert_data();
	// test de fonctions mathematiques
	$err .= test_func_mathematiques();
	// test de fonctions string
	$err .= test_func_strings();
	// test des fonctions d'erreur
	$err .= test_func_error();

	// supprimer les tables

	$err .= test_drop_table();

	// affichage
	if ($err) {
		die ($err);
	}
	echo "OK";

?>
