<?php
require_once('functions/startSession.php');
require_once('functions/autoload.php');
require_once('functions/genericas.php');

$baseURL = getBaseURL();
$products = new ProductsController();
$data = $products->getProducts();

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

  <title>Catalogo Produtos</title>
  
</head>
<body>
   <!-- header -->
   <?php require_once('components/header.php')?>
  <!-- header fim-->
    
  <!-- Barra de menus inicio-->
    <?php require_once('components/navbar.php')?>
  <!-- Barra de menus fim-->
  <main><!-- Pagina principal começo-->
    <div class="container-master"> <!--main container inicio-->
        <?php foreach($data as $product):; ?>
          
          <div id="caixa-items">
            <div class="btns"> 
              <a class="btn-x" href="functions/delProduct.php?pid=<?php echo $product['id']; ?>">
                <img class="btn-img " src="pics/deleteicon.png">
              </a>
              <a class="btn-edit"  href="editProduct.php?pid=<?php echo $product['id']; ?>">
                <img class="btn-img "src="pics/editicon.png">
              </a>
            </div>
            <div class="items-container">
              <img src="<?php echo ( $baseURL . $product['imagem']); ?>">
              <div class="flexboxteste">
              <h4 class="item-title"><?php echo $product['nome'];?> </h4>
              <h3 class="item-title">R$ <?php echo formatToBRL($product['valor']);?></h4>
            
              <p class="item-desc"><?php echo $product['descricao'];?></p> 
          </div>
        </div>
    </div>
       <?php endforeach; ?>
    </div><!--main container final-->
   </main>
    
   <?php require_once('components/footer.php')?>
  <script type="text/javascript">
  function redirect2() {
    document.getElementById("cadastro2").innerHTML = "Cadastrado";
  }
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
