<?php
/**
 * Test unitaire de la fonction texte_backend
 * du fichier inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 
 */

	$test = 'texte_backend';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("inc/filtres.php",'',true);

	//
	// hop ! on y va
	//
	$err = tester_fun('texte_backend', essais_texte_backend());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_texte_backend(){
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
    0 => 'Un texte avec des &lt;a href=&#034;http://spip.net&#034;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
  ),
  3 => 
  array (
    0 => 'Un texte avec des entit&#233;s &amp;&lt;&gt;&#034;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
  ),
  4 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&#034;\'',
    1 => 'Un texte sans entites &<>"\'',
  ),
  5 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
  ),
  6 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
  ),
);
		return $essais;
	}



?>