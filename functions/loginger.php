<?php
require_once('autoload.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    
    $email = $_POST['login-input'];
    $pass =  $_POST ['senha-input'];
    $filePath = __DIR__.'\\log.txt';
    try{
        $users = new UserConfig();
        $data = $users->validateUser($email, $pass);
    }
    catch(PDOException $e){
        logError($e);
        var_dump($e);
    }
    if ($data) {
        session_start();
        setcookie(
            name: session_name(), 
            value: session_id(), 
            domain: $_SERVER['SERVER_NAME'], 
            path: '/',
            // expires_or_options: time() + $monthInSeconds // lifetime
        );
        $_SESSION['userEmail'] = $email;
        $_SESSION['userFullName'] = $data['userFullName'];
        header("Location: ../index.php");
    } 
    else {
        header("Location: /login.php?authError=true");
    }
}
else{
    echo 'Dançou banbino';
}




