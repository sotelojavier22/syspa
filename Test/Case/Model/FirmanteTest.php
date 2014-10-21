<?php
App::uses('Firmante', 'Model');

/**
 * Firmante Test Case
 *
 */
class FirmanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firmante',
		'app.empresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Firmante = ClassRegistry::init('Firmante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Firmante);

		parent::tearDown();
	}

}
