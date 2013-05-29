<?php

class FuncionariosController extends AppController {

	public $helpers = array('Html', 'Form');
	public $name ='Funcionarios';

	public function index(){
		$this->set('funcionarios', $this->Funcionario->find('all'));
	}

}

?>