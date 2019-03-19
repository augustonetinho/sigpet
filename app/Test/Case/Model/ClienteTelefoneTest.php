<?php
App::uses('ClienteTelefone', 'Model');

/**
 * ClienteTelefone Test Case
 */
class ClienteTelefoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente_telefone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClienteTelefone = ClassRegistry::init('ClienteTelefone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClienteTelefone);

		parent::tearDown();
	}

}
