<?php

require_once 'rb.php';




$path = dirname(__DIR__ ) . DIRECTORY_SEPARATOR . 'ORM' . DIRECTORY_SEPARATOR;
// var_dump($path);

// exit();



$host = '0.0.0.0'; // '127.0.0.1' || '0.0.0.0'
$user = 'user';
$pass = 'user';
$db = 'app_db';
$port = 6033;
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try{
  // R::setup("sqlite:" . $path . "dbfile.db");
  R::setup("mysql:host=$host;port=$port;dbname=$db;charset=$charset", $user, $pass);
} catch(PDOException $e){
  echo $e->getmessage();
}


class DB{
  public static function getAll(string $table){
    $data = R::findAll($table);
    return $data;
  }
  public static function getById(string $table, string $id){
    $data = R::findOne($table, 'id = ? ', [ $id ] );
    return $data;
  }

  public static function getByProp(string $table, string $prop, string $value)
  {    
    $data = R::findOne($table, "$prop = ?", [$value ]);
    return $data;
  }

  public static function create(string $table, array $values)
  {
    $bean = R::dispense( $table );
    foreach($values as $key=>$value){
      if($key === 'password'){
        $value = password_hash($value,  PASSWORD_DEFAULT);
      }
      $bean->$key = $value;
    }
    $id = R::store( $bean );
    return $id;
  }

  public static function update(string $table, array $values)
  {    
    $bean = R::load($table, $values['id']);
    foreach($values as $key=>$value){
      if($key === 'id'){
        continue;
      }
      if($key === 'password'){
        $value = password_hash($value,  PASSWORD_DEFAULT);
      }
      $bean->$key = $value;
    }
    $id = R::store( $bean );
    return $id;
  }

  public static function delete(string $table, string $id)
  {
    $bean = R::load($table, $id);
    R::trash($bean);
  }

}