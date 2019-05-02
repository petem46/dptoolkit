<?php
/**
 * ProcessorsStaffelementFixture
 *
 */
class ProcessorsStaffelementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'processor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'staffelement_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
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
			'staffelement_id' => 1
		),
	);

}
