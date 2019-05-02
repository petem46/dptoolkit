<?php
/**
 * DatatransfermethodFixture
 *
 */
class DatatransfermethodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'method' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '250'),
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
			'method' => 'Lorem ipsum dolor sit amet'
		),
	);

}
