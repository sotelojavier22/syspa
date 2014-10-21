<?php
App::uses('Tutore', 'Model');

/**
 * Tutore Test Case
 *
 */
class TutoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tutore',
		'app.conveniosparticulare',
		'app.oferta',
		'app.empresa',
		'app.anexo',
		'app.firmante',
		'app.estadocuenta',
		'app.ofertascarrera',
		'app.postulacione',
		'app.requisitoscompetencia',
		'app.alumno',
		'app.carrera'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tutore = ClassRegistry::init('Tutore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tutore);

		parent::tearDown();
	}

}
