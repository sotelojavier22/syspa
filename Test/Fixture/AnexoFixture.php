<?php
/**
 * AnexoFixture
 *
 */
class AnexoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'AnexoConvenioMarco' => array('type' => 'binary', 'null' => false, 'default' => null),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'EmpresaCUIT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ConvenioFechaAnterior' => array('type' => 'date', 'null' => false, 'default' => null),
		'PorcentajeGastoAnterior' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 18, 'unsigned' => false),
		'PagaObraSocialAnterior' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'PagaSeguroTrabajoAnterior' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'PagaAsignacionEstimuloAnterior' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Ref231' => array('column' => 'empresa_id', 'unique' => 0)
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
			'AnexoConvenioMarco' => 'Lorem ipsum dolor sit amet',
			'empresa_id' => 1,
			'EmpresaCUIT' => 1,
			'ConvenioFechaAnterior' => '2014-09-18',
			'PorcentajeGastoAnterior' => 1,
			'PagaObraSocialAnterior' => 1,
			'PagaSeguroTrabajoAnterior' => 1,
			'PagaAsignacionEstimuloAnterior' => 1
		),
	);

}
