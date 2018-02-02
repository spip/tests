<?php
/**
 * Test unitaire de la fonction balise_img
 * du fichier inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 
 */

	$test = 'balise_img';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("inc/filtres.php",'',true);

	//
	// hop ! on y va
	//
  if (!function_exists($f='balise_img')){
	  find_in_path("inc/filtres.php",'',true);
    $f = chercher_filtre($f);
  }
	$err = tester_fun($f, essais_balise_img());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_balise_img(){
		$essais = array (
  0 => 
  array (
    0 => '<img src=\'https://www.spip.net/IMG/siteon0.png\' alt=\'\' width=\'300\' height=\'223\' />',
    1 => 'https://www.spip.net/IMG/siteon0.png',
  ),
  1 => 
  array (
    0 => '<img src=\'prive/images/logo_spip.jpg\' alt=\'\' width=\'105\' height=\'92\' />',
    1 => 'prive/images/logo_spip.jpg',
  ),
  2 => 
  array (
    0 => '<img src=\'prive/images/logo-spip.gif\' alt=\'\' width=\'267\' height=\'170\' />',
    1 => 'prive/images/logo-spip.gif',
  ),
  3 => 
  array (
    0 => '',
    1 => 'prive/aide_body.css',
  ),
  4 => 
  array (
    0 => '<img src=\'prive/images/searching.gif\' alt=\'\' width=\'16\' height=\'16\' />',
    1 => 'prive/images/searching.gif',
  ),
  6 => 
  array (
    0 => '<img src=\'prive/images/searching.gif\' alt=\'attendez\' class=\'loading\' width=\'16\' height=\'16\' />',
    1 => 'prive/images/searching.gif',
    2 => 'attendez',
    3 => 'loading',
  ),
);
		return $essais;
	}

