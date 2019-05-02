<?php
App::uses('Staffelement', 'Model');

/**
 * Staffelement Test Case
 *
 */
class StaffelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.staffelement',
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
		'app.parentelement',
		'app.parentelements_processor',
		'app.school',
		'app.processors_school',
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
		$this->Staffelement = ClassRegistry::init('Staffelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Staffelement);

		parent::tearDown();
	}

}
