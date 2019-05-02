<?php
/**
 * LawfulreasonFixture
 *
 */
class LawfulreasonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'reason' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => '50'),
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
			'id' => 1,
			'reason' => 'Lorem ipsum dolor sit amet'
		),
	);

}
