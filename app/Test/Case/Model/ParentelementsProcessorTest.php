<?php
App::uses('ParentelementsProcessor', 'Model');

/**
 * ParentelementsProcessor Test Case
 *
 */
class ParentelementsProcessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parentelements_processor',
		'app.processor',
		'app.parentelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParentelementsProcessor = ClassRegistry::init('ParentelementsProcessor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParentelementsProcessor);

		parent::tearDown();
	}

}
