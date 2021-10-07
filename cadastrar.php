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
    <a style="color: black;" href="index.html"
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
    <a class="user_acc" href="paginadelogin.php">Minha Conta</a>
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
        <form class="row g-1" id="former" method="POST" action="\uc3\lilacroller\functions/reglog.php">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="name" class="form-control" id="inputEmail4" name="nome-input" required>
        </div>

        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="inputPassword4" name="sobrenome-input" required>
        </div>

        <div class="col-4">
          <label for="inputAddress" class="form-label">Numero CPF:</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="000.000.000-00" name="cpf-input" required>
        </div>
        <div class="col-4">
          <label for="inputAddress2" class="form-label">Endereço:</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Rua ,Avenida ,Travessa." name="endereco-input" required>
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCity" name="cidade-input" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Estado</label >
          <select id="inputState" class="form-select" name="estado-input" required>
            <option selected>Escolha...</option>
            <option>Acre (AC)</option>
            <option>Alagoas (AL)</option>
            <option>Amapá (AP)</option>
            <option>Amazonas (AM)</option>
            <option>Bahia (BA)</option>
            <option>Ceará (CE)</option>
            <option>Distrito Federal (DF)</option>
            <option>Espírito Santo (ES) </option>
            <option>Goiás (GO) </option>
            <option>Maranhão (MA) </option>
            <option>Mato Grosso (MT) </option>
            <option>Mato Grosso do Sul (MS) </option>
            <option>Minas Gerais (MG) </option>
            <option>Pará (PA) </option>
            <option>Paraíba (PB) </option>
            <option>Paraná (PR) </option>
            <option>Pernambuco (PE)</option>
            <option>Piauí (PI) </option>
            <option>Rio de Janeiro (RJ) </option>
            <option>Rio Grande do Norte (RN)</option>
            <option>Rio Grande do Sul (RS)</option>
            <option>Rondônia (RO)</option>
            <option>Roraima (RR)</option>
            <option>Santa Catarina (SC)</option>
            <option>São Paulo (SP)</option>
            <option>Sergipe (SE)</option>
            <option>Tocantins (TO)</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >CEP</label>
          <input type="text" class="form-control" id="inputZip" placeholder="00000-000" name="cep-input" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Como você se identifica</label>
          <select id="inputState" class="form-select" name="genero-input">
            <option selected>Escolha..</option>
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Não-Binario</option>
            <option>Prefere não dizer</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label" >E-mail</label>
          <input type="email" class="form-control" id="inputZip" placeholder="Tecnologia@bol.com" name="email-input" required>
        </div>

        <div class="col-md-4">
          <label for="inputZip" class="form-label" >Telefone para contato:</label>
          <input type="text" class="form-control" id="inputZip" name="telefone-input" required>
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label" >Nome Social</label>
          <input type="text" class="form-control" id="inputZip" name="social-input">
        </div>

        <div class="col-md-3">
          <label for="inputZip" class="form-label" >Senha:</label>
          <input type="password" class="form-control" id="inputZip" placeholder="*********" name="senha-input" required>
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">Você e:</label>
          <select id="inputState" class="form-select" name="tipo-input">
            <option selected>Escolha..</option>
            <option>Pessoa Fisica</option>
            <option>Pessoa Juridica</option>]
            <option>Autons</option>
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
          <button style="border-radius: 20px; background: green;" class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
          <button style="border-radius: 20px; margin-top: 2vh;" class="w-100 btn btn-lg btn-primary"  type="get" onclick="redirect()" value="Redirect">Ja possui conta? Faça o login agora.</button>
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
