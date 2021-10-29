<?php
class DbConfig{
    protected $dbh;

    protected function __construct(){
        $this->dbh = new PDO('mysql:host=localhost;dbname=loja','root','');
        $this->createUsersTable();
        $this->createProductsTable();
    }

    private function createUsersTable(){
        $this-> dbh->exec( 'CREATE TABLE IF NOT EXISTS usuarios(
            nome varchar(255),
            sobrenome varchar(50),
            cpf varchar(11),
            endereco varchar(50),
            cidade varchar(30),
            estado varchar(20),
            cep varchar(9),
            genero varchar(13),
            email varchar(20) PRIMARY KEY,
            telefone varchar(13),
            nomesocial varchar(255),
            password varchar(255),
            tipopessoa varchar(30)
        )');
    }


    private function createProductsTable() {
        $this->dbh->exec('CREATE TABLE IF NOT EXISTS produtos (
            id INTEGER PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(255), 
            valor DECIMAL(10, 2),
            quantidade INTEGER UNSIGNED,
            categoria VARCHAR(50),  /*mudança de 255 para 50*/
            descricao VARCHAR(55),
            imagem VARCHAR(255),
            fichatecnica VARCHAR(65535)
        )');
    }


















}