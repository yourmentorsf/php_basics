<?php

$host = '0.0.0.0'; // '127.0.0.1' || '0.0.0.0'
$user = 'user';
$pass = 'user';
$db = 'app_db';
$port = 6033;
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try{
  $pdo = new PDO($dsn, $user, $pass, $options);
}

catch (\PDOException $e){
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}