<!-- File: /app/View/Funcionarios/view.ctp -->

<h2>Visualizacao de funcionario</h2>

<table>
  <tr>
    <th scope="row">Matricula</th>
    <td><?php echo $funcionario['Funcionario']['matricula']; ?></td>
  </tr>
  <tr>
    <th scope="row">Nome</th>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
  </tr>
  <tr>
    <th scope="row">Sobrenome</th>
    <td><?php echo $funcionario['Funcionario']['sobrenome']; ?></td>
  </tr>
  <tr>
    <th scope="row">Ramal</th>
    <td><?php echo $funcionario['Funcionario']['ramal']; ?></td>
  </tr>
  <tr>
    <th scope="row">Usuario</th>
    <td><?php echo $funcionario['Funcionario']['user']; ?></td>
  </tr>
  <tr>
    <th scope="row">Data de criacao</th>
    <td><?php echo $funcionario['Funcionario']['created']; ?></td>
  </tr>
</table>
