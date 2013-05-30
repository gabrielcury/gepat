<!-- File: /app/View/Funcionarios/index.ctp -->

<h2>Funcionários</h2>

<table >
  <tr>
    <td colspan="7" style="text-align:right;"><?php echo $this->Html->link('Criar novo funcionário', array('controller' => 'funcionarios', 'action' => 'add')); ?></td>
  </tr>

  <tr>
    <th scope="col">Matrícula</th>
    <th scope="col">Nome</th>
    <th scope="col">Sobrenome</th>
    <th scope="col">Ramal</th>
    <th scope="col">Usuário</th>
    <th scope="col">Data de criação</th>
    <th scope="col">Ação</th>
  </tr>
  <?php foreach ($funcionarios as $funcionario): ?>
  <tr>
    <td><?php echo $this->Html->link($funcionario['Funcionario']['matricula'], array('controller' => 'funcionarios', 'action' => 'view', $funcionario['Funcionario']['id'])) ?></td>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['sobrenome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['ramal']; ?></td>
    <td><?php echo $funcionario['Funcionario']['user']; ?></td>
    <td><?php echo $funcionario['Funcionario']['created']; ?></td>
    <td><?php echo $this->Html->link('Editar', array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['Funcionario']['id'])); ?> | <?php echo $this->Form->postLink(
    'Apagar',
    array('action' => 'delete', $funcionario['Funcionario']['id']),
    array('confirm' => 'Tem certeza que deseja remover o funcionario?')); ?>
  </td>
  </tr>
  <?php endforeach; ?>
  <?php unset($funcionario); ?>
</table>
