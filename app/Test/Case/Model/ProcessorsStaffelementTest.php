<?php
App::uses('ProcessorsStaffelement', 'Model');

/**
 * ProcessorsStaffelement Test Case
 *
 */
class ProcessorsStaffelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processors_staffelement',
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
		'app.parentelement',
		'app.parentelements_processor',
		'app.school',
		'app.processors_school',
		'app.staffelement',
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
		$this->ProcessorsStaffelement = ClassRegistry::init('ProcessorsStaffelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProcessorsStaffelement);

		parent::tearDown();
	}

}
