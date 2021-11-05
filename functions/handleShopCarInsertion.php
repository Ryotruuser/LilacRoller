<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="GET"){
    $data = array (
        [$_GET['pid'], PDO::PARAM_INT],
        [$_SESSION['userEmail'],  PDO::PARAM_STR],
    
    );
    try {
        $shoppingcart = new ShoppingCartsController();
        /* header("Location: ../index.php");  */  
    }
    catch (PDOException $e) {
        echo($e);
    }

    if($_SESSION['userEmail']){
        $result = $shoppingcart->insertProduct($data);
        header("Location: ../shopCart.php");
    }
    else{
        header("Location: ../cadastrar.php");
    }
} else{
    echo "metodo get";
}





    
    
 
 
   







