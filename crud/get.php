<?php

require_once '../pdo.php';

$stmt = $pdo->query('SELECT id, username FROM users');
$users = $stmt->fetchAll();
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
  </head>

  <body>
    <?php
  foreach ($users as $user) {
    echo '<p>' .
    '<a href="/crud/show.php?id=' . $user['id'] . '">' .
    $user['username'] .
    '</a>' .
    '</p>';
  }
  ?>
  </body>

</html>