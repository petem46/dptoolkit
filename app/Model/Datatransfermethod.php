<?php
App::uses('AppModel', 'Model');
/**
 * Datatransfermethod Model
 *
 * @property Processor $Processor
 */
class Datatransfermethod extends AppModel {

  public $displayField = 'method';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Processor' => array(
			'className' => 'Processor',
			'foreignKey' => 'datatransfermethod_id',
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
