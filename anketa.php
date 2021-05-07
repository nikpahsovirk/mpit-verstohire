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
<header id="header" class="smth">
            <a href="index.php" class="logo me-auto"><img src="logo.png" alt="logo" class="img-fluid"></a>
            <a href="registration.php" style="margin-left:500px;"><img  class="img-size" src="user.png"></a>
</header><!-- End Header -->
<div class="section">
<br><br><br><br>
        <div style="margin:0 auto; width:40%;">
                <h1 class="authText">Создать анкету</h1><br>
           <form  action="php/form.php" method="post">
             <input type="text" class="form-control" name="main"  id="main" placeholder="Заголовок"><br>

             <input type="text" class="form-control" name="text" id="text" placeholder="Основной текст"><br>

             <input type="text" class="form-control" name="contact" id="contact" placeholder="Контактная информация"><br>
            
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type ="submit" >Создать</button>

           </form>
         </div>
</div>









<script src="main.js"></script>
</body>
</html>