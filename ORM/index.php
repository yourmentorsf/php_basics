<?php
session_start();
require_once 'db.php';

echo 'SESSION <br>';
var_dump($_SESSION);
echo '<br />';
echo '<hr>';
echo '<br />';

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>


    <h1>
      ORM Index Page
    </h1>
    <nav class="nav">
      <ul class="nav__list">
        <?php if($_SESSION["auth"]): ?>
        <li class="nav__item"><a href="/crud/get.php" class="nav__link">All Users</a></li>
        <li class="nav__item"><a href="/crud/create.php" class="nav__link">Create</a></li>
        <li class="nav__item"><a href="/logout.php" class="nav__link">Logout</a></li>
        <?php else: ?>
        <li class="nav__item"><a href="/reg.php" class="nav__link">Register</a></li>
        <li class="nav__item"><a href="/login.php" class="nav__link">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>


    <p>
      For All users
    </p>
    <?php if($_SESSION['auth']): ?>
    <p>
      <b>
        For Authorized users only
      </b>
    </p>
    <?php endif; ?>
  </body>

</html>