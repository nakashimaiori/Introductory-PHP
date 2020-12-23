<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>udemy</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
   $test_1 = 123;
   $test_2 = 456;

   $test_3 = $test_1 . $test_2;

   var_dump($test_3);


   echo '<br>';

   //定数 上書きしても変わらない constant
   const MAX = 'テスト';

   echo MAX;

  ?>


</body>
</html>