<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="GET"){
    try {
        $products = new ProductsController();
        $result = $products->deleteProduct( $_GET['pid']);
        header("Location: ../updateProduct.php");  
    }
    catch (PDOException $e) {
        echo($e);
    }
} else{
    echo "metodo post";
}





    
    
 
 
   







