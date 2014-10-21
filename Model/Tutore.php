<?php
App::uses('AppModel', 'Model');
/**
 * Tutore Model
 *
 * @property Conveniosparticulare $Conveniosparticulare
 */
class Tutore extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'tutore_id',
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
