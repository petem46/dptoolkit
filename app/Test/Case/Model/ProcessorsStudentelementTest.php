<?php
App::uses('ProcessorsStudentelement', 'Model');

/**
 * ProcessorsStudentelement Test Case
 *
 */
class ProcessorsStudentelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.processors_studentelement',
		'app.processor',
		'app.supplier',
		'app.lawfulreason',
		'app.parentelement',
		'app.parentelements_processor',
		'app.school',
		'app.processors_school',
		'app.staffelement',
		'app.processors_staffelement',
		'app.studentelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProcessorsStudentelement = ClassRegistry::init('ProcessorsStudentelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProcessorsStudentelement);

		parent::tearDown();
	}

}
