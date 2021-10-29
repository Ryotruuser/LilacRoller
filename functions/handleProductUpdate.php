<?php
require_once('classesAutoload.php');
require_once('startSession.php');
require_once('logError.php');
if ($_SERVER ['REQUEST_METHOD'] ==="POST"){
    $fichatecnica = str_replace("\n",'<br>',$_POST['fichaTecnica-input']);
    if ($_FILES['imagem-input']['name']){
        $root = dirname(dirname(__DIR__));
        $relativePath = '/uc3/lilacroller/img_catalogo';
        $fileName = $_FILES['imagem-input']['name'];
        $fileRelativePath = $relativePath;
        $imgDestination = $root . $relativePath . '\\'. $fileName;
        $resourcePath = $relativePath . "/{$fileName}";
        /* move_uploaded_file($_FILES['imagem-input']['tmp_name'], $resourcePath); */
    }
    else{
        $resourcePath = $resourcePath;
    }
    $data = array (
        [$_POST['nome-input'], PDO::PARAM_STR],
        [$_POST['preco-input'],  PDO::PARAM_STR],
        [$_POST['estoque-input'],  PDO::PARAM_INT],//mudança de str para int
        [$resourcePath,  PDO::PARAM_STR],
        [$_POST['categoria-input'],  PDO::PARAM_STR],
        [$_POST['descricao-input'],  PDO::PARAM_STR],
        [$fichatecnica,  PDO::PARAM_STR],

    );

    try{
        $products = new ProductsController();
        $result = $products->updateProductsData($data,$_GET['pid']);
        header("Location: ../updateProduct.php");
    }
    catch(PDOException $e){
        logError($e);
        /* header("Location: ../index.php"); */
        
    }
}
  else{
    echo "metodo get";
}





    
    
 
 
   







