<?php

class Funcionario extends AppModel {

	public $name = 'Funcionario';

	public $validate = array(
		'matricula' => array('rule' => 'notEmpty'),
		'nome' => array('rule' => 'notEmpty'),
		'sobrenome' => array('rule' => 'notEmpty'),
		'ramal' => array('rule' => 'notEmpty'),
		'user' => array('rule' => 'notEmpty'),
		'password' => array('rule' => 'notEmpty')
		);

}

?>
