<?php
/**
 * Test unitaire de la fonction date_relative
 * du fichier inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 2010-03-14 22:18
 */

	$test = 'date_relative';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("inc/filtres.php",'',true);

	//
	// hop ! on y va
	//
	$err = tester_fun('date_relative', essais_date_relative());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_date_relative(){
		$essais = array (
  0 => 
  array (
    0 => 'dans 1 heure',
    1 => '2010-03-14 23:18:57',
    2 => 0,
    3 => '2010-03-14 22:18:57',
  ),
  1 => 
  array (
    0 => 'dans 2 heures',
    1 => '2010-03-15 00:19:47',
    2 => 0,
    3 => '2010-03-14 22:19:47',
  ),
  2 => 
  array (
    0 => 'dans 3 heures',
    1 => '2010-03-15 01:20:03',
    2 => 0,
    3 => '2010-03-14 22:20:03',
  ),
  3 => 
  array (
    0 => 'dans 4 heures',
    1 => '2010-03-15 02:20:18',
    2 => 0,
    3 => '2010-03-14 22:20:18',
  ),
  4 => 
  array (
    0 => 'dans 5 heures',
    1 => '2010-03-15 03:20:32',
    2 => 0,
    3 => '2010-03-14 22:20:32',
  ),
  5 => 
  array (
    0 => 'dans 12 heures',
    1 => '2010-03-15 10:21:08',
    2 => 0,
    3 => '2010-03-14 22:21:08',
  ),
  6 => 
  array (
    0 => 'dans 23 heures',
    1 => '2010-03-15 21:21:25',
    2 => 0,
    3 => '2010-03-14 22:21:25',
  ),
  7 => 
  array (
    0 => 'dans 24 heures',
    1 => '2010-03-15 22:21:35',
    2 => 0,
    3 => '2010-03-14 22:21:35',
  ),
  8 => 
  array (
    0 => 'demain',
    1 => '2010-03-15 23:21:56',
    2 => 0,
    3 => '2010-03-14 22:21:56',
  ),
  9 => 
  array (
    0 => 'dans 2 jours',
    1 => '2010-03-16 22:22:47',
    2 => 0,
    3 => '2010-03-14 22:22:47',
  ),
  10 => 
  array (
    0 => 'dans 3 jours',
    1 => '2010-03-17 22:23:30',
    2 => 0,
    3 => '2010-03-14 22:23:30',
  ),
  11 => 
  array (
    0 => 'dans 6 jours',
    1 => '2010-03-20 22:23:51',
    2 => 0,
    3 => '2010-03-14 22:23:51',
  ),
  12 => 
  array (
    0 => 'dans 7 jours',
    1 => '2010-03-21 22:24:17',
    2 => 0,
    3 => '2010-03-14 22:24:17',
  ),
  13 => 
  array (
    0 => 'dans 1 semaine',
    1 => '2010-03-22 22:24:31',
    2 => 0,
    3 => '2010-03-14 22:24:31',
  ),
  14 => 
  array (
    0 => 'dans 2 semaines',
    1 => '2010-03-28 23:25:03',
    2 => 0,
    3 => '2010-03-14 22:25:03',
  ),
  15 => 
  array (
    0 => 'dans 3 semaines',
    1 => '2010-04-04 23:25:14',
    2 => 0,
    3 => '2010-03-14 22:25:14',
  ),
  16 => 
  array (
    0 => 'dans 4 semaines',
    1 => '2010-04-11 23:25:29',
    2 => 0,
    3 => '2010-03-14 22:25:29',
  ),
  17 => 
  array (
    0 => 'dans 4 semaines',
    1 => '2010-04-13 23:26:31',
    2 => 0,
    3 => '2010-03-14 22:26:31',
  ),
  18 => 
  array (
    0 => 'dans 1 mois',
    1 => '2010-04-14 23:26:49',
    2 => 0,
    3 => '2010-03-14 22:26:49',
  ),
  19 => 
  array (
    0 => 'dans 1 minute',
    1 => '2010-03-14 22:30:48',
    2 => 0,
    3 => '2010-03-14 22:29:48',
  ),
  20 => 
  array (
    0 => 'dans 30 minutes',
    1 => '2010-03-14 23:00:01',
    2 => 0,
    3 => '2010-03-14 22:30:01',
  ),
  21 => 
  array (
    0 => 'dans 59 minutes',
    1 => '2010-03-14 23:29:10',
    2 => 0,
    3 => '2010-03-14 22:30:10',
  ),
  22 => 
  array (
    0 => 'dans 1 heure',
    1 => '2010-03-14 23:30:51',
    2 => 0,
    3 => '2010-03-14 22:30:51',
  ),
  23 => 
  array (
    0 => 'dans 1 seconde',
    1 => '2010-03-14 22:31:10',
    2 => 0,
    3 => '2010-03-14 22:31:09',
  ),
  24 => 
  array (
    0 => 'dans 1 minute',
    1 => '2010-03-14 22:32:37',
    2 => 0,
    3 => '2010-03-14 22:31:37',
  ),
  25 => 
  array (
    0 => 'il y a 1 seconde',
    1 => '2010-03-14 22:31:52',
    2 => 0,
    3 => '2010-03-14 22:31:53',
  ),
  26 => 
  array (
    0 => 'il y a 59 secondes',
    1 => '2010-03-14 22:31:03',
    2 => 0,
    3 => '2010-03-14 22:32:02',
  ),
  27 => 
  array (
    0 => 'il y a 1 minute',
    1 => '2010-03-14 22:31:12',
    2 => 0,
    3 => '2010-03-14 22:32:12',
  ),
  28 => 
  array (
    0 => 'il y a 59 minutes',
    1 => '2010-03-14 21:33:30',
    2 => 0,
    3 => '2010-03-14 22:32:30',
  ),
  29 => 
  array (
    0 => 'il y a 1 heure',
    1 => '2010-03-14 21:33:00',
    2 => 0,
    3 => '2010-03-14 22:33:00',
  ),
  30 => 
  array (
    0 => 'il y a 2 heures',
    1 => '2010-03-14 20:33:32',
    2 => 0,
    3 => '2010-03-14 22:33:32',
  ),
  31 => 
  array (
    0 => 'il y a 23 heures',
    1 => '2010-03-13 23:33:46',
    2 => 0,
    3 => '2010-03-14 22:33:46',
  ),
  32 => 
  array (
    0 => 'il y a 24 heures',
    1 => '2010-03-13 22:33:57',
    2 => 0,
    3 => '2010-03-14 22:33:57',
  ),
  33 => 
  array (
    0 => 'hier',
    1 => '2010-03-13 21:34:24',
    2 => 0,
    3 => '2010-03-14 22:34:24',
  ),
  34 => 
  array (
    0 => 'hier',
    1 => '2010-03-12 23:35:16',
    2 => 0,
    3 => '2010-03-14 22:35:16',
  ),
  35 => 
  array (
    0 => 'il y a 2 jours',
    1 => '2010-03-12 22:35:28',
    2 => 0,
    3 => '2010-03-14 22:35:28',
  ),
  36 => 
  array (
    0 => 'il y a 6 jours',
    1 => '2010-03-08 22:35:57',
    2 => 0,
    3 => '2010-03-14 22:35:57',
  ),
  37 => 
  array (
    0 => 'il y a 7 jours',
    1 => '2010-03-07 22:38:00',
    2 => 0,
    3 => '2010-03-14 22:38:00',
  ),
  38 => 
  array (
    0 => 'il y a 1 semaine',
    1 => '2010-03-06 22:38:23',
    2 => 0,
    3 => '2010-03-14 22:38:23',
  ),
  39 => 
  array (
    0 => 'il y a 2 semaines',
    1 => '2010-02-28 22:39:00',
    2 => 0,
    3 => '2010-03-14 22:39:00',
  ),
  40 => 
  array (
    0 => 'il y a 3 semaines',
    1 => '2010-02-21 22:39:14',
    2 => 0,
    3 => '2010-03-14 22:39:14',
  ),
  41 => 
  array (
    0 => 'il y a 4 semaines',
    1 => '2010-02-14 22:39:26',
    2 => 0,
    3 => '2010-03-14 22:39:26',
  ),
  42 => 
  array (
    0 => 'il y a 4 semaines',
    1 => '2010-02-13 22:39:39',
    2 => 0,
    3 => '2010-03-14 22:39:39',
  ),
  43 => 
  array (
    0 => 'il y a 4 semaines',
    1 => '2010-02-12 22:39:53',
    2 => 0,
    3 => '2010-03-14 22:39:53',
  ),
  44 => 
  array (
    0 => 'il y a 1 mois',
    1 => '2010-02-11 22:40:03',
    2 => 0,
    3 => '2010-03-14 22:40:03',
  ),
  45 => 
  array (
    0 => 'il y a 2 mois',
    1 => '2010-01-13 22:41:13',
    2 => 0,
    3 => '2010-03-14 22:41:13',
  ),
);
		return $essais;
	}















































?>