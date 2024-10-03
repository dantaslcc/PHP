<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
 
<main class="inserir">
 
<form class="form-horizontal" action="index.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="filme">Filme</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="filme">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="genero">Gênero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="genero">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="indicacao">Indicação</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="indicacao">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lancamento">Lançamento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lancamento">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="duracao">Duração</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="duracao">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="diretor">Diretor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="diretor">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="produtora">Produtora</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="produtora">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="valor">Valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="valor">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Inserir</button>
    </div>
  </div>
</form>
 
</main>
 
</body>
</html>