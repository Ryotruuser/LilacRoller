<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    $root = dirname(dirname(__DIR__));
    $relativePath = '/uc3/lilacroller/img_catalogo';
    $fileName = $_FILES['imagem-input']['name'];
    $fileRelativePath = $relativePath;
    $imgDestination = $root . $relativePath . '\\'. $fileName;
    //move_uploaded_file($_FILES['imagem-input']['tmp_name'], $imgDestination);
    $resourcePath = $relativePath . "/{$fileName}";
    $data = array (
        [$_POST['nome-input'], PDO::PARAM_STR],
        [$_POST['preco-input'],  PDO::PARAM_STR],
        [$_POST['estoque-input'],  PDO::PARAM_INT],//mudança de str para int
        [$resourcePath,  PDO::PARAM_STR],
        [$_POST['categoria-input'],  PDO::PARAM_STR],
        [$_POST['descricao-input'],  PDO::PARAM_STR],
        [$_POST['fichaTecnica-input'],  PDO::PARAM_STR],
      
    );
    try {
        $users = new ProductsController();
        $data = $users->insertNewProduct($data);
        header("Location: ../index.php");   
    }
    catch (PDOException $e) {
        echo($e);
    }


} else{
    echo "metodo get";
}





    
    
 
 
   







