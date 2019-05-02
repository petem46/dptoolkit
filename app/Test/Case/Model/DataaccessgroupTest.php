<?php
App::uses('Dataaccessgroup', 'Model');

/**
 * Dataaccessgroup Test Case
 *
 */
class DataaccessgroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dataaccessgroup',
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
		'app.processors_studentelement',
		'app.dataaccessgroups_processor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dataaccessgroup = ClassRegistry::init('Dataaccessgroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dataaccessgroup);

		parent::tearDown();
	}

}
