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
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">
  <title>Lilac Roller</title>
</head>
<body>
  <header><!-- Inicio do header-->

  <div class="logo">
    <a class="logo-name" href="index.php">LILAC ROLLER</a>
  </div>

  <div class="space-menu"></div>

  <div class="search-box">
    <input class="search-txt"type="text"placeholder="Sua barra de pesquisa favorita"/>
    <a class="search-btn" href="#">
      <i class="fas fa-search"></i>
    </a>

  </div>
  <?php
    if (session_id()): ?>
      <div class="acc-text">
        <div class="dropdown">
            <a class="user_acc" href="#"> Olá, <?php echo $_SESSION['userFullName']; ?></a>
            <div class="dropdown-content">
              <a href="myAccount.php">Minha Conta</a>
              <a href="updateProduct.php">Editar Produto</a>
              <a href="functions/signout.php">Sair</a>
            </div>
          </div>  
        <a class="user_acc" href="#"> Carrinho</a>
      </div>
  <?php
      else:?>
        <div class="acc-text">
          <a class="user_acc" href="#"> Carrinho</a>
          <a class="user_acc" href="#"> F.A.Q</a>
        </div>
      
      
  <?php
      endif;?>    
  </header><!--fim do header-->  

    
   <!-- Barra de menus inicio-->
   <?php require_once('components/navbar.php')?>
   <!-- Barra de menus fim-->
    
  <main>
    <div class="form-signin"><!-- formulario de login inicio-->
      <form method="POST" action="\uc3\lilacroller\functions/loginger.php">
        <img class="mb-3 lilacbird" src="https://www.birdorable.com/img/bird/th440/lilac-breasted-roller.png" alt="Lilac Roller" width="68" height="54">
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="login-input" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha-input" required>
          <label for="floatingPassword">Senha</label>
        </div>

        <div class="checkbox mb-3">
          <label>
          <input type="checkbox" value="remember-me"> Permanecer conectado
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        <a href="cadastrar.php"class="w-100 btn btn-lg btn-primary" id="cadastro" type="submit">Cadastre-se</a>
        <p class="mt-5 mb-3 text-muted copairite">© 2017–2021</p>
      </form>
    </div><!-- formulario de login final-->
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
 