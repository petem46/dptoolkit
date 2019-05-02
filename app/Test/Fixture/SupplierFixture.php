<?php
/**
 * SupplierFixture
 *
 */
class SupplierFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'address' => array('type' => 'text', 'null' => true, 'default' => null),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'dponame' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'dpoemail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'phone' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'dponame' => 'Lorem ipsum dolor sit amet',
			'dpoemail' => 'Lorem ipsum dolor sit amet'
		),
	);

}
