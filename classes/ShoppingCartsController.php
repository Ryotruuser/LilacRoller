<?php
spl_autoload_register(function($className) {
    require_once(__DIR__ . "\\{$className}.php");
});

class ShoppingCartsController extends DbConfig{

    public function __construct(){
        parent::__construct();
    }

    public function getShoppingCart($email){
        $sql = 'SELECT produtos.nome, produtos.valor, produtos.imagem, produtos.quantidade, usuarios.endereco, usuarios.cidade, usuarios.cep FROM carrinho
        INNER JOIN produtos ON carrinho.product_id = produtos.id
        INNER JOIN usuarios ON carrinho.user_email = usuarios.email
        WHERE carrinho.user_email =:email';
        $stmt = $this->dbh->prepare($sql);
        $stmt -> bindValue(':email', $email, PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertProduct($data){
        $sql = 'INSERT INTO carrinho (product_id, user_email) VALUES (?,?)';
        $stmt = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $stmt -> bindValue(($key +1), $value[0], $value[1]);}
        return $stmt->execute();
    }

    public function dropCart($data){
        $sql = 'DELETE FROM carrinho';
        $stmt = $this->dbh->prepare($sql);
        return $stmt->execute();
    }
};


    