<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="GET"){
    try {
        $shoppingcart = new ShoppingCartsController();
        $result = $shoppingcart->dropCart($data);
        /* header("Location: ../index.php");  */  
    }
    catch (PDOException $e) {
        echo($e);
    }

    if($result){
        header("Location: ../index.php");
    }
    else{
        /* header("Location: ../shopCart.php"); */
    }
} else{
    echo "metodo get";
}





    
    
 
 
   







