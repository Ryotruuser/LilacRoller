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
  
  <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
  <link rel="icon" type="image/x-icon" href="pics/lilac-icon.png">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />



  <title>Lilac - Cadastro</title>
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
      if (session_id()):?>
         <div class="dropdown">
            <button class="dropbtn user_acc">Olá, <?php echo $_SESSION['userEmail'] ?></button>
            <div class="dropdown-content">
              <a href="myAccount.php">Minha Conta</a>
              <a href="#">Sair</a>
            </div>
            </div>
         
        <?php
       else:?>
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
  <main>
      <div id="caixa">
        <img style="display:flex; flex-wrap: wrap; "class="mb-4 rgbi" id ="lilacbird"src="https://www.birdorable.com/img/bird/th440/lilac-breasted-roller.png" alt="Lilac Roller" width="68" height="54">
        <br>
        <h1>Bem Vindo a Lilac Roller</h1>
        <div></div>
        <h3>Complete o cadastro para acessar promoções exclusivas.</h3>
        <form class="row g-1" id="former" method="POST" action="" autocomplete="on">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="name" class="form-control" id="inputEmail4" name="nome-input" required value="<?php echo $result['nome'] ?>">
        </div>

        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="inputPassword4" name="sobrenome-input" required value="<?php echo $result['sobrenome'] ?>">
        </div>

        <div class="col-4">
          <label for="inputAddress" class="form-label">Numero CPF:</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="000.000.000-00" name="cpf-input" required value="<?php echo $result['cpf'] ?>">
        </div>
        <div class="col-4">
          <label for="inputAddress2" class="form-label">Endereço:</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Rua ,Avenida ,Travessa." name="endereco-input" required value="<?php echo $result['endereco'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCity" name="cidade-input" required value="<?php echo $result['cidade'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Estado</label >
          <select id="inputState" class="form-select" name="estado-input" required>
            <option selected>Escolha...</option>
            <option value="Acre (AC)" <?php echo $result['estado']==='Acre (AC)' ? 'selected':'' ?>> Acre (AC)</option>
            <option value="Alagoas (AL)" <?php echo $result['estado']==='Alagoas (AL)' ? 'selected':'' ?>>Alagoas (AL)</option>
            <option value="Amapá (AP)" <?php echo $result['estado']==='Amapá (AP)' ? 'selected':'' ?>>Amapá (AP)</option>
            <option value="Amazonas (AM)" <?php echo $result['estado']==='Amazonas (AM)' ? 'selected':'' ?>>Amazonas (AM)</option>
            <option value="Bahia (BA)" <?php echo $result['estado']==='Bahia (BA)' ? 'selected':'' ?>>Bahia (BA)</option>
            <option value="Ceará (CE)" <?php echo $result['estado']==='Ceará (CE)' ? 'selected':'' ?>>Ceará (CE)</option>
            <option value="Distrito Federal (DF)" <?php echo $result['estado']==='Distrito Federal (DF)' ? 'selected':'' ?>>Distrito Federal (DF)</option>
            <option value="Espírito Santo (ES)" <?php echo $result['estado']==='Espírito Santo (ES)' ? 'selected':'' ?>>Espírito Santo (ES) </option>
            <option value="Goiás (GO)" <?php echo $result['estado']==='Goiás (GO)' ? 'selected':'' ?>>Goiás (GO) </option>
            <option value="Maranhão (MA)" <?php echo $result['estado']==='Maranhão (MA)' ? 'selected':'' ?>>Maranhão (MA) </option>
            <option value="Mato Grosso (MT)" <?php echo $result['estado']==='Mato Grosso (MT)' ? 'selected':'' ?>>Mato Grosso (MT) </option>
            <option value="Mato Grosso do Sul (MS)" <?php echo $result['estado']==='Mato Grosso do Sul (MS)' ? 'selected':'' ?>>Mato Grosso do Sul (MS) </option>
            <option value="Minas Gerais (MG)" <?php echo $result['estado']==='Minas Gerais (MG)' ? 'selected':'' ?>>Minas Gerais (MG) </option>
            <option value="Pará (PA)" <?php echo $result['estado']==='Pará (PA)' ? 'selected':'' ?>>Pará (PA) </option>
            <option value="Paraíba (PB)" <?php echo $result['estado']==='Paraíba (PB)' ? 'selected':'' ?>>Paraíba (PB) </option>
            <option value="Paraná (PR)" <?php echo $result['estado']==='Paraná (PR)' ? 'selected':'' ?>>Paraná (PR) </option>
            <option value="Pernambuco (PE)" <?php echo $result['estado']==='Pernambuco (PE)' ? 'selected':'' ?>>Pernambuco (PE)</option>
            <option value="Piauí (PI)" <?php echo $result['estado']==='Piauí (PI)' ? 'selected':'' ?>>Piauí (PI) </option>
            <option value="Rio de Janeiro (RJ)" <?php echo $result['estado']==='Rio de Janeiro (RJ)eará' ? 'selected':'' ?>>Rio de Janeiro (RJ) </option>
            <option value="Rio Grande do Norte (RN)" <?php echo $result['estado']==='Rio Grande do Norte (RN)' ? 'selected':'' ?>>Rio Grande do Norte (RN)</option>
            <option value="Rio Grande do Sul (RS)" <?php echo $result['estado']==='Rio Grande do Sul (RS)' ? 'selected':'' ?>>Rio Grande do Sul (RS)</option>
            <option value="Rondônia (RO)" <?php echo $result['estado']==='Rondônia (RO)' ? 'selected':'' ?>>Rondônia (RO)</option>
            <option value="Roraima (RR)" <?php echo $result['estado']==='Roraima (RR)' ? 'selected':'' ?>>Roraima (RR)</option>
            <option value="Santa Catarina (SC)" <?php echo $result['estado']==='Santa Catarina (SC)' ? 'selected':'' ?>>Santa Catarina (SC)</option>
            <option value="São Paulo (SP)" <?php echo $result['estado']==='São Paulo (SP)' ? 'selected':'' ?>>São Paulo (SP)</option>
            <option value="Sergipe (SE)" <?php echo $result['estado']==='Sergipe (SE)' ? 'selected':'' ?>>Sergipe (SE)</option>
            <option value="Tocantins (TO)" <?php echo $result['estado']==='Ceará' ? 'selected':'' ?>>Tocantins (TO)</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >CEP</label>
          <input type="text" class="form-control" id="inputZip" placeholder="00000-000" name="cep-input" required value="<?php echo $result['cep'] ?>">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Como você se identifica</label>
          <select id="inputState" class="form-select" name="genero-input">
            <option selected>Escolha..</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Não-Binario</option>
            <option>Prefere não dizer</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >E-mail</label>
          <input type="email" class="form-control" id="inputZip" placeholder="Tecnologia@bol.com" name="email-input" required value="<?php echo $result['email'] ?>">
        </div>

        <div class="col-md-4">
          <label for="inputZip" class="form-label" >Telefone para contato:</label>
          <input type="text" class="form-control" id="inputZip" name="telefone-input" required value="<?php echo $result['telefone'] ?>">
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label" >Nome Social</label>
          <input type="text" class="form-control" id="inputZip" name="social-input" value="<?php echo $result['nomesocial'] ?>">
        </div>

        <div class="col-md-3">
          <label for="inputZip" class="form-label" >Nova Senha</label>
          <input type="password" class="form-control" id="inputZip" placeholder="*********" name="senha-input" required>
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">Você e:</label>
          <select id="inputState" class="form-select" name="tipo-input">
            <option selected>Escolha..</option>
            <option value="Pessoa Fisica" <?php echo $result['tipopessoa']==='Pessoa Fisica' ? 'selected':'' ?>>Pessoa Fisica</option>
            <option value="Pessoa Juridi" <?php echo $result['tipopessoa']==='Pessoa Juridi' ? 'selected':'' ?>>Pessoa Juridica</option>]
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
