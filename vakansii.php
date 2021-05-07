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
<div class="container header">
  <div class="row">
    <div class="col-sm">
      <a href="index.php" class="logo me-auto"><img src="logo.png" alt="logo" class="img-fluid"></a>
    </div>
    <div class="col-sm" style="padding-top:15px;" >
      <a href="anketa.php" style="margin-left:0px;" id="reg">Создать анкету</a>
    </div>
    <div class="col-sm">
      <a href="registration.php"><img  class="img-size" src="user.png"></a>
    </div>
  </div>
</div><!-- End Header -->

<div class="bg-image"><br>
      <?php
     
      $link = mysqli_connect('localhost', 'root', 'root', 'vakansii-bd') 
        or die("Ошибка " . mysqli_error($link));         
      $query ="SELECT * FROM vakansii";
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

      if($result)
      {
          $rows = mysqli_num_rows($result); // количество полученных строк
          


          for ($i = 0 ; $i < $rows ; ++$i)
          {
            echo " <div class='anketa'> <div class='text-wrapper'> ";
              $row = mysqli_fetch_row($result); 

              echo "<p>";
                  for ($j = 0 ; $j < 3 ; ++$j) echo "<p>$row[$j]</p>";
              echo "</p>";

              echo " </div> </div><br>";
          }


          
          // очищаем результат
          mysqli_free_result($result);
      }
      
      mysqli_close($link);
      ?>
</div>



<script src="main.js"></script>
</body>
</html>
