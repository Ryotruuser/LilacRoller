<?php
require_once('functions/startSession.php');
require_once('functions/autoload.php');
require_once('functions/genericas.php');

$baseURL = getBaseURL();
$cart = new ShoppingCartsController();
$data = $cart->getShoppingCart($_SESSION['userEmail']);
if($data){
    $userData = [
        'enderenco' => $data[0]['endereco'],
        'cidade' => $data[0]['cidade'],
        'cep' => $data[0]['cep']
    ];
}
else{
    header('Location: index.php');
}

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
  <link rel="stylesheet" type="text/css" href="css/carrinho.css" />
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">

  <title>Carrinho</title>
  
</head>

<body>
  <!-- header -->
    <?php require_once('components/header.php')?>
  <!-- header fim-->
  <!-- Barra de menus inicio-->
    <?php require_once('components/navbar.php')?>
  <!-- Barra de menus fim-->
  <main><!-- Pagina principal começo-->
    <h1 class="simpleTitle">Itens Adicionados ao carrinho</h1>
    <div id="carrinho">
        <div id="mainarea">
            <?php foreach($data as $product): ?>
                 <div class="imagine">
                     <div class="divCardImg">
                        <img class ="imagem" src="<?php echo $baseURL . $product['imagem']?>">
                     </div>
                     <div class="divForText">
                        <h1><?php echo $product['nome'] ?></h1>
                        <p>Em estoque: <?php echo $product['quantidade']?></p>
                        <h3>Valor:</h3>
                        <h1>R$ <?php echo formatToBRL($product['valor']) ?></h1>
                     </div>   
                     <button class="btnexile">X</button>
                </div><!-- fim class imagine -->
            <?php endforeach;?>
        </div><!-- mainarea fim -->

        <aside id="sidearea">
            <div class="fixed">
                <div class="userInfo">
					<h1>Endereço para entrega</h1>
					<p class="para">Endereço: <?php echo $userData['enderenco'];?> <a class="btnSettings" onclick='settings()'>
						<img class="changePic" src='pics/change.png'></a></p>
					<p class="para">Para a cidade: <?php echo $userData['cidade'];?></p>
					<p class="para">Cep: <?php echo $userData['cep'];?></p>
                </div> <!-- fim class userInfo-->
                <hr>
                <div class="calcTot">
					<h2>Valor dos itens</h2>
            		<h4 style="display:inline"><br>Subtotal:</h4>
					<h4 style="display:inline">R$
						<?php 
							$total = 0;
							foreach($data as $product){
								$total+=$product['valor'];
							}
							echo formatToBRL($total)
						
						?>
					</h4>
					<h4><br>Frete(Valor fixo): R$ 150</h4>
                </div><!-- fim class calcTot-->
				<button onclick="getMeHome()"style="background: #0099ff" class="btn-unique btn-primary shopCartbtn">
                    <span>Continuar comprando</span> 
                </button>
				<button style="background: #009999" class="btn-unique btn-primary shopCartbtn">
                    <span>Finalizar compra</span> 
                </button>
				<button onclick="dropTheBase()" style="background: red" class="btn-unique btn-primary cleanCart">
                    <span>Limpar Carrinho</span> 
                </button>								
            </div> <!--fim class fixed-->
        </aside>

       
    </div><!--fim id carrinho -->
    
    

  
  </main>
   <?php require_once('components/footer.php')?>
  <script type="text/javascript">
  function getMeHome() {
        window.location="index.php"
  }
  function settings(){
	  	window.location="myAccount.php"
  }
  function dropTheBase(){
	  	window.location="functions/dropCart.php"
  }
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
