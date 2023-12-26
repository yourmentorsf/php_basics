<?php

require_once '../pdo.php';
if(isset($_GET['id'])){
  $stmt = $pdo->query('SELECT * FROM users WHERE id = ' . $_GET['id']);
  $user = $stmt->fetch();
}

if(!empty($_POST)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $age = $_POST['age'];

  $sql = "UPDATE users SET username = :username, age = :age, password = :password WHERE id = " . $_GET['id'] . "";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':username' => $username, 
    ':age' => $age, 
    ':password' => $password
  ]);
  $pdo = null;
  header('Location: /crud/get.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
  </head>

  <body>
    <form action="" method="post" class="form">
      <div class="form__field">
        <label for="username" class="form__label">Username</label>
        <input type="text" class="form__input" id="username" name="username" value="<?= $user['username'];?>">
      </div>
      <div class="form__field">
        <label for="age" class="form__label">Age</label>
        <input type="number" class="form__input" id="age" name="age" value="<?= $user['age'];?>">
      </div>
      <div class="form__field">
        <label for="password" class="form__label">password</label>
        <input type="password" class="form__input" id="password" name="password" value="<?= $user['password'];?>">
      </div>

      <button type="submit">Send</button>

    </form>
  </body>

</html>