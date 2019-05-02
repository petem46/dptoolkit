<?php
/**
 * ProcessorFixture
 *
 */
class ProcessorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '250'),
		'supplier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'purpose' => array('type' => 'text', 'null' => true, 'default' => null),
		'lawfulreason_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'processingfrequency' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'accessedby' => array('type' => 'text', 'null' => true, 'default' => null),
		'retention' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '50'),
		'processinglocation' => array('type' => 'text', 'null' => true, 'default' => null),
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
			'supplier_id' => 1,
			'purpose' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'lawfulreason_id' => 1,
			'processingfrequency' => 'Lorem ipsum dolor sit amet',
			'accessedby' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'retention' => 'Lorem ipsum dolor sit amet',
			'processinglocation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
