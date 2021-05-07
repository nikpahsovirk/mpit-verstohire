<?php

$main = filter_var(trim($_POST['main']),FILTER_SANITIZE_STRING);
$text = filter_var(trim($_POST['text']),FILTER_SANITIZE_STRING);
$contact = filter_var(trim($_POST['contact']),FILTER_SANITIZE_STRING);

if (mb_strlen($main)<1 || mb_strlen($main)>50)
  {
  echo "Недопустимая длина заголовка";
  exit;
  } else if (mb_strlen($text)<1 || mb_strlen($text)>300)
    {
    echo "Недопустимая длина текста";
    exit;
    } else if (mb_strlen($contact)<1 || mb_strlen($contact)>50)
    {
    echo "Недопустимая длина контактной информации";
    exit;
    }

$mysql = new mysqli('localhost', 'root', 'root', 'vakansii-bd');

$mysql->query("INSERT INTO `vakansii` ( `main`, `text`,`contact`) VALUES ('$main', '$text','$contact')") ;

$mysql->close();
header('location: /' );
 ?>
