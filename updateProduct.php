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
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="css/updateProducts.css" />
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">

  <title>Lilac Roller</title>
  
</head>

<body>
   <!-- header -->
   <?php require_once('components/header.php')?>
  <!-- header fim-->
    
  <nav><!-- Barra de menus inicio-->
    <a href="html/processadores.html">Processadores</a>
    <p class="separator" style="color: white;">|</p>
    <a href="html/gabinetes.html">Gabinetes</a>
    <p class="separator" style="color: white;">|</p>
    <a href="html/placas-de-video.html">Placas de Video</a>
    <p class="separator" style="color: white;">|</p>
    <a href="html/memoram.html">Memorias</a>
    <p class="separator" style="color: white;">|</p>
    <a href="html/discossdhd.html">Discos Rigidos</a>
  </nav><!-- Barra de menus fim-->
    

  <main><!-- Pagina principal começo-->
    <div class="container-master"> <!--main container inicio-->
        <div id="caixa-items" class="caixa-update"><!--Caixa para os items-->
            <div class="items-container container-update">
            <img class="img-update" src="img_catalogo/gpu/2080ti.png">
            <h4 id="update-item-title">Placa de Video RX2080 TI<hr>De R$ 2.899.00<br>Por R$ 1.500,00</h4> 
            <div class="btn-adm">
                <button  class="btn-edit btn btn-primary btn-grad"> 
                    <img src="pics/editicon.png" class="btn-icon">
                    <span>Editar</span> 
                </button>
                <button  class="btn-delet btn btn-primary">
                    <img src="pics/deleteicon.png" class="btn-icon">
                    <span>Excluir</span> 
                </button>
            </div>
            </div>
        </div><!--Caixa para os items fim-->
    
        <div id="caixa-items" class="caixa-update"><!--Caixa para os items-->
            <div class="items-container container-update">
            <img class="img-update" src="img_catalogo/cpu/ryzen.png">
            <h4 id="update-item-title">Ryzen 3 4300GE 3.6GHz<hr>De R$ 1.499.00<br>Por R$ 950,00</h4> 
            <div class="btn-adm">
                <button  class="btn-edit btn btn-primary btn-grad"> 
                    <img src="pics/editicon.png" class="btn-icon">
                    <span>Editar</span> 
                </button>
                <button  class="btn-delet btn btn-primary">
                    <img src="pics/deleteicon.png" class="btn-icon">
                    <span>Excluir</span> 
                </button>
            </div>
            </div>
        </div><!--Caixa para os items fim-->
        
      
      




    </div><!--main container final-->
   </main>
    
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
