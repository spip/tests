<?php
/**
 * Test unitaire de la fonction spip_xml_parse
 * du fichier inc/xml.php
 *
 *
 */

namespace Spip\Core\Tests;

find_in_path("inc/xml.php", '', true);

/**
 * La fonction appelee pour chaque jeu de test
 * Nommage conventionnel : test_[[dossier1_][[dossier2_]...]]fichier
 * @param ...$args
 * @return mixed
 */
function test_xml_spip_xml_parse(...$args){
	// on appelle traiter_raccourcis qui ensuite appelle traiter_tableau
	return serialize(spip_xml_parse(...$args));
}


/**
 * La fonction qui fournit les jeux de test
 * Nommage conventionnel : essais_[[dossier1_][[dossier2_]...]]fichier
 * @return array
 *  [ output, input1, input2, input3...]
 */
function essais_xml_spip_xml_parse(){
	$essais = [];

	$xml1 = "<" . <<<xml1
?xml version="1.0" encoding="utf-8"?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">
<url><loc>http://localhost/_core/spip/spip.php?breve25</loc>
<lastmod>2003-12-31</lastmod>
<priority>0.8</priority>
</url>
<url>
<loc>http://localhost/_core/spip/spip.php?breve32</loc>
<lastmod>2004-02-10</lastmod>
<priority>0.8</priority>
</url>
<url>
<loc>http://localhost/_core/spip/spip.php?breve64</loc>
<lastmod>2005-01-31</lastmod>
<priority>0.8</priority>
</url>
</urlset>
xml1;
	$tree1 = <<<tree1
a:1:{s:57:"urlset xmlns="http://www.google.com/schemas/sitemap/0.84"";a:1:{i:0;a:1:{s:3:"url";a:3:{i:0;a:3:{s:3:"loc";a:1:{i:0;s:44:"http://localhost/_core/spip/spip.php?breve25";}s:7:"lastmod";a:1:{i:0;s:10:"2003-12-31";}s:8:"priority";a:1:{i:0;s:3:"0.8";}}i:1;a:3:{s:3:"loc";a:1:{i:0;s:44:"http://localhost/_core/spip/spip.php?breve32";}s:7:"lastmod";a:1:{i:0;s:10:"2004-02-10";}s:8:"priority";a:1:{i:0;s:3:"0.8";}}i:2;a:3:{s:3:"loc";a:1:{i:0;s:44:"http://localhost/_core/spip/spip.php?breve64";}s:7:"lastmod";a:1:{i:0;s:10:"2005-01-31";}s:8:"priority";a:1:{i:0;s:3:"0.8";}}}}}}
tree1;

	$xml2 = "<" . <<<xml2
?xml version="1.0" encoding="UTF-8"?>
<opml version="1.0">
  <head>
    <title>arbo_riec</title>
    <expansionState>0,9,14,24,28,30,31,35,41,43,44,46,48,55,58,61,66,71,74,77,78,82,87,89,90,92,96,98,102,110,112</expansionState>
  </head>
  <body>
    <outline text="Citoyennet??">
      <outline text="Page d'accueil" Contenu="Articles et br??ves d'actualit?? + Vos questions en direct"/>
      <outline text="Le maire et les adjoints" Contenu="Nom, fonction, contact, horaires de permanence et photo de chaque ??lu" Fonctionnalit??="Trombinoscope"/>
      <outline text="Les conseillers municipaux" Contenu="idem" Fonctionnalit??="Trombinoscope"/>
      <outline text="Les commissions" Contenu="Pr??sentation g??n??rale des commissions">
        <outline text="Une fiche par commission" Contenu="Domaine de comp??tence et membres"/>
      </outline>
      <outline text="Les conseils municipaux" Contenu="Pr??sentation g??n??rale, t??l??chargement du dernier compte-rendu et agenda des prochains conseils" Fonctionnalit??="Agenda">
        <outline text="Comptes-rendus" Contenu="Les comptes-rendus de conseils ?? t??l??charger" Fonctionnalit??="Publications et archivage auto">
          <outline text="Un article par compte-rendu" Contenu="Texte ou doc ?? t??l??charger"/>
        </outline>
      </outline>
      <outline text="Les r??unions de quartier" Contenu="Pr??sentation et agenda des r??unions" Fonctionnalit??="Agenda"/>
      <outline text="L???Atelier municipal sur l???environnement" Contenu="Texte + photos"/>
      <outline text="L???intercommunalit??" Contenu="Texte de pr??sentation + photos">
        <outline text="Cocopaq" Contenu="Texte + photos"/>
        <outline text="Syndicat de Voirie de Rosporden" Contenu="Texte + photos"/>
        <outline text="SIVU de Riec sur B??lon" Contenu="Texte + photos"/>
        <outline text="Sicom" Contenu="Texte + photos"/>
        <outline text="Syndicat d???eau et d?????lectricification de Riec sur Belon" Contenu="Texte + photos"/>
      </outline>
    </outline>
    <outline text="Economie">
      <outline text="Page d'accueil" Contenu="Actualit?? + lien vers les march??s publics"/>
      <outline text="March??s publics" Contenu="Texte de pr??sentation + contact">
        <outline text="Avis d'attribution" Contenu="Texte accueil et affichage des derniers avis" Fonctionnalit??="Publications + archivage">
          <outline text="Un article par avis" Contenu="Texte ou doc ?? t??l??charger"/>
        </outline>
        <outline text="Avis de publicit??" Contenu="Texte + affichage des avis en cours" Fonctionnalit??="March??s public">
          <outline text="Un article par avis" Contenu="Texte + docs ?? t??l??charger" Fonctionnalit??="Un formulaire invite le visiteur ?? fournir son adresse email. Un email lui est alors automatiquement exp??di?? qui contient un lien. En cliquant sur ce lien, le visiteur revient sur la page mais cette fois il a la possibilit?? de t??l??charger les pi??ces jointes ?? l'avis. Les mails sont ainsi collect??s et ceux qui ont t??l??charg?? les pi??ces peuvent ainsi ??tre contact??s en cas de changement."/>
        </outline>
      </outline>
      <outline text="Les atouts de la ville">
        <outline text="Production ostr??icole" Contenu="Texte + photos"/>
        <outline text="Situation g??ographique" Contenu="M??me contenu que dans La Ville ?" Fonctionnalit??="mod??le de duplication d'article"/>
      </outline>
      <outline text="S???implanter" Contenu="Texte + photos"/>
      <outline text="Le GAER" Contenu="Texte + photos"/>
      <outline text="Les commerces" Contenu="Pr??sentation + formulaire d'inscription ?? l'annuaire" Fonctionnalit??="Fonctionnalit?? annuaire"/>
      <outline text="Les entreprises" Contenu="Pr??sentation + formulaire d'inscription ?? l'annuaire" Fonctionnalit??="Fonctionnalit?? annuaire"/>
      <outline text="Les ZA et ZI" Contenu="Pr??sentation + carte des ZA-ZI" Fonctionnalit??="Carte interactive">
        <outline text="Une page par zone" Contenu="Fiche de pr??sentation + photo + plan acc??s"/>
      </outline>
      <outline text="Le march??" Contenu="Texte + photos"/>
    </outline>
    <outline text="Tourisme version anglaise"/>
  </body>
</opml>
xml2;
	$tree2 = <<<tree2
a:1:{s:18:"opml version="1.0"";a:1:{i:0;a:2:{s:4:"head";a:1:{i:0;a:2:{s:5:"title";a:1:{i:0;s:9:"arbo_riec";}s:14:"expansionState";a:1:{i:0;s:93:"0,9,14,24,28,30,31,35,41,43,44,46,48,55,58,61,66,71,74,77,78,82,87,89,90,92,96,98,102,110,112";}}}s:4:"body";a:1:{i:0;a:3:{s:27:"outline text="Citoyennet??"";a:1:{i:0;a:8:{s:98:"outline text="Page d'accueil" Contenu="Articles et br??ves d'actualit?? + Vos questions en direct"";a:1:{i:0;s:0:"";}s:152:"outline text="Le maire et les adjoints" Contenu="Nom, fonction, contact, horaires de permanence et photo de chaque ??lu" Fonctionnalit??="Trombinoscope"";a:1:{i:0;s:0:"";}s:88:"outline text="Les conseillers municipaux" Contenu="idem" Fonctionnalit??="Trombinoscope"";a:1:{i:0;s:0:"";}s:81:"outline text="Les commissions" Contenu="Pr??sentation g??n??rale des commissions"";a:1:{i:0;a:1:{s:83:"outline text="Une fiche par commission" Contenu="Domaine de comp??tence et membres"";a:1:{i:0;s:0:"";}}}s:173:"outline text="Les conseils municipaux" Contenu="Pr??sentation g??n??rale, t??l??chargement du dernier compte-rendu et agenda des prochains conseils" Fonctionnalit??="Agenda"";a:1:{i:0;a:1:{s:136:"outline text="Comptes-rendus" Contenu="Les comptes-rendus de conseils ?? t??l??charger" Fonctionnalit??="Publications et archivage auto"";a:1:{i:0;a:1:{s:82:"outline text="Un article par compte-rendu" Contenu="Texte ou doc ?? t??l??charger"";a:1:{i:0;s:0:"";}}}}}s:113:"outline text="Les r??unions de quartier" Contenu="Pr??sentation et agenda des r??unions" Fonctionnalit??="Agenda"";a:1:{i:0;s:0:"";}s:83:"outline text="L???Atelier municipal sur l???environnement" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:78:"outline text="L???intercommunalit??" Contenu="Texte de pr??sentation + photos"";a:1:{i:0;a:5:{s:47:"outline text="Cocopaq" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:71:"outline text="Syndicat de Voirie de Rosporden" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:63:"outline text="SIVU de Riec sur B??lon" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:45:"outline text="Sicom" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:100:"outline text="Syndicat d???eau et d?????lectricification de Riec sur Belon" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}}}}}s:23:"outline text="Economie"";a:1:{i:0;a:9:{s:83:"outline text="Page d'accueil" Contenu="Actualit?? + lien vers les march??s publics"";a:1:{i:0;s:0:"";}s:74:"outline text="March??s publics" Contenu="Texte de pr??sentation + contact"";a:1:{i:0;a:2:{s:131:"outline text="Avis d'attribution" Contenu="Texte accueil et affichage des derniers avis" Fonctionnalit??="Publications + archivage"";a:1:{i:0;a:1:{s:74:"outline text="Un article par avis" Contenu="Texte ou doc ?? t??l??charger"";a:1:{i:0;s:0:"";}}}s:113:"outline text="Avis de publicit??" Contenu="Texte + affichage des avis en cours" Fonctionnalit??="March??s public"";a:1:{i:0;a:1:{s:495:"outline text="Un article par avis" Contenu="Texte + docs ?? t??l??charger" Fonctionnalit??="Un formulaire invite le visiteur ?? fournir son adresse email. Un email lui est alors automatiquement exp??di?? qui contient un lien. En cliquant sur ce lien, le visiteur revient sur la page mais cette fois il a la possibilit?? de t??l??charger les pi??ces jointes ?? l'avis. Les mails sont ainsi collect??s et ceux qui ont t??l??charg?? les pi??ces peuvent ainsi ??tre contact??s en cas de changement."";a:1:{i:0;s:0:"";}}}}}s:37:"outline text="Les atouts de la ville"";a:1:{i:0;a:2:{s:62:"outline text="Production ostr??icole" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:133:"outline text="Situation g??ographique" Contenu="M??me contenu que dans La Ville ?" Fonctionnalit??="mod??le de duplication d'article"";a:1:{i:0;s:0:"";}}}s:53:"outline text="S???implanter" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:47:"outline text="Le GAER" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}s:136:"outline text="Les commerces" Contenu="Pr??sentation + formulaire d'inscription ?? l'annuaire" Fonctionnalit??="Fonctionnalit?? annuaire"";a:1:{i:0;s:0:"";}s:138:"outline text="Les entreprises" Contenu="Pr??sentation + formulaire d'inscription ?? l'annuaire" Fonctionnalit??="Fonctionnalit?? annuaire"";a:1:{i:0;s:0:"";}s:105:"outline text="Les ZA et ZI" Contenu="Pr??sentation + carte des ZA-ZI" Fonctionnalit??="Carte interactive"";a:1:{i:0;a:1:{s:87:"outline text="Une page par zone" Contenu="Fiche de pr??sentation + photo + plan acc??s"";a:1:{i:0;s:0:"";}}}s:50:"outline text="Le march??" Contenu="Texte + photos"";a:1:{i:0;s:0:"";}}}s:40:"outline text="Tourisme version anglaise"";a:1:{i:0;s:0:"";}}}}}}
tree2;

	$essais["sitemap"] = array($tree1, $xml1);
	$essais["opml"] = array($tree2, $xml2);

	return $essais;
}

