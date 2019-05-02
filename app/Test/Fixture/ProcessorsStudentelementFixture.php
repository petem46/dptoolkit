<?php
/**
 * ProcessorsStudentelementFixture
 *
 */
class ProcessorsStudentelementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'processor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'studentelement_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
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
			'processor_id' => 1,
			'studentelement_id' => 1
		),
	);

}
