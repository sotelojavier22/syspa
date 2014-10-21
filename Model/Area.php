<?php
App::uses('AppModel', 'Model');
/**
 * Area Model
 *
 * @property Actividade $Actividade
 * @property Competencia $Competencia
 */
class Area extends AppModel {
    public $displayField = 'AreaDescripcion';
    
    public $validate = array(
	'AreaDescripcion' => array(
            'notEmpty' => array(
            'rule' => array('notEmpty'),
            'message' => 'Debe ingresar una descripción para el área',
            'allowEmpty' => false,
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
        'Actividade' => array(
            'className' => 'Actividade',
            'foreignKey' => 'area_id',
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
        'Competencia' => array(
            'className' => 'Competencia',
            'foreignKey' => 'area_id',
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
