<!-- File: /app/View/Funcionarios/index.ctp -->

<h2>Funcionários</h2>

<table>
	<tr>
		<th>Matrícula</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Ramal</th>
		<th>Usuário</th>
		<th>Data de criação</th>
		<th>Ação</th>
	</tr>

	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo $funcionario['Funcionario']['matricula']; ?></td>
		<td><?php echo $funcionario['Funcionario']['nome']; ?></td>
		<td><?php echo $funcionario['Funcionario']['sobrenome']; ?></td>
		<td><?php echo $funcionario['Funcionario']['ramal']; ?></td>
		<td><?php echo $funcionario['Funcionario']['usuario']; ?></td>
		<td><?php echo $funcionario['Funcionario']['created']; ?></td>
		<td><?php echo $this->Html->link('Editar', array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['Funcionario']['matricula'])); ?> | <?php echo $this->Html->link('Apagar', array('controller' => 'funcionarios', 'action' => 'remove', $funcionario['Funcionario']['matricula'])); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php //unset($funcionario); ?>

</table>