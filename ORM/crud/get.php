<?php

require_once '../db.php';

$users = DB::getAll('users');

// var_dump($users);
// exit();

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
  </head>

  <body>
    <?php foreach ($users as $user): ?>
    <p>
      <a href="/crud/show.php?id=<?= $user['id']; ?>">
        <?= $user['username']; ?>
      </a>
    </p>
    <?php endforeach; ?>
  </body>

</html>