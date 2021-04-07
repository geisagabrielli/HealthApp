<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($usuarios as $usuario){
    $resultados .= '<tr>
                      <td>'.$usuario->email.'</td>
                      <td>'.$usuario->name.'</td>
                      <td>'.$usuario->surname.'</td>
                      <td>'.$usuario->profission.'</td>
                      <td>'.$usuario->profregister.'</td>
                      <td>'.$usuario->accesskind.'</td>
                      <td>'.$usuario->place.'</td>
                      <td>'.$usuario->timeattend.'</td>
                      <td>'.$usuario->password.'</td>
                      <td>'.$usuario->situation.'</td>
                                           
                        <a href="editar.php?id='.$usuario->profregister.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$usuario->profregister.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }


  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum usuário encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo Usuário</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>E-mail</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Profissão</th>
            <th>Registro Profissional</th>
            <th>Tipo de Acesso</th>
            <th>Local de Atendimento</th>
            <th>Horário</th>
            <th>Senha</th>
            <th>Situação</th>
             </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>