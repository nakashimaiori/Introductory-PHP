<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>udemy</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
   print('現在は' .date('m月 d日 l') .'です。');
   
   echo '<br>';
   $today = new DateTime();
   print($today->format('G時 i分 s秒'));

   echo '<br>';

  $test = 123;
  
  var_dump($test);
  ?>


</body>
</html>