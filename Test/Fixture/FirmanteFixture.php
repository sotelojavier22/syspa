<?php
/**
 * FirmanteFixture
 *
 */
class FirmanteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'FirmanteCUIL' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 11, 'unsigned' => false),
		'EmpresaCUIT' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 11, 'unsigned' => false),
		'FirmanteNombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteApellido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteTelefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteDireccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteCorreo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteCargo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirmanteFechaBaja' => array('type' => 'date', 'null' => true, 'default' => null),
		'AnexoId' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'FirmanteDNI' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Ref227' => array('column' => 'empresa_id', 'unique' => 0)
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
			'FirmanteCUIL' => '',
			'EmpresaCUIT' => '',
			'FirmanteNombre' => 'Lorem ipsum dolor sit amet',
			'FirmanteApellido' => 'Lorem ipsum dolor sit amet',
			'FirmanteTelefono' => 'Lorem ipsum dolor ',
			'FirmanteDireccion' => 'Lorem ipsum dolor sit amet',
			'FirmanteCorreo' => 'Lorem ipsum dolor sit amet',
			'FirmanteCargo' => 'Lorem ipsum dolor sit amet',
			'FirmanteFechaBaja' => '2014-09-13',
			'AnexoId' => 1,
			'FirmanteDNI' => '',
			'empresa_id' => 1
		),
	);

}
