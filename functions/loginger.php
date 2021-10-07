<?php
require_once('autoload.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    
    $email = $_POST['login-input'];
    $pass =  $_POST ['senha-input'];
    $filePath = __DIR__.'\\log.txt';
    try{
        $users = new UserConfig();
        $result = $users->validateUser($email, $pass);
    }
    catch(PDOException $e){
        logError($e);
        var_dump($e);
    }
}
else{
    echo 'Dançou banbino';
}




