<?php
/**
 * Test unitaire de la fonction filtre_balise_img_dist
 * du fichier ./inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 2021-03-04 11:00
 */

	$test = 'filtre_balise_img_dist';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("./inc/filtres.php",'',true);


	function filtre_balise_img_dist_sans_timestamp() {
		static $f = null;
		if (is_null($f)) {
			// chercher la fonction si elle n'existe pas
			if (!function_exists($f='filtre_balise_img_dist')){
				find_in_path("inc/filtres.php",'',true);
				$f = chercher_filtre($f);
			}
		}
		$args = func_get_args();
		$res = $f(...$args);

		$res = preg_replace(",\?\d+,", '', $res);
		return $res;
	}

	//
	// hop ! on y va
	//
	$err = tester_fun('filtre_balise_img_dist_sans_timestamp', essais_filtre_balise_img_dist());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_filtre_balise_img_dist(){
		$essais = array (
  0 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'\' width=\'60\' height=\'40\' />',
    1 => 'spip.png',
  ),
  1 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' width=\'60\' height=\'40\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
  ),
  2 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'60\' height=\'40\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'spip_logo',
  ),
  3 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'30\' height=\'20\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => 'x2',
  ),
  4 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'20\' height=\'20\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '20',
  ),
  5 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'90\' height=\'60\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '90x*',
  ),
  6 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'50\' height=\'30\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '50x30',
  ),
  7 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' width=\'30\' height=\'20\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => 'x2',
  ),
  8 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' width=\'20\' height=\'20\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => '20',
  ),
  9 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' width=\'90\' height=\'60\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => '90x*',
  ),
  10 => 
  array (
    0 => '<img src=\'spip.png\' alt=\'This is SPIP\' width=\'50\' height=\'30\' />',
    1 => 'spip.png',
    2 => 'This is SPIP',
    3 => '50x30',
  ),
  11 => 
  array (
    0 => '<img src=\'spip.png\' width=\'30\' height=\'20\' />',
    1 => 'spip.png',
    2 => 'x2',
  ),
  12 => 
  array (
    0 => '<img src=\'spip.png\' width=\'20\' height=\'20\' />',
    1 => 'spip.png',
    2 => '20',
  ),
  13 => 
  array (
    0 => '<img src=\'spip.png\' width=\'90\' height=\'60\' />',
    1 => 'spip.png',
    2 => '90x*',
  ),
  14 => 
  array (
    0 => '<img src=\'spip.png\' width=\'50\' height=\'30\' />',
    1 => 'spip.png',
    2 => '50x30',
  ),

	20 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'\' width=\'60\' height=\'40\' />',
    1 => 'spip.svg',
  ),
  21 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' width=\'60\' height=\'40\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
  ),
  22 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'60\' height=\'40\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'spip_logo',
  ),
  23 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'30\' height=\'20\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => 'x2',
  ),
  24 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'20\' height=\'20\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '20',
  ),
  25 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'90\' height=\'60\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '90x*',
  ),
  26 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' class=\'spip_logo\' width=\'50\' height=\'30\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'spip_logo',
    4 => '50x30',
  ),
  27 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' width=\'30\' height=\'20\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => 'x2',
  ),
  28 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' width=\'20\' height=\'20\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => '20',
  ),
  29 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' width=\'90\' height=\'60\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => '90x*',
  ),
  30 =>
  array (
    0 => '<img src=\'spip.svg\' alt=\'This is SPIP\' width=\'50\' height=\'30\' />',
    1 => 'spip.svg',
    2 => 'This is SPIP',
    3 => '50x30',
  ),
  31 =>
  array (
    0 => '<img src=\'spip.svg\' width=\'30\' height=\'20\' />',
    1 => 'spip.svg',
    2 => 'x2',
  ),
  32 =>
  array (
    0 => '<img src=\'spip.svg\' width=\'20\' height=\'20\' />',
    1 => 'spip.svg',
    2 => '20',
  ),
  33 =>
  array (
    0 => '<img src=\'spip.svg\' width=\'90\' height=\'60\' />',
    1 => 'spip.svg',
    2 => '90x*',
  ),
  34 =>
  array (
    0 => '<img src=\'spip.svg\' width=\'50\' height=\'30\' />',
    1 => 'spip.svg',
    2 => '50x30',
  ),
);
		return $essais;
	}

?>