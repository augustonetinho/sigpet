<?php
/**
 * ClienteEndereco Fixture
 */
class ClienteEnderecoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CODIGO_ENDERECO' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'CLIENTE_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'auto incremento'),
		'LOGRADOURO_ENDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'COMPLEMENTO_ENDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CEP_ENDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'BAIRRO_ENDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CIDADE_ENDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'UF_ENEDERECO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CODIGO_ENDERECO', 'unique' => 1)
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
			'CODIGO_ENDERECO' => 1,
			'CLIENTE_ID' => 1,
			'LOGRADOURO_ENDERECO' => 'Lorem ipsum dolor sit amet',
			'COMPLEMENTO_ENDERECO' => 'Lorem ipsum dolor sit amet',
			'CEP_ENDERECO' => 'Lorem ',
			'BAIRRO_ENDERECO' => 'Lorem ipsum dolor sit amet',
			'CIDADE_ENDERECO' => 'Lorem ipsum dolor sit amet',
			'UF_ENEDERECO' => ''
		),
	);

}
