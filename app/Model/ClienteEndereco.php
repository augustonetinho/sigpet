<?php
App::uses('AppModel', 'Model');
/**
 * ClienteEndereco Model
 *
 */
class ClienteEndereco extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CODIGO_ENDERECO' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
