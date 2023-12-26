<?php

require_once '../db.php';

echo 'Get request <br>';
var_dump($_GET);

echo '<br />';
echo '<hr>';
echo '<br />';

echo 'Post request <br>';
var_dump($_POST);
echo '<br />';
echo '<hr>';
echo '<br />';


if(!empty($_POST)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $age = $_POST['age'];

  $id = DB::create('users', [
    'username' => $username,
    'password' => $password,
    'age' => $age
  ]);

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
  </head>

  <body>
    <form method="post" class="form">
      <div class="form__field">
        <label for="username" class="form__label">Username</label>
        <input type="text" class="form__input" id="username" name="username">
      </div>
      <div class="form__field">
        <label for="age" class="form__label">Age</label>
        <input type="number" class="form__input" id="age" name="age">
      </div>
      <div class="form__field">
        <label for="password" class="form__label">password</label>
        <input type="password" class="form__input" id="password" name="password">
      </div>

      <button type="submit">Send</button>

    </form>
  </body>

</html>