<?php

require_once '../db.php';
if(isset($_POST['id'])){
  // $stmt = $pdo->prepare('DELETE FROM users WHERE id = :id');
  // $stmt->execute(['id' => $_POST['id']]);
  // $pdo = null;
  DB::delete('users', $_POST['id'] );
  header('Location: /crud/get.php');
  exit();
}