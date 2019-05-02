<?php
/**
 * SettingFixture
 *
 */
class SettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'sitename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => '50'),
		'processorslabel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => '50'),
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
			'sitename' => 'Lorem ipsum dolor sit amet',
			'processorslabel' => 'Lorem ipsum dolor sit amet'
		),
	);

}
