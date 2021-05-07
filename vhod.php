<!doctype html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VERSTO</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css"  href="main.css">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="smth">
  <a href="index.php" class="logo me-auto"><img src="logo.png" alt="logo" class="img-fluid"></a>
  <a href="registration.php" style="margin-left:500px;"><img  class="img-size" src="user.png"></a>
</header><!-- End Header -->

<div class="img-vhod row">     
<?php
     if ($_COOKIE['user']==''):
?>
    <div class="col-sm" style=" padding-left:100px; padding-top:380px;">
        <a id="button-test" href="registration.php">Зарегистрироваться</a>
    </div>
      <div class="reg-wrapper col-sm">
          <h1 class="authText">Войти в аккаунт</h1><br>
            <form style="width:500px;" action="php/auth.php" method="post">
            <input type="text" class="form-control" name="login"  id="login" placeholder="Логин"><br>

            <input type="password" class="form-control" name="pass"  id="pass" placeholder="Пароль"><br>

            <button  type ="submit" >Авторизоваться</button><br>
            </form>

            <?php else: ?>
              <div style="padding-left:800px; padding-top:300px;">
                  <a href="php/exit.php" id="exit">Выйти из аккаунта</a>
              </div>
            <?php endif; ?>   
      </div>
</body>
</html>
