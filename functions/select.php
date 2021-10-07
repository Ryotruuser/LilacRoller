<?php
$dbh = new PDO('mysql:host=localhost;dbname=loja','root','');
//$sql = "INSERT INTO produtos (nome, categoria, preco, quantidade ) VALUES 
//('Ventilador Turbo','Eletrodomesticos',120,50)";
$sql = 'SELECT * FROM usuarios ';

$stmt = $dbh -> prepare($sql);
$stmt ->execute();


$stmt = $dbh -> prepare($sql);
$stmt ->execute();
$results  = $stmt -> fetchALL(PDO::FETCH_ASSOC);

foreach($results as $result) {
    $result['nome'].'' .PHP_EOL;
    $result['sobrenome'].PHP_EOL;
    $result['cpf'].PHP_EOL;
    $result['endereco'].PHP_EOL;
    $result['cidade'].PHP_EOL;
    $result['estado'].PHP_EOL;
    $result['cep'].PHP_EOL;
    $result['genero'].PHP_EOL;
    $result['email'].PHP_EOL;
    $result['telefone'].PHP_EOL;
    $result['password'].PHP_EOL;
    $result['nomesocial'].PHP_EOL;
    $result['tipopessoa'].PHP_EOL;}
   