<?php
App::uses('DataaccessgroupsProcessor', 'Model');

/**
 * DataaccessgroupsProcessor Test Case
 *
 */
class DataaccessgroupsProcessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dataaccessgroups_processor',
		'app.dataccessgroup',
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
		'app.datatransfermethod',
		'app.parentelement',
		'app.parentelements_processor',
		'app.school',
		'app.processors_school',
		'app.staffelement',
		'app.processors_staffelement',
		'app.studentelement',
		'app.processors_studentelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataaccessgroupsProcessor = ClassRegistry::init('DataaccessgroupsProcessor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataaccessgroupsProcessor);

		parent::tearDown();
	}

}
