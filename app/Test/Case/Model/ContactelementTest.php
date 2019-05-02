<?php
App::uses('Contactelement', 'Model');

/**
 * Contactelement Test Case
 *
 */
class ContactelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contactelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contactelement = ClassRegistry::init('Contactelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contactelement);

		parent::tearDown();
	}

}
