<?php
App::uses('Dataelementsource', 'Model');

/**
 * Dataelementsource Test Case
 *
 */
class DataelementsourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dataelementsource'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dataelementsource = ClassRegistry::init('Dataelementsource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dataelementsource);

		parent::tearDown();
	}

}
