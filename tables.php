<?php

include_once 'pdo.php';

$statements = [
  "CREATE TABLE IF NOT EXISTS `app_db`.`test` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(64) NOT NULL , 
    `age` TINYINT NOT NULL DEFAULT '18' , 
    `password` VARCHAR(128) NOT NULL , 
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `role` VARCHAR(32) NOT NULL DEFAULT 'user' ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;",

    "",
    "",
    "",
    "",

];


foreach($statements as $statement){
  $pdo->exec($statement);
}