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
  foreach($unidades as $unidade){
    $resultados .= '<tr>
                      <td>'.$unidade->unitcod.'</td>
                      <td>'.$unidade->kindplace.'</td>
                      <td>'.$unidade->state.'</td>
                       <td>'.$unidade->address.'</td>
                       <td>'.$unidade->specialit.'</td>
                      
                      
                        <a href="editar.php?id='.$unidade->unitcod.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$unidade->unitcod.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }


  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma unidade encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova unidade</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>Código da Unidade</th>
            <th>Tipo de Estabelecimento</th>
            <th>Estado</th>
            <th>Endereço</th>
            <th>Especialidade</th>
             </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>