<?php
/**
 * DataaccessgroupsProcessorFixture
 *
 */
class DataaccessgroupsProcessorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dataccessgroup_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'processor_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'dataccessgroup_id' => 1,
			'processor_id' => 1
		),
	);

}
