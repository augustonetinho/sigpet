<?php
/**
 * ClienteTelefone Fixture
 */
class ClienteTelefoneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'auto incremento'),
		'TIPO_TELEFONE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NUMERO_TELEFONE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'CLIENTE_ID' => 1,
			'TIPO_TELEFONE' => 'Lorem ipsum dolor sit ame',
			'NUMERO_TELEFONE' => 'Lorem ip'
		),
	);

}
