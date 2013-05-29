<!-- File: /app/View/Funcionarios/index.ctp -->

<h2>Funcionários</h2>

<table >
  <tr>
    <td colspan="7" style="text-align:right;"><?php echo $this->Html->link('Criar novo funcionário', array('controller' => 'funcionarios', 'action' => 'new')); ?></td>
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
    <td><?php echo $funcionario['Funcionario']['matricula']; ?></td>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['sobrenome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['ramal']; ?></td>
    <td><?php echo $funcionario['Funcionario']['usuario']; ?></td>
    <td><?php echo $funcionario['Funcionario']['created']; ?></td>
    <td><?php echo $this->Html->link('Editar', array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['Funcionario']['matricula'])); ?> | <?php echo $this->Html->link('Apagar', array('controller' => 'funcionarios', 'action' => 'remove', $funcionario['Funcionario']['matricula'])); ?></td>
  </tr>
  <?php endforeach; ?>
  <?php unset($funcionario); ?>
</table>
