<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="GET"){
    $root = dirname(dirname(__DIR__));
    $relativePath = '/uc3/lilacroller/img_catalogo';
    $fileName = $_FILES['imagem-input']['name'];
    $fileRelativePath = $relativePath;
    $imgDestination = $root . $relativePath . '\\'. $fileName;
    $resourcePath = $relativePath . "/{$fileName}";
    /* move_uploaded_file($_FILES['imagem-input']['tmp_name'], $resourcePath); */
    $data = array (
        [$resourcePath,  PDO::PARAM_STR],
    );
    try {
        $users = new ProductsController();
        $data = $users->editImage($data,$_GET['pid']);
        header("Location: ../updateProduct.php");   
    }
    catch (PDOException $e) {
        echo($e);
    }


} else{
    echo "metodo get";
}





    
    
 
 
   







