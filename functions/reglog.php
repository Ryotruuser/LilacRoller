<?php
require_once('classesAutoload.php');
require_once('autoload.php');
$monthInSeconds = 30*24*60*60;
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    $dbh = new PDO('mysql:host=localhost;dbname=loja','root','');
    $password = password_hash($_POST['senha-input'], PASSWORD_DEFAULT);
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
    $email = $_POST['email-input']; 
    $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, endereco, cidade ,estado, cep, genero, email,
    telefone, nomesocial, password, tipopessoa ) VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $dbh->prepare($sql);
    foreach($data as $key => $value){
    $statement -> bindValue(($key +1), $value[0], $value[1]);}
    var_dump($statement->execute());
    //$statement = $dbh->prepare($sql);
    //$statement->execute($data);
    echo "cadastro concluido";
    
    

    try {
        $users = new UserConfig();
        $result = $users->insertNewUser($data, $email);
    }
    catch (PDOException $e) {
        echo($e);
    }

    if ($users) {
        session_start();
        setcookie(
            name: session_name(), 
            value: session_id(), 
            domain: $_SERVER['SERVER_NAME'], 
            path: '/',
                expires_or_options: time() + $monthInSeconds
            );
            $_SESSION['userEmail'] = $_POST['email-input'];
            $_SESSION['nome'] = $_POST['nome-input'];
            header("Location: ../index.php");
    }
    else {
        echo 'fui executado';
    }
} else{
    echo "metodo get";
}





    
    
 
 
   







