<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    try{
        $users = new UserConfig();
        $userpassword = $users->getAllUserData($_SESSION['userEmail'])['password'];
    }
    catch(PDOException $e){
        logError($e);
    }

    $password = $_POST['senha-input'] ? password_hash($_POST['senha-input'], PASSWORD_DEFAULT) : $userpassword;
    $data = array (
        [$_POST['nome-input'], PDO::PARAM_STR],
        [$_POST['sobrenome-input'],  PDO::PARAM_STR],
        [$_POST['cpf-input'],  PDO::PARAM_STR],
        [$_POST['endereco-input'],  PDO::PARAM_STR],
        [$_POST['cidade-input'],  PDO::PARAM_STR],
        [$_POST['estado-input'],  PDO::PARAM_STR],
        [$_POST['cep-input'],  PDO::PARAM_STR],
        [$_POST['genero-input'],  PDO::PARAM_STR],
        [$_POST['email-input'],  PDO::PARAM_STR],
        [$_POST['telefone-input'],  PDO::PARAM_STR],
        [$_POST['social-input'],  PDO::PARAM_STR],
        [$password, PDO::PARAM_STR],
        [$_POST['tipo-input'] ,  PDO::PARAM_STR]

    );

    try{
        $result = $users->UpdateUserData($data,$_SESSION['userEmail']);
        $_SESSION['userEmail'] = $_POST['email-input'];
        $_SESSION['userFullName'] = ucwords($_POST['nome-input']) . ' ' . ucwords($_POST['sobrenome-input']);
        header("Location: ../myAccount.php");
    }
    catch(PDOException $e){
        logError($e);
        header("Location: ../index.php");
        
    }
}
  else{
    echo "metodo get";
}





    
    
 
 
   







