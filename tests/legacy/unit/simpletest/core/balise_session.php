<?php
require_once('lanceur_spip.php');
include_spip(_DIR_TESTS . 'vendor/simpletest/simpletest/browser');
include_spip(_DIR_TESTS . 'vendor/simpletest/simpletest/web_tester');
include_spip('inc/texte');

class Test_balise_session extends SpipTest{

	function test_visiteur_session(){
		// loggue, c'est le nom id_auteur
		$code = "#CACHE{0}".$this->php("echo (!empty(\$GLOBALS['visiteur_session']['id_auteur']) ? \$GLOBALS['visiteur_session']['id_auteur'] : 'non') ;");
		$code2 = "[(#SESSION{id_auteur}|?{#SESSION{id_auteur},non})]";
		$val = $this->recuperer_code($code);
		$this->assertEqualCode($val, $code2);

		// non loggue, les globales doivent etre identiques
		$browser = new SimpleBrowser();
		$browser->get($this->urlTestCode($code));
		$this->assertEqual($browser->getResponseCode(), 200);
		$id1 = $browser->getContent();

		$browser = new SimpleBrowser();
		$browser->get($this->urlTestCode($code2));
		$this->assertEqual($browser->getResponseCode(), 200);
		$id2 = $browser->getContent();

		$this->assertEqual($id1,$id2);
	}

}

class Test_balise_session_set extends SpipTest{
	function testSessionSet(){
		$set = "#HTTP_HEADER{Content-type: text/html}#CACHE{0}#SESSION_SET{bonbon,caramel}--";
		$get = "#HTTP_HEADER{Content-type: text/html}#CACHE{0}[(#SESSION{bonbon})]--";
		$diversion = "Page de publicite...";

		$this->recuperer_code($set);
		$this->assertEqualCode('caramel--', $this->recuperer_code($get));

		// deux fois pour verifier qu'un nouveau visiteur ne
		// recupere pas les infos de session d'un autre
		for ($i=0; $i<2; $i++) {
			$browser = new SimpleBrowser();

			// nouveau visiteur : pas de session
			$browser->get($this->urlTestCode($get));
			$this->assertEqual('--', $browser->getContent());
			// on cree la session bonbon
			$browser->get($this->urlTestCode($set));

			// elle s'affiche
			$browser->get($this->urlTestCode($get));
			$this->assertEqual('caramel--', $browser->getContent());

			// on va sur une autre page
			$browser->get($this->urlTestCode($diversion));

			// on verifie que la session est encore la
			$browser->get($this->urlTestCode($get));
			$this->assertEqual('caramel--', $browser->getContent());
		}
	}
}

