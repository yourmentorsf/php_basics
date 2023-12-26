<?php

require_once '../pdo.php';
if(isset($_POST['id'])){
  $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
  $stmt->execute(['id' => $_POST['id']]);
  $pdo = null;
  header('Location: /crud/get.php');
  exit();
}