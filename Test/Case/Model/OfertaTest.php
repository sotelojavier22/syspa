<?php
App::uses('Oferta', 'Model');

/**
 * Oferta Test Case
 *
 */
class OfertaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.oferta',
		'app.empresa',
		'app.anexo',
		'app.firmante',
		'app.conveniosparticulare',
		'app.estadocuenta',
		'app.ofertascarrera',
		'app.postulacione',
		'app.requisitoscompetencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Oferta = ClassRegistry::init('Oferta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oferta);

		parent::tearDown();
	}

}
