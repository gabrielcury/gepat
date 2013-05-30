<?php

class FuncionariosController extends AppController {

	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	public $name ='Funcionarios';

	public function index(){
		$this->set('funcionarios', $this->Funcionario->find('all'));
	}

	public function view($id = null){
		$this->Funcionario->id = $id;
		$this->set('funcionario', $this->Funcionario->read());
	}

	public function add(){
		if ($this->request->is('post')){
			if($this->Funcionario->save($this->request->data)){
				$this->Session->setFlash('O funcionario foi adicionado!');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null){
		$this->Funcionario->id = $id;
		if($this->request->is('get')){
			$this->request->data = $this->Funcionario->read();
		} else {
			if($this->Funcionario->save($this->request->data)){
				$this->Session->setFlash('O funcionario foi alterado!');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function delete($id){
		if($this->request->is('post')){
			throw new MethodNotAllowedException();
		}
		if($this->Funcionario->delete($id)){
			$this->Session->setFlash('O funcionario da matricula' . $matricula . 'foi apagado!');
			$this->redirect(array('action' => 'index'));
		}
	}

}

?>
