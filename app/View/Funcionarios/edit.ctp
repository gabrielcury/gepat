<!-- File: /app/View/Funcionario/edit.ctp -->

<h2>Adicionar funcionario</h2>

<?php

	echo $this->Form->create('Funcionario', array('action' => 'edit'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('matricula');
	echo $this->Form->input('nome');
	echo $this->Form->input('sobrenome');
	echo $this->Form->input('ramal');
	echo $this->Form->input('user');
	echo $this->Form->input('password');
	echo $this->Form->end('Alterar funcionario');