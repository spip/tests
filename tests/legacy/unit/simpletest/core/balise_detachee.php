<?php
require_once('lanceur_spip.php');

class Test_balise_detachee extends SpipTest{

	function testBaliseDetachee(){
		$val = $this->recuperer_code('<BOUCLE_meta(spip_meta){nom=nom_site}>#VALEUR</BOUCLE_meta>');
		if (!$val) {
			throw new SpipTestException('Il faut donner un nom de site non vide !');
		} else {
			$this->assertEqualCode($val, 
				'<BOUCLE_meta(spip_meta){nom=nom_site}>
					<BOUCLE_meta2(spip_meta){nom=adresse_site}>
						#_meta:VALEUR
					</BOUCLE_meta2>
				</BOUCLE_meta>'
			);
			// en dehors de sa boucle, une balise detachee n'est pas reconnue
			$this->assertEqualCode('', 
				'<BOUCLE_meta(spip_meta){nom=nom_site}></BOUCLE_meta>
				<BOUCLE_meta2(spip_meta){nom=version_base}>#_meta:VALEUR</BOUCLE_meta2>'
			);	
		}
	}
}

