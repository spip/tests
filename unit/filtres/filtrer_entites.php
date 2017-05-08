<?php
/**
 * Test unitaire de la fonction filtrer_entites
 * du fichier inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 
 */

	$test = 'filtrer_entites';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("inc/filtres.php",'',true);

	//
	// hop ! on y va
	//
	$err = tester_fun('filtrer_entites', essais_filtrer_entites());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_filtrer_entites(){
		$essais = array (
  0 => 
  array (
    0 => '',
    1 => '',
  ),
  1 => 
  array (
    0 => '0',
    1 => '0',
  ),
  2 => 
  array (
    0 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
  ),
  3 => 
  array (
    0 => 'Un texte avec des entités &<>"',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
  ),
	4 =>
  array (
    0 => 'Un texte avec des entités numériques &<>"\'',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &amp;&lt;&gt;&#034;&#039;',
  ),
  5 =>
  array (
    0 => 'Un texte sans entites &<>"\'',
    1 => 'Un texte sans entites &<>"\'',
  ),
  6 =>
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
  ),
  7 =>
  array (
    0 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
  ),
);
		return $essais;
	}



?>