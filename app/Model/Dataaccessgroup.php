<?php
App::uses('AppModel', 'Model');
/**
 * Dataaccessgroup Model
 *
 * @property Processor $Processor
 */
class Dataaccessgroup extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Processor' => array(
			'className' => 'Processor',
			'joinTable' => 'dataaccessgroups_processors',
			'foreignKey' => 'dataaccessgroup_id',
			'associationForeignKey' => 'processor_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
