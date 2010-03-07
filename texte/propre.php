<?php
/**
 * Test unitaire de la fonction propre
 * du fichier inc/texte.php
 *
 * genere automatiquement par testbuilder
 * le 
 */

	$test = 'propre';
	require '../test.inc';
	find_in_path("inc/texte.php",'',true);

	//
	// hop ! on y va
	//
	$err = tester_fun('propre', essais_propre());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

													function essais_propre(){
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
    0 => '<p>Un texte avec des <a href="http://spip.net">liens</a> <a href=\'spip.php?article1\' class=\'spip_in\'>Article 1</a> <a href=\'http://www.spip.net\' class=\'spip_out\' rel=\'external\'>spip</a> <a href=\'http://www.spip.net\' class=\'spip_out\' rel=\'nofollow external\'>http://www.spip.net</a></p>',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->http://www.spip.net] http://www.spip.net',
  ),
  3 => 
  array (
    0 => '<p>Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;</p>',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
  ),
  4 => 
  array (
    0 => '<p>Un texte sans entites &amp;<>"&#8217;</p>',
    1 => 'Un texte sans entites &<>"\'',
  ),
  5 => 
  array (
    0 => '<h3 class=\'h3 spip\'>Des raccourcis</h3>
<p> <i>italique</i> <strong>gras</strong> <code class=\'spip_code\' dir=\'ltr\'>du code</code></p>',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
  ),
  6 => 
  array (
    0 => '<p>Un modele</p>',
    1 => 'Un modele <modeleinexistant|lien=[->http://www.spip.net]>',
  ),
  7 => 
  array (
    0 => '<p><img src="squelettes-dist/puce.gif" width="8" height="11" class="puce" alt="-" />&nbsp;propre</p>',
    1 => '- propre',
  ),
);
		return $essais;
	}













?>