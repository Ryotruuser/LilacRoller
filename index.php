<?php
require_once('functions/startSession.php');
require_once('functions/select.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">

  <title>Lilac Roller</title>
  
</head>

<body>
  <header><!-- Inicio do header-->
    <a style="color: black;" href="index.php"
    ><h1 class="logo">LILAC ROLLER</h1></a>
    <div class="search-box">
      <input
        class="search-txt"
        type="text"
        placeholder="Sua barra de pesquisa favorita"
      />
      <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>
    <?php
              if (session_id()):
              ?>
            <div class="dropdown">
            <button class="dropbtn user_acc">Olá, <?php echo $result['nome'] .' ' .  $result['sobrenome'] ?></button>
            <div class="dropdown-content">
              <a href="myAccount.php">Minha Conta</a>
              <a href="#">Sair</a>
            </div>
            </div>
         
         
         
         
         <?php
              else:
              ?>
              <a class="user_acc" href="paginadelogin.php"> Minha Conta</a>
              <?php
              endif;
              ?>    
  </header><!--fim do header-->
    

  <nav><!-- Barra de menus inicio-->
    <a href="processadores.html">Processadores</a>
    <p class="separator" style="color: white;">|</p>
    <a href="gabinetes.html">Gabinetes</a>
    <p class="separator" style="color: white;">|</p>
    <a href="placas-de-video.html">Placas de Video</a>
    <p class="separator" style="color: white;">|</p>
    <a href="memoram.html">Memorias</a>
    <p class="separator" style="color: white;">|</p>
    <a href="discossdhd.html">Discos Rigidos</a>
  </nav><!-- Barra de menus fim-->
    

  <main><!-- Pagina principal começo-->
    <div id="container"> <!--main container inicio-->

      <div class="caixa-conteudo" id="gabinete-gamer"><!-- Caixa para categorias-->
        <div class="produto">
          <img src="img_catalogo/casemod_ther.png" />
        </div>
        <div class="produto-txt">
          <h1 style="font-weight: bold;">Gabinetes Gamer Bluecase</h1>
        </div>
      </div><!-- Caixa para os categorias fim-->

      <div class="caixa-conteudo" id="cadeiras-gamer-secao"><!-- Caixa para os categorias-->
        <div class="produto">
          <img src="img_catalogo/cad_game.png" />
        </div>
        <div class="produto-txt">
          <h1 style="font-weight: bold;">Cadeiras Gamers e acessorios</h1>
        </div>
      </div><!-- Caixa para os categorias fim-->
        

      <div class="caixa-conteudo" id="kit-gamer-secao"><!-- Caixa para os categorias-->
        <div class="produto">
          <img src="img_catalogo/kit1.png" />
        </div>
        <div class="produto-txt">
          <h1 style="font-weight: bold;">Kits para turbinar seu pc</h1>
        </div>
      </div><!-- Caixa para os categorias fim-->

      <div class="moses"><!-- Banner separador inicio-->
        <h1>Corra e aproveite nossas ofertas mais recentes</h1>
      </div><!-- Banner separador final-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

      <div id="caixa-items"><!--Caixa para os items-->
        <a href="#" class="caixa-link">
        <div class="items-container">
          <img src="img_catalogo/gpu/2080ti.png">
          <h4 class="item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
        </div>
        </a>
      </div><!--Caixa para os items fim-->

  
    </div><!--main container final-->
  </main><!-- Pagina principal final-->
    
  <footer>
    <div class="email-get">
      <label>Inscreva-se para receber nossos alertas</label>
      <input type="text" name="" placeholder="joaozinho123@gmail.com" />
      <button style="margin-top: 1vh;" class="w-100 btn btn-lg btn-primary" id="cadastro2" type="get" onclick="redirect2()" value="Redirect">Cadastre-se</button>
    </div>
    <div class="footer-links">
      <a href="#">Atendimento ao cliente</a>
      <a href="#">F.A.Q</a>
      <a href="#">Sites Parceiros</a>
      <a href="#">Se torne membro</a>
      <h4 style="color: black;" class="direitos">
          &copy;Todos os direitos reservados.
      </h4>
      </div>  
  </footer> 
  <script type="text/javascript">
  function redirect2() {
    document.getElementById("cadastro2").innerHTML = "Cadastrado";
  }
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
