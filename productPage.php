<?php
require_once('functions/startSession.php');
require_once('functions/autoload.php');
require_once('functions/genericas.php');

$baseURL = getBaseURL();
$products = new ProductsController();
$data = $products->getProduct($_GET['pid']);

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
  <link rel="stylesheet" type="text/css" href="css/productPage.css" />
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">

  <title>Lilac Roller</title>
  
</head>

<body>
      
  <!-- header -->
    <?php require_once('components/header.php')?>
  <!-- header fim-->
  <!-- Barra de menus inicio-->
    <?php require_once('components/navbar.php')?>
  <!-- Barra de menus fim-->
    

  <main><!-- Pagina principal começo-->
    <div id="caixa-items">
        <div class="divgeral">
            <div class="divforimg">
              <img class="divgeralimg" src="<?php echo ( $baseURL . $data['imagem']); ?>">
              <div class="fav">
                <a onclick="wishList()">
                    <img class="wishlist" src="pics/wishlist2.png">
                </a>
              </div>
            </div>
            <div class="divtext">
              <h4 class="texttitle"><?php echo $data['nome'];?> </h4>
              <!-- <h3 class="textvalue">R$ <?php echo formatToBRL($data['valor']);?></h4> -->
              <p class="textdescription"><?php echo $data['descricao'];?></p> 
              <div class="divbtn">
                <div class="btn-adm">
                  <button style="background: #00e68a;" class="btn-unique btn-primary finishshopping"> 
                    <img align=center class="img_btn" src="pics/finish_shop.png">
                    <span class="fulltext">Finalizar Compra</span> 
                    <span class="shorttext">Comprar</span> 
                  </button>
                  <button style="background: #0099ff" class="btn-unique btn-primary addtoshopcart">
                    <img align=center class="img_btn" src="pics/cart_site.png">
                    <span class="fulltext">Adicionar ao carrinho</span> 
                    <span class="shorttext">Carrinho</span> 
                  </button>
                  <button style="background: #ff0000;" class="btn-unique btn-primary" onclick="getMeHome()">
                    <img align=center class="img_btn" src="pics/backtwo.png">
                    <span class="fulltext">Voltar ao Inicio</span> 
                    <span class="shorttext">Voltar</span> 
                  </button>
                </div>
              </div>
            </div> 
         </div>
         <div class="fichatecnica">
            <h1>Informações Técnicas:</h1>
            <span style="clear: both;"></span>
            <h3><?php echo $data['fichatecnica'];?></h3>
         </div>
    </div>
   
   </main>
   <?php require_once('components/footer.php')?>
  <script type="text/javascript">
  function redirect2() {
    document.getElementById("cadastro2").innerHTML = "Cadastrado";
  }
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script>
      getMeHome= () =>{
        window.location="index.php"
      }
      wishList = () =>{
        const fav = document.querySelector('.wishlist');
        fav.style.background = "red";       
      }
  </script>
  </body>
</html>
