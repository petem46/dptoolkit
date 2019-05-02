<?php
App::uses('Lawfulreason', 'Model');

/**
 * Lawfulreason Test Case
 *
 */
class LawfulreasonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lawfulreason',
		'app.processor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lawfulreason = ClassRegistry::init('Lawfulreason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lawfulreason);

		parent::tearDown();
	}

}
