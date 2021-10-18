<?php
require_once('functions/startSession.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" /> 
  
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
  <link rel="stylesheet" type="text/css" href="css/insert.css">


  <title>Lilac - Cadastro</title>
</head>

<body>
  <!-- header -->
    <?php require_once('components/header.php')?>
  <!-- header fim-->
  <nav><!-- Barra de menus inicio-->
    <a href="processadores.html">Processadores</a>
    <a href="gabinetes.html">Gabinetes</a>
    <a href="placas-de-video.html">Placas de Video</a>
    <a href="memoram.html">Memorias</a>
    <a href="discossdhd.html">Discos Rigidos</a>
  </nav><!-- Barra de menus fim-->  
  <main>
      <div id="caixa">
      <img style="display:flex; flex-wrap: wrap; "class="mb-4 rgbi" id ="lilacbird"src="https://www.birdorable.com/img/bird/th440/lilac-breasted-roller.png" alt="Lilac Roller" width="68" height="54">
        <br>
        <h1>Bem Vindo Administrador</h1>
        <br>
        <h3>Adicione aqui novos produtos em nossa loja. </h3>
       
        <form class="row g-1" id="former" method="POST" action="\uc3\lilacroller\functions/handleInsertProduct.php" 
        enctype="multipart/form-data"> 
          <legend>Informações Básicas do produto</legend>
          <hr>
          <div class="col-md-4">
            <label for="nome-input"class="form-label">Nome do produto</label>
            <input type="name" class="form-control" id="inputEmail4" name="nome-input" required>
          </div>

          <div class="col-md-4">
            <label for="preco-input"class="form-label">Preço do produto</label>
            <input type="name" class="form-control" id="inputEmail4" name="preco-input" required>
          </div>

          <div class="col-md-4 qntdiv">
            <label for="estoque-input"class="form-label">Estoque</label>
            <input type="number" class="form-control qntProd" id="inputEmail4" name="estoque-input" min="1" required>
          </div>

          <div class="col-md-4 imgProd">
            <label for="imagem-input"class="form-label">Imagem do produto</label>
            <input type="file" class="form-control" id="inputEmail4" name="imagem-input" >
          </div>

          <div class="col-md-3">
          <label for="categoria-input" class="form-label">Categoria</label>
          <select id="inputState" class="form-select" name="categoria-input" required>
            <option selected>Escolha..</option>
            <option value="hardware">Hardware</option>
            <option value="midiadigital">Midia digital</option>]
            <option value="periferico">Periferico</option>
          </select>
        </div>

          <legend> <br>Informações Técnicas</legend>
          <hr>

          <div class="col-md-4 descricaoProduto">
            <label for="descricao-input"class="form-label">Descrição do produto</label>
            <textarea class="descProdText"id="textarea" name="descricao-input" rows="4" cols="50">
            </textarea>
          </div>

          <div class="col-md-4 descricaoProduto">
            <label for="fichaTecnica-input"class="form-label">Ficha Técnica</label>
            <textarea class="descProdText"id="textarea" name="fichaTecnica-input" rows="4" cols="50">
            </textarea>
          </div>
          <div class="col-14">
            <button style="border-radius: 20px; background: green;" class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
         </div>
        </form>
      </div>
       

  </main>
  <footer>
    <div class="email-get">
      <label>Inscreva-se para receber nossos alertas</label>
      <input type="text" name="" placeholder="joaozinho123@gmail.com" />
      <button class="w-100 btn btn-lg btn-primary" id="cadastro" type="get" onclick="redirect2()" value="Redirect">Cadastre-se</button>
    </div>
    <div class="footer-links">
      <a href="#">Atendimento ao cliente</a>
      <a href="#">F.A.Q</a>
      <a href="#">Sites Parceiros</a>
      <a href="#">Se torne membro</a>
      <h4 style="color: black;" class="direitos">
          Todos os direitos reservados.
      </h4>
    </div>  
  </footer>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
</body>
</html>
