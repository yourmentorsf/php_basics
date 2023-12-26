<?php
session_start();

echo 'SESSION <br>';
var_dump($_SESSION);
echo '<br />';
echo '<hr>';
echo '<br />';


require_once 'db.php';

if(isset($_POST['username'])
  && isset($_POST['password'])
  ){

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $user = DB::getByProp('users', 'username', $username);
  if($user
  && password_verify($password, $user['password'])
  ){
    $_SESSION['username'] = $username;
    $_SESSION['auth'] = true;
    setcookie("user", $user['username'], time() + 60*60 , '/');
    header("Location: /");

    exit();
  }
  else {
    echo 'Wrong user credentials';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <form method="post" class="form">
      <div class="form__field">
        <label for="username" class="form__label">Username</label>
        <input type="text" class="form__input" id="username" name="username">
      </div>

      <div class="form__field">
        <label for="password" class="form__label">password</label>
        <input type="password" class="form__input" id="password" name="password">
      </div>

      <button type="submit">Send</button>

    </form>
  </body>

</html>