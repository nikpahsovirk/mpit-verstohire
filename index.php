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
  <link rel="stylesheet" type="text/css"  href="main.css">
</head>
<body>

<!-- ======= Header ======= -->
      <div class="container header ">
        <a href="index.php" class="logo me-auto"><img src="logo.png" alt="logo" class="img-fluid"></a>
        <a href="registration.php" id="reg">Авторизоваться</a>
      </div><!-- End Header -->
    
  <div class="intro">  
    <div class="container">
      <br><br><br><br><br><br><br><br>
      <h2 style="color:white;">Не нравится своя работа?<br><br><h3 style="color:white;">Поступил на неинтересный факультет?</h3></h2><br>
      <div id="d"><h4 style="color:white; text-align:left;">Предлагаем тебе пройти профориентационный тест, после которого ты узнаешь наиболее подходящую к тебе профессию.</h4></div><br><br>

      <?php if ($_COOKIE['user']==''): ?>
        <div>
          <a   id="button-test" href="registration.php" onclick="myFunc()">Пройти тест</a>
        </div>
      <?php else: ?>
        <div>
          <a id="button-test" href="test.php">Пройти тест</a>
        </div>
      <?php endif; ?>

    </div>
  </div>

    <div class="info">
      <h2 style="color:#FFA501; padding-left:1000px; padding-top:550px;">Определился с профессией?<br>&nbsp&nbsp&nbsp&nbspТогда нажми на кнопку!</h2>

      <?php if ($_COOKIE['user']==''): ?>
        <div class="vakansii" >
          <a href="registration.php" id="reg"  onclick="alertFunc()" >Вакансии</a>
        </div>

      <?php else: ?>
        <div class="vakansii" >
          <a href="vakansii.php"  id="reg">Вакансии</a>
        </div>
      <?php endif; ?>

    </div>

  <footer class="container">
    <h3 style="color:#FFA501;">MPIT 2021</h3>
  </footer>

 <script>
function myFunc(){
  alert("Зарегистрируйтесь чтобы пройти тест")
}

function alertFunc(){
  alert("Зарегистрируйтесь чтобы получить доступ")
}
 </script>
 
  <script src="main.js"></script>
</body>
</html>
