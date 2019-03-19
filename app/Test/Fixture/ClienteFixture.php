<?php
/**
 * Cliente Fixture
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'auto incremento'),
		'NOME_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CPF_CLIENTE' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'RG_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DT_NASCIMENTO' => array('type' => 'date', 'null' => true, 'default' => null),
		'DT_CADASTRO' => array('type' => 'date', 'null' => true, 'default' => null),
		'TELEFONE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EMAIL' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TIPO_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CNPJ_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'REFERENCIA_CLIENTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CELULAR' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'NOME_CLIENTE' => 'Lorem ipsum dolor sit amet',
			'CPF_CLIENTE' => 1,
			'RG_CLIENTE' => 'Lorem ipsum dolor sit amet',
			'DT_NASCIMENTO' => '2019-03-19',
			'DT_CADASTRO' => '2019-03-19',
			'TELEFONE' => 'Lorem ips',
			'EMAIL' => 'Lorem ipsum dolor sit amet',
			'TIPO_CLIENTE' => 'Lorem ipsum dolor sit ame',
			'CNPJ_CLIENTE' => 'Lorem ipsum ',
			'REFERENCIA_CLIENTE' => 'Lorem ipsum dolor sit amet',
			'CELULAR' => 'Lorem ips'
		),
	);

}
