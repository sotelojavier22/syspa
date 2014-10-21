<?php
App::uses('Anexo', 'Model');

/**
 * Anexo Test Case
 *
 */
class AnexoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.anexo',
		'app.empresa',
		'app.conveniosparticulare',
		'app.estadocuenta',
		'app.firmante',
		'app.oferta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Anexo = ClassRegistry::init('Anexo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Anexo);

		parent::tearDown();
	}

}
