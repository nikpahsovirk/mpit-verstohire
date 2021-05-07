<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

if (mb_strlen($login)<2 || mb_strlen($login)>90)
  {
  echo "Недопустимая длина логина";
  exit;
  } else if (mb_strlen($pass)<2 || mb_strlen($pass)>10)
    {
    echo "Недопустимая длина пароля(от 2 до 10 символов)";
    exit;
    }

$mysql = new mysqli('localhost', 'root', 'root', 'register-bg');
$mysql->query("INSERT INTO `users` ( `login`, `pass`) VALUES ('$login', '$pass')") ;

$mysql->close();
header('location: /' );
 ?>
