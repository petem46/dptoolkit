<?php
App::uses('AppModel', 'Model');
/**
 * ParentelementsProcessor Model
 *
 * @property Processor $Processor
 * @property Parentelement $Parentelement
 */
class ParentelementsProcessor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'processor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parentelement_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Processor' => array(
			'className' => 'Processor',
			'foreignKey' => 'processor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Parentelement' => array(
			'className' => 'Parentelement',
			'foreignKey' => 'parentelement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
