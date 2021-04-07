<main>

  <h2 class="mt-3">Excluir unidade</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir essa unidade? <strong><?=$obUnitreg->titulo?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="unitreg.php">
        <button type="button" class="btn btn-success">Cancelar</button>
      </a>

      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>