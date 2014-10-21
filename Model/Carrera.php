<?php
App::uses('AppModel', 'Model');
/**
 * Carrera Model
 *
 * @property Alumno $Alumno
 * @property Conveniosparticulare $Conveniosparticulare
 * @property Ofertascarrera $Ofertascarrera
 */
class Carrera extends AppModel {
    public $displayField = 'carrera';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'carrera' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'carrera_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'carrera_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Ofertascarrera' => array(
			'className' => 'Ofertascarrera',
			'foreignKey' => 'carrera_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
