<?php
/**
 * Test unitaire de la fonction spip_htmlspecialchars
 * du fichier ./inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 2013-11-27 11:13
 */

	$test = 'spip_htmlspecialchars';
	$remonte = "../";
	while (!is_dir($remonte."ecrire"))
		$remonte = "../$remonte";
	require $remonte.'tests/test.inc';
	find_in_path("./inc/filtres.php",'',true);

	// chercher la fonction si elle n'existe pas
	if (!function_exists($f='spip_htmlspecialchars')){
		find_in_path("inc/filtres.php",'',true);
		$f = chercher_filtre($f);
	}
	if (!$f) die ("pas trouve la fonction $test");

	//
	// hop ! on y va
	//
	$err = tester_fun($f, essais_spip_htmlspecialchars());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_spip_htmlspecialchars(){
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
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
  ),
  3 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
  ),
  4 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
  ),
  5 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot;',
  ),
  6 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
  ),
  7 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\'',
    1 => 'Un texte sans entites &<>"\'',
  ),
  8 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
  ),
  9 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
  ),
  10 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
  ),
  11 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents ISO a��� e���� i�� o� u��&lt;/a&gt; [Article 1 avec des accents ISO a��� e���� i�� o� u��-&gt;art1] [spip avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents ISO a��� e���� i�� o� u��</a> [Article 1 avec des accents ISO a��� e���� i�� o� u��->art1] [spip avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net] https://www.spip.net',
  ),
  12 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents ISO a��� e���� i�� o� u��',
  ),
  13 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
  ),
  14 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents ISO a��� e���� i�� o� u��',
  ),
  15 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
  ),
  16 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte sans entites &<>"\' et avec des accents ISO a��� e���� i�� o� u��',
  ),
  17 => 
  array (
    0 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} &lt;code&gt;du code avec des accents ISO a��� e���� i�� o� u��&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} <code>du code avec des accents ISO a��� e���� i�� o� u��</code>',
  ),
  18 => 
  array (
    0 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� &lt;modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� <modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net]>',
  ),
  19 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
  ),
  20 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/a&gt; [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü</a> [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü->art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net] https://www.spip.net',
  ),
  21 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  22 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  23 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  24 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  25 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte sans entites &<>"\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  26 => 
  array (
    0 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} &lt;code&gt;du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} <code>du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü</code>',
  ),
  27 => 
  array (
    0 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü &lt;modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü <modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net]>',
  ),
  28 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
  ),
  29 => 
  array (
    0 => '',
    1 => '',
    2 => ENT_QUOTES,
  ),
  30 => 
  array (
    0 => '0',
    1 => '0',
    2 => ENT_QUOTES,
  ),
  31 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
    2 => ENT_QUOTES,
  ),
  32 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
    2 => ENT_QUOTES,
  ),
  33 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    2 => ENT_QUOTES,
  ),
  34 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot;',
    2 => ENT_QUOTES,
  ),
  35 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    2 => ENT_QUOTES,
  ),
  36 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;&#039;',
    1 => 'Un texte sans entites &<>"\'',
    2 => ENT_QUOTES,
  ),
  37 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
    2 => ENT_QUOTES,
  ),
  38 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
    2 => ENT_QUOTES,
  ),
  39 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    2 => ENT_QUOTES,
  ),
  40 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents ISO a��� e���� i�� o� u��&lt;/a&gt; [Article 1 avec des accents ISO a��� e���� i�� o� u��-&gt;art1] [spip avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents ISO a��� e���� i�� o� u��</a> [Article 1 avec des accents ISO a��� e���� i�� o� u��->art1] [spip avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net] https://www.spip.net',
    2 => ENT_QUOTES,
  ),
  41 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  42 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  43 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  44 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  45 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;&#039; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte sans entites &<>"\' et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  46 => 
  array (
    0 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} &lt;code&gt;du code avec des accents ISO a��� e���� i�� o� u��&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} <code>du code avec des accents ISO a��� e���� i�� o� u��</code>',
    2 => ENT_QUOTES,
  ),
  47 => 
  array (
    0 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� &lt;modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� <modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net]>',
    2 => ENT_QUOTES,
  ),
  48 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_QUOTES,
  ),
  49 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/a&gt; [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü</a> [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü->art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net] https://www.spip.net',
    2 => ENT_QUOTES,
  ),
  50 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  51 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  52 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  53 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  54 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;&#039; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte sans entites &<>"\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  55 => 
  array (
    0 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} &lt;code&gt;du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} <code>du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü</code>',
    2 => ENT_QUOTES,
  ),
  56 => 
  array (
    0 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü &lt;modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü <modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net]>',
    2 => ENT_QUOTES,
  ),
  57 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_QUOTES,
  ),
  58 => 
  array (
    0 => '',
    1 => '',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  59 => 
  array (
    0 => '0',
    1 => '0',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  60 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  61 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  62 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  63 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  64 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  65 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\'',
    1 => 'Un texte sans entites &<>"\'',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  66 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  67 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  68 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  69 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents ISO a��� e���� i�� o� u��&lt;/a&gt; [Article 1 avec des accents ISO a��� e���� i�� o� u��-&gt;art1] [spip avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents ISO a��� e���� i�� o� u��</a> [Article 1 avec des accents ISO a��� e���� i�� o� u��->art1] [spip avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  70 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  71 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  72 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  73 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  74 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte sans entites &<>"\' et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  75 => 
  array (
    0 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} &lt;code&gt;du code avec des accents ISO a��� e���� i�� o� u��&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} <code>du code avec des accents ISO a��� e���� i�� o� u��</code>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  76 => 
  array (
    0 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� &lt;modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� <modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  77 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  78 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/a&gt; [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü</a> [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü->art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  79 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  80 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  81 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  82 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  83 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte sans entites &<>"\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  84 => 
  array (
    0 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} &lt;code&gt;du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} <code>du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü</code>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  85 => 
  array (
    0 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü &lt;modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü <modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  86 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
  ),
  87 => 
  array (
    0 => '',
    1 => '',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  88 => 
  array (
    0 => '0',
    1 => '0',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  89 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  90 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  91 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  92 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  93 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  94 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\'',
    1 => 'Un texte sans entites &<>"\'',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  95 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  96 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  97 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  98 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents ISO a��� e���� i�� o� u��&lt;/a&gt; [Article 1 avec des accents ISO a��� e���� i�� o� u��-&gt;art1] [spip avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents ISO a��� e���� i�� o� u��</a> [Article 1 avec des accents ISO a��� e���� i�� o� u��->art1] [spip avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  99 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  100 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  101 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  102 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  103 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte sans entites &<>"\' et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  104 => 
  array (
    0 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} &lt;code&gt;du code avec des accents ISO a��� e���� i�� o� u��&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} <code>du code avec des accents ISO a��� e���� i�� o� u��</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  105 => 
  array (
    0 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� &lt;modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� <modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  106 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  107 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/a&gt; [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü</a> [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü->art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  108 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  109 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  110 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  111 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  112 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte sans entites &<>"\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  113 => 
  array (
    0 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} &lt;code&gt;du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} <code>du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  114 => 
  array (
    0 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü &lt;modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü <modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  115 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'ISO-8859-1',
  ),
  116 => 
  array (
    0 => '',
    1 => '',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  117 => 
  array (
    0 => '0',
    1 => '0',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  118 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens&lt;/a&gt; [Article 1-&gt;art1] [spip-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens</a> [Article 1->art1] [spip->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  119 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  120 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  121 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  122 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot;',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot;',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  123 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\'',
    1 => 'Un texte sans entites &<>"\'',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  124 => 
  array (
    0 => '{{{Des raccourcis}}} {italique} {{gras}} &lt;code&gt;du code&lt;/code&gt;',
    1 => '{{{Des raccourcis}}} {italique} {{gras}} <code>du code</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  125 => 
  array (
    0 => 'Un modele &lt;modeleinexistant|lien=[-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele <modeleinexistant|lien=[->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  126 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  127 => 
  array (
    0 => '',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents ISO a��� e���� i�� o� u��</a> [Article 1 avec des accents ISO a��� e���� i�� o� u��->art1] [spip avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  128 => 
  array (
    0 => '',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  129 => 
  array (
    0 => '',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  130 => 
  array (
    0 => '',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  131 => 
  array (
    0 => '',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  132 => 
  array (
    0 => '',
    1 => 'Un texte sans entites &<>"\' et avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  133 => 
  array (
    0 => '',
    1 => '{{{Des raccourcis avec des accents ISO a��� e���� i�� o� u��}}} {italique avec des accents ISO a��� e���� i�� o� u��} {{gras avec des accents ISO a��� e���� i�� o� u��}} <code>du code avec des accents ISO a��� e���� i�� o� u��</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  134 => 
  array (
    0 => '',
    1 => 'Un modele avec des accents ISO a��� e���� i�� o� u�� <modeleinexistant|lien=[avec des accents ISO a��� e���� i�� o� u��->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  135 => 
  array (
    0 => '',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents ISO a��� e���� i�� o� u��',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  136 => 
  array (
    0 => 'Un texte avec des &lt;a href=&quot;http://spip.net&quot;&gt;liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/a&gt; [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net] https://www.spip.net',
    1 => 'Un texte avec des <a href="http://spip.net">liens avec des accents UTF-8 aàâä eéèêë iîï oô uùü</a> [Article 1 avec des accents UTF-8 aàâä eéèêë iîï oô uùü->art1] [spip avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net] https://www.spip.net',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  137 => 
  array (
    0 => 'Un texte avec des entit&amp;eacute;s &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&eacute;s &amp;&lt;&gt;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  138 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;eacute;s echap&amp;amp;eacute; &amp;amp;amp;&amp;amp;lt;&amp;amp;gt;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;eacute;s echap&amp;eacute; &amp;amp;&amp;lt;&amp;gt;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  139 => 
  array (
    0 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&#233;s num&#233;riques &#38;&#60;&#62;&quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  140 => 
  array (
    0 => 'Un texte avec des entit&amp;amp;#233;s num&amp;amp;#233;riques echap&amp;amp;#233;es &amp;amp;#38;&amp;amp;#60;&amp;amp;#62;&amp;amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des entit&amp;#233;s num&amp;#233;riques echap&amp;#233;es &amp;#38;&amp;#60;&amp;#62;&amp;quot; et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  141 => 
  array (
    0 => 'Un texte sans entites &amp;&lt;&gt;&quot;\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte sans entites &<>"\' et avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  142 => 
  array (
    0 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} &lt;code&gt;du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü&lt;/code&gt;',
    1 => '{{{Des raccourcis avec des accents UTF-8 aàâä eéèêë iîï oô uùü}}} {italique avec des accents UTF-8 aàâä eéèêë iîï oô uùü} {{gras avec des accents UTF-8 aàâä eéèêë iîï oô uùü}} <code>du code avec des accents UTF-8 aàâä eéèêë iîï oô uùü</code>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  143 => 
  array (
    0 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü &lt;modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü-&gt;https://www.spip.net]&gt;',
    1 => 'Un modele avec des accents UTF-8 aàâä eéèêë iîï oô uùü <modeleinexistant|lien=[avec des accents UTF-8 aàâä eéèêë iîï oô uùü->https://www.spip.net]>',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
  144 => 
  array (
    0 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    1 => 'Un texte avec des retour
a la ligne et meme des

paragraphes avec des accents UTF-8 aàâä eéèêë iîï oô uùü',
    2 => ENT_COMPAT|ENT_HTML401,
    3 => 'UTF-8',
  ),
);
		return $essais;
	}










































?>