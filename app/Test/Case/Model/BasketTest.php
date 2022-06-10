<?php
App::uses('Basket', 'Model');

/**
 * Basket Test Case
 *
 */
class BasketTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.basket',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Basket = ClassRegistry::init('Basket');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Basket);

		parent::tearDown();
	}

}
