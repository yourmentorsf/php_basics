<?php

require_once '../db.php';
// echo 'Get request <br>';
// var_dump($_GET);

// echo '<br />';
// echo '<hr>';
// echo '<br />';

if(isset($_GET['id'])){

$user = DB::getById('users', $_GET['id']);


// var_dump($user);
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
  </head>

  <body>
    <table class="table">
      <tr class="table__row">
        <td class="table__cell">Username</td>
        <td class="table__cell">Age</td>
        <td class="table__cell">Password</td>
      </tr>
      <tr class="table__row">
        <td class="table__cell"><?= $user['username'];?></td>
        <td class="table__cell"><?= $user['age'];?></td>
        <td class="table__cell"><?= $user['password'];?></td>
      </tr>
    </table>

    <a href="/crud/update.php?id=<?= $user['id'];?>">Update User</a>
    <form action="/crud/delete.php" method="post" class="form">
      <input type="hidden" name="id" value="<?= $user['id'];?>">
      <button type="submit">Delete User</button>
    </form>

  </body>

</html>