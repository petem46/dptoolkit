<?php
App::uses('AppModel', 'Model');
/**
 * DataaccessgroupsProcessor Model
 *
 * @property Dataaccessgroup $Dataaccessgroup
 * @property Processor $Processor
 */
class DataaccessgroupsProcessor extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dataaccessgroup' => array(
			'className' => 'Dataaccessgroup',
			'foreignKey' => 'dataaccessgroup_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Processor' => array(
			'className' => 'Processor',
			'foreignKey' => 'processor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
