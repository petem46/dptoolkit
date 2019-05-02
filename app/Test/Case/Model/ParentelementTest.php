<?php
App::uses('Parentelement', 'Model');

/**
 * Parentelement Test Case
 *
 */
class ParentelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parentelement',
		'app.processor',
		'app.parentelements_processor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parentelement = ClassRegistry::init('Parentelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parentelement);

		parent::tearDown();
	}

}
