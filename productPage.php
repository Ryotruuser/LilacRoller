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
      <a href="productPage.php?pid=<?php echo $data['id'] ;?>" class="caixa-link">
        <div class="items-container">
          <img src="<?php echo ( $baseURL . $data['imagem']); ?>">
          <div class="flexboxteste">
            <h4 class="item-title"><?php echo $data['nome'];?> </h4>
            <h3 class="item-title">R$ <?php echo formatToBRL($data['valor']);?></h4>
            <p><?php echo $data['descricao'];?></p> 
          </div>
        </div>
      </a>
    </div>
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
