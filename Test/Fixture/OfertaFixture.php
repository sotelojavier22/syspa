<?php
/**
 * OfertaFixture
 *
 */
class OfertaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'OfertaVigenciaDesde' => array('type' => 'date', 'null' => false, 'default' => null),
		'OfertaVigenciaHasta' => array('type' => 'date', 'null' => false, 'default' => null),
		'OfertaDescripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Ref233' => array('column' => 'empresa_id', 'unique' => 0)
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
			'OfertaVigenciaDesde' => '2014-09-22',
			'OfertaVigenciaHasta' => '2014-09-22',
			'OfertaDescripcion' => 'Lorem ipsum dolor sit amet',
			'empresa_id' => 1
		),
	);

}
