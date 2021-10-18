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
                <?php if  ($_SESSION['userStatus'] == 'admin'): ?>
                    <a href="#">Cadastrar novo usuario</a>
                    <a href="insertProduct.php">Cadastrar novo produto</a>
                    <a href="#">Editar usuario</a>
                    <a href="updateProduct.php">Editar produto</a>
                <?php elseif  ($_SESSION['userStatus'] == 'collab'): ?>
                    <a href="#">Cadastrar novo produto</a>
                    <a href="#">Editar produto</a>
                <?php endif; ?>
                <a href="functions/signout.php">Sair</a>
            </div>
            </div>  
        <a class="user_acc" href="#"> Carrinho</a>
        </div>
    <?php
        else:?>
        <div class="acc-text">
        <a class="user_acc" href="paginadelogin.php"> Minha Conta</a>
        <a class="user_acc" href="#"> Carrinho</a>
        </div>      
    <?php
        endif;?>    
</header><!--fim do header-->