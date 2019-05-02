<?php
App::uses('AppModel', 'Model');
/**
 * Processor Model
 *
 * @property Supplier $Supplier
 * @property Lawfulreason $Lawfulreason
 * @property Parentelement $Parentelement
 * @property School $School
 * @property Staffelement $Staffelement
 * @property Studentelement $Studentelement
 */
class Processor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'supplier_id' => array(
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
    'Supplier' => array(
      'className' => 'Supplier',
      'foreignKey' => 'supplier_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    ),
    'Lawfulreason' => array(
      'className' => 'Lawfulreason',
      'foreignKey' => 'lawfulreason_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    ),
    'Datatransfermethod' => array(
      'className' => 'Datatransfermethod',
      'foreignKey' => 'datatransfermethod_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    )
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
    'Parentelement' => array(
      'className' => 'Parentelement',
      'joinTable' => 'parentelements_processors',
      'foreignKey' => 'processor_id',
      'associationForeignKey' => 'parentelement_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => 'Parentelement.name ASC',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
    ),
    'Dataaccessgroup' => array(
      'className' => 'Dataaccessgroup',
      'joinTable' => 'dataaccessgroups_processors',
      'foreignKey' => 'processor_id',
      'associationForeignKey' => 'dataaccessgroup_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => 'Dataaccessgroup.name ASC',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
    ),
		'School' => array(
			'className' => 'School',
			'joinTable' => 'processors_schools',
			'foreignKey' => 'processor_id',
			'associationForeignKey' => 'school_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Staffelement' => array(
			'className' => 'Staffelement',
			'joinTable' => 'processors_staffelements',
			'foreignKey' => 'processor_id',
			'associationForeignKey' => 'staffelement_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => 'Staffelement.name ASC',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Studentelement' => array(
			'className' => 'Studentelement',
			'joinTable' => 'processors_studentelements',
			'foreignKey' => 'processor_id',
			'associationForeignKey' => 'studentelement_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => 'Studentelement.name ASC',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
