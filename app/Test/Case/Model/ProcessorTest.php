<?php
App::uses('Processor', 'Model');

/**
 * Processor Test Case
 *
 */
class ProcessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
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
		$this->Processor = ClassRegistry::init('Processor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Processor);

		parent::tearDown();
	}

}
