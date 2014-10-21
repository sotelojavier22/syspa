<?php
/**
 * ConveniosparticulareFixture
 *
 */
class ConveniosparticulareFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'FechaInicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'FechaFin' => array('type' => 'date', 'null' => false, 'default' => null),
		'ImporteAsignacionEstimulo' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'NombreART' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ImporteArt' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'NombreObraSocial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ImporteObraSocial' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'FechaCancelacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'MotivoCancelacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EvaluacionAlumno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FechaFirmaConvenio' => array('type' => 'date', 'null' => false, 'default' => null),
		'ArchivoCP' => array('type' => 'binary', 'null' => true, 'default' => null),
		'FechaAltaObraSocial' => array('type' => 'date', 'null' => false, 'default' => null),
		'PagaAsignacionEstumulo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'oferta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'carrera_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'tutore_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Ref646' => array('column' => 'oferta_id', 'unique' => 0),
			'Ref247' => array('column' => 'empresa_id', 'unique' => 0),
			'Ref1248' => array('column' => 'alumno_id', 'unique' => 0),
			'Ref1049' => array('column' => 'carrera_id', 'unique' => 0),
			'Ref1956' => array('column' => 'tutore_id', 'unique' => 0)
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
			'FechaInicio' => '2014-09-30',
			'FechaFin' => '2014-09-30',
			'ImporteAsignacionEstimulo' => '',
			'NombreART' => 'Lorem ipsum dolor sit amet',
			'ImporteArt' => '',
			'NombreObraSocial' => 'Lorem ipsum dolor sit amet',
			'ImporteObraSocial' => '',
			'FechaCancelacion' => '2014-09-30',
			'MotivoCancelacion' => 'Lorem ipsum dolor sit amet',
			'EvaluacionAlumno' => 'Lorem ipsum dolor sit amet',
			'FechaFirmaConvenio' => '2014-09-30',
			'ArchivoCP' => 'Lorem ipsum dolor sit amet',
			'FechaAltaObraSocial' => '2014-09-30',
			'PagaAsignacionEstumulo' => 1,
			'oferta_id' => 1,
			'empresa_id' => 1,
			'alumno_id' => 1,
			'carrera_id' => 1,
			'tutore_id' => 1
		),
	);

}
