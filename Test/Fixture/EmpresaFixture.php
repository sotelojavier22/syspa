<?php
/**
 * EmpresaFixture
 *
 */
class EmpresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'EmpresaCUIT' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 11, 'unsigned' => false),
		'ConvenioFecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'PorcentajeGasto' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'EmpresaRazonSocial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EmpresaActividad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EmpresaDireccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EmpresaCorreo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EmpresaTelefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'RepresentanteNombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'RepresentanteDNI' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'PagaObraSocial' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'PagaSeguroTrabajo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'PagaAsignacionEstimulo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'ConvenioFechaBaja' => array('type' => 'date', 'null' => true, 'default' => null),
		'MotivoBaja' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ArchivoCM' => array('type' => 'binary', 'null' => true, 'default' => null),
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
			'EmpresaCUIT' => '',
			'ConvenioFecha' => '2014-09-15',
			'PorcentajeGasto' => 1,
			'EmpresaRazonSocial' => 'Lorem ipsum dolor sit amet',
			'EmpresaActividad' => 'Lorem ipsum dolor sit amet',
			'EmpresaDireccion' => 'Lorem ipsum dolor sit amet',
			'EmpresaCorreo' => 'Lorem ipsum dolor sit amet',
			'EmpresaTelefono' => 'Lorem ipsum dolor ',
			'RepresentanteNombre' => 'Lorem ipsum dolor sit amet',
			'RepresentanteDNI' => '',
			'PagaObraSocial' => 1,
			'PagaSeguroTrabajo' => 1,
			'PagaAsignacionEstimulo' => 1,
			'ConvenioFechaBaja' => '2014-09-15',
			'MotivoBaja' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'ArchivoCM' => 'Lorem ipsum dolor sit amet'
		),
	);

}
