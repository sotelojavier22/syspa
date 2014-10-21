<?php
App::uses('Conveniosparticulare', 'Model');

/**
 * Conveniosparticulare Test Case
 *
 */
class ConveniosparticulareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.carrera',
		'app.tutore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Conveniosparticulare = ClassRegistry::init('Conveniosparticulare');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conveniosparticulare);

		parent::tearDown();
	}

}
