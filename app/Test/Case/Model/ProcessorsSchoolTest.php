<?php
App::uses('ProcessorsSchool', 'Model');

/**
 * ProcessorsSchool Test Case
 *
 */
class ProcessorsSchoolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processors_school',
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
		'app.parentelement',
		'app.parentelements_processor',
		'app.school',
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
		$this->ProcessorsSchool = ClassRegistry::init('ProcessorsSchool');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProcessorsSchool);

		parent::tearDown();
	}

}
