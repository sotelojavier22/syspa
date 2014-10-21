<?php
/**
 * TutoreFixture
 *
 */
class TutoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'DNI' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'TutorEmail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TutorTelefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TutorCargo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ApellidoNombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CUIL' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 11, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'DNI' => '',
			'TutorEmail' => 'Lorem ipsum dolor sit amet',
			'TutorTelefono' => 'Lorem ipsum dolor sit amet',
			'TutorCargo' => 'Lorem ipsum dolor sit amet',
			'ApellidoNombre' => 'Lorem ipsum dolor sit amet',
			'CUIL' => ''
		),
	);

}
