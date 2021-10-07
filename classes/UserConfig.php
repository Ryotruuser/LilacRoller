<?php
require_once('../functions/classesAutoload.php');

class UserConfig extends DbConfig{

    public function __construct(){
        parent::__construct();
    }

    public function getAllUserData($email) {
        $sql = 'SELECT * FROM usuarios WHERE email=?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertNewUser($data, $email){
        if($this->getAllUserData($email)) {
            return false;
        }
        $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, endereco, cidade ,estado, cep, genero, email,
    telefone, nomesocial, password, tipopessoa ) VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $statement -> bindValue(($key +1), $value[0], $value[1]);}
        var_dump($statement->execute($data));
        return $stmt->execute();
    }
    public function validateUser($email, $password){
        $sql = "SELECT password FROM usuarios WHERE email = ?";
        $stmt = $this->dbh->prepare($sql);
        $stmt -> bindValue(1, $email, PDO::PARAM_STR);
        $stmt -> execute(); // transação com banco de dados ultimas 4 linhas
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $storedPassword = $data['password'];
        echo password_verify($password, $storedPassword) ?  $email : 'Usuario Incorreto';

    }
   
   /*  public function UpdateUserData($data, $email) {
        if(!$this->getAllUserData($email)) {
            return false;
        }
        $sql = 'UPDATE users SET name=?, surname=?, cpf=?, gender=?, email=?, password=?, cep=?, city=?, address=?, houseNumber=?, neighborhood=? WHERE email=:email';
        $stmt = $this->dbh->prepare($sql);
        foreach($data as $key => $value) {
            $stmt->bindValue(($key+1), $value[0], $value[1]);
        }
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        return $stmt->execute();
    } */
};




