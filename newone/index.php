<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imobiliária</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PeJu imóveis</a>
    
</nav>

  <div class="informacao">
        <h1 class="display-6 text-white">Bem-vindo(a) ao PeJu imóveis</h1><br><br>
        <h3 class="display-6">O melhor para você e sua família<br>
        aproveitarem ao máximo.</h3>
        <div class="imagem">
          <img src="https://img.freepik.com/fotos-premium/tivemos-a-sorte-de-ter-um-ao-outro-foto-de-uma-familia-feliz-se-unindo-ao-ar-livre_590464-8481.jpg?w=2000" width="100%" height="100%">
        </div>
  </div>
  <div class="continua">
        <h2 class="display-6">Temos os melhores preços de imóveis novos e reformados.</h2><br><br><br>
        <div class="quadrado"><img src="https://www.decorfacil.com/wp-content/uploads/2017/10/20171028casa-grande-26.jpg" width="100%" height="100%"><br><br>Assim como habitações de alto padrão de até 5 quartos com suíte, área de lazer e piscina.</div>
        <div class="quadrado2"><img src="https://www.decorfacil.com/wp-content/uploads/2017/03/20171011fachada-casa-simples-pequena-99.jpg" width="100%" height="100%"><br><br>Temos residências habitacionais com 2-3 quartos com suítes.</div>
        <div class="quadrado3"><img src="https://construtoralage.com.br/wp-content/uploads/2019/08/apartamento-2-3-4-quartos.jpg" width="100%" height="100%"><br><br>Possuímos habitações multifamiliares com áreas de lazer integradas, suítes, dentre outras opções.</div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
  
  <div class="cadastro">
    <center><h1 class="display-6 text-white">Ficou interessado(a)? Cadastre-se já para saber mais!</h1></center>
    <br>
        <form class="container" action="salvar.php" method="POST">
  <div class="mb-3">
    <label for="" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome">
  </div><br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div><br>
  <div class="mb-3">
      <label class="form-label">Deseja alugar ou efeuar uma compra?</label>
      <select class="form-select" name="desejo">
        <option>---------------</option>
        <option>Alugar</option>
        <option>Comprar</option>
        </select>
  </div><br>
  <button name="submitBtn" type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
  



