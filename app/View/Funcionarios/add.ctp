<!-- File: /app/View/Funcionarios/add.ctp -->

<h2>Adicionar funcionario</h2>

<?php

echo $this->Form->create('Funcionario');
echo $this->Form->input('id');
echo $this->Form->input('matricula');
echo $this->Form->input('nome');
echo $this->Form->input('sobrenome');
echo $this->Form->input('ramal');
echo $this->Form->input('user');
echo $this->Form->input('password');
echo $this->Form->end('Adicionar funcionario');
