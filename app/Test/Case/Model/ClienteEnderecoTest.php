<?php
App::uses('ClienteEndereco', 'Model');

/**
 * ClienteEndereco Test Case
 */
class ClienteEnderecoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente_endereco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClienteEndereco = ClassRegistry::init('ClienteEndereco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClienteEndereco);

		parent::tearDown();
	}

}
