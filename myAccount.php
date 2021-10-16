<?php
require_once('functions/startSession.php');
require_once('functions/autoload.php');
require_once('functions/setActiveLinkClass.php');
if (!session_id()) {
  header('Location: index.php');
}

$user = new UserConfig();
$data = $user->getAllUserData($_SESSION['userEmail']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />   
  
  <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />



  <title>Lilac - Cadastro</title>
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
          <a class="user_acc" href="paginadelogin.php">Login</a>
          <a class="user_acc" href="#"> Carrinho</a>
          <a class="user_acc" href="#"> F.A.Q</a>
        </div>
      
      
  <?php
      endif;?>    
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
  <main>
      <div id="caixa">
        <img style="display:flex; flex-wrap: wrap; "class="mb-4 rgbi" id ="lilacbird"src="https://www.birdorable.com/img/bird/th440/lilac-breasted-roller.png" alt="Lilac Roller" width="68" height="54">
        <br>
        <h1>Bem Vindo a Lilac Roller</h1>
        <div></div>
        <h3>Complete o cadastro para acessar promoções exclusivas.</h3>
        <form class="row g-1" id="former" method="POST" action="functions/handleUserUpdate.php" autocomplete="on">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="name" class="form-control" id="inputEmail4" name="nome-input"  value="<?php echo $data['nome'] ?>">
        </div>

        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="inputPassword4" name="sobrenome-input"  value="<?php echo $data['sobrenome'] ?>">
        </div>

        <div class="col-4">
          <label for="inputAddress" class="form-label">Numero CPF:</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="000.000.000-00" name="cpf-input"  value="<?php echo $data['cpf'] ?>">
        </div>
        <div class="col-4">
          <label for="inputAddress2" class="form-label">Endereço:</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Rua ,Avenida ,Travessa." name="endereco-input"  value="<?php echo $data['endereco'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCity" name="cidade-input"  value="<?php echo $data['cidade'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Estado</label >
          <select id="inputState" class="form-select" name="estado-input" >
            <option selected>Escolha...</option>
            <option value="Acre (AC)" <?php echo $data['estado']==='Acre (AC)' ? 'selected':'' ?>> Acre (AC)</option>
            <option value="Alagoas (AL)" <?php echo $data['estado']==='Alagoas (AL)' ? 'selected':'' ?>>Alagoas (AL)</option>
            <option value="Amapá (AP)" <?php echo $data['estado']==='Amapá (AP)' ? 'selected':'' ?>>Amapá (AP)</option>
            <option value="Amazonas (AM)" <?php echo $data['estado']==='Amazonas (AM)' ? 'selected':'' ?>>Amazonas (AM)</option>
            <option value="Bahia (BA)" <?php echo $data['estado']==='Bahia (BA)' ? 'selected':'' ?>>Bahia (BA)</option>
            <option value="Ceará (CE)" <?php echo $data['estado']==='Ceará (CE)' ? 'selected':'' ?>>Ceará (CE)</option>
            <option value="Distrito Federal (DF)" <?php echo $data['estado']==='Distrito Federal (DF)' ? 'selected':'' ?>>Distrito Federal (DF)</option>
            <option value="Espírito Santo (ES)" <?php echo $data['estado']==='Espírito Santo (ES)' ? 'selected':'' ?>>Espírito Santo (ES) </option>
            <option value="Goiás (GO)" <?php echo $data['estado']==='Goiás (GO)' ? 'selected':'' ?>>Goiás (GO) </option>
            <option value="Maranhão (MA)" <?php echo $data['estado']==='Maranhão (MA)' ? 'selected':'' ?>>Maranhão (MA) </option>
            <option value="Mato Grosso (MT)" <?php echo $data['estado']==='Mato Grosso (MT)' ? 'selected':'' ?>>Mato Grosso (MT) </option>
            <option value="Mato Grosso do Sul (MS)" <?php echo $data['estado']==='Mato Grosso do Sul (MS)' ? 'selected':'' ?>>Mato Grosso do Sul (MS) </option>
            <option value="Minas Gerais (MG)" <?php echo $data['estado']==='Minas Gerais (MG)' ? 'selected':'' ?>>Minas Gerais (MG) </option>
            <option value="Pará (PA)" <?php echo $data['estado']==='Pará (PA)' ? 'selected':'' ?>>Pará (PA) </option>
            <option value="Paraíba (PB)" <?php echo $data['estado']==='Paraíba (PB)' ? 'selected':'' ?>>Paraíba (PB) </option>
            <option value="Paraná (PR)" <?php echo $data['estado']==='Paraná (PR)' ? 'selected':'' ?>>Paraná (PR) </option>
            <option value="Pernambuco (PE)" <?php echo $data['estado']==='Pernambuco (PE)' ? 'selected':'' ?>>Pernambuco (PE)</option>
            <option value="Piauí (PI)" <?php echo $data['estado']==='Piauí (PI)' ? 'selected':'' ?>>Piauí (PI) </option>
            <option value="Rio de Janeiro (RJ)" <?php echo $data['estado']==='Rio de Janeiro (RJ)eará' ? 'selected':'' ?>>Rio de Janeiro (RJ) </option>
            <option value="Rio Grande do Norte (RN)" <?php echo $data['estado']==='Rio Grande do Norte (RN)' ? 'selected':'' ?>>Rio Grande do Norte (RN)</option>
            <option value="Rio Grande do Sul (RS)" <?php echo $data['estado']==='Rio Grande do Sul (RS)' ? 'selected':'' ?>>Rio Grande do Sul (RS)</option>
            <option value="Rondônia (RO)" <?php echo $data['estado']==='Rondônia (RO)' ? 'selected':'' ?>>Rondônia (RO)</option>
            <option value="Roraima (RR)" <?php echo $data['estado']==='Roraima (RR)' ? 'selected':'' ?>>Roraima (RR)</option>
            <option value="Santa Catarina (SC)" <?php echo $data['estado']==='Santa Catarina (SC)' ? 'selected':'' ?>>Santa Catarina (SC)</option>
            <option value="São Paulo (SP)" <?php echo $data['estado']==='São Paulo (SP)' ? 'selected':'' ?>>São Paulo (SP)</option>
            <option value="Sergipe (SE)" <?php echo $data['estado']==='Sergipe (SE)' ? 'selected':'' ?>>Sergipe (SE)</option>
            <option value="Tocantins (TO)" <?php echo $data['estado']==='Ceará' ? 'selected':'' ?>>Tocantins (TO)</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >CEP</label>
          <input type="text" class="form-control" id="inputZip" placeholder="00000-000" name="cep-input"  value="<?php echo $data['cep'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Como você se identifica</label>
          <select id="inputState" class="form-select" name="genero-input">
            <option selected>Escolha..</option>
            <option <?php echo $data['genero']==='Masculino' ? 'selected':'' ?>>Masculino</option>
            <option <?php echo $data['genero']==='Feminino' ? 'selected':'' ?>>Feminino</option>
            <option <?php echo $data['genero']==='Não-Binario' ? 'selected':'' ?>>Não-Binario</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >E-mail</label>
          <input type="email" class="form-control" id="inputZip" placeholder="Tecnologia@bol.com" name="email-input"  value="<?php echo $data['email'] ?>">
        </div>

        <div class="col-md-4">
          <label for="inputZip" class="form-label" >Telefone para contato:</label>
          <input type="text" class="form-control" id="inputZip" name="telefone-input"  value="<?php echo $data['telefone'] ?>">
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label" >Nome Social</label>
          <input type="text" class="form-control" id="inputZip" name="social-input" value="<?php echo $data['nomesocial'] ?>">
        </div>

        <div class="col-md-3">
          <label for="inputZip" class="form-label" >Nova Senha</label>
          <input type="password" class="form-control" id="inputZip" placeholder="*********" name="senha-input" >
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">Você e:</label>
          <select id="inputState" class="form-select" name="tipo-input">
            <option selected>Escolha..</option>
            <option value="Pessoa Fisica" <?php echo $data['tipopessoa']==='Pessoa Fisica' ? 'selected':'' ?>>Pessoa Fisica</option>
            <option value="Pessoa Juridi" <?php echo $data['tipopessoa']==='Pessoa Juridi' ? 'selected':'' ?>>Pessoa Juridica</option>]
          </select>
        </div>


        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Desejo receber promoções no meu email.
            </label>
          </div>
        </div>
        <div class="col-14">
          <button style="border-radius: 20px; background: green;" class="w-100 btn btn-lg btn-primary" type="submit">Salvar</button>
          
        </div>
      </div>
    </form>

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
  <script type="text/javascript">
    <!--
    function redirect() {
      window.location = "paginadelogin.php"

    }

    function redirect2() {
      document.getElementById("cadastro").innerHTML = "Cadastrado";

    }
    //-->
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
