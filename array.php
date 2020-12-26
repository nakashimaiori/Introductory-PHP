<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>udemy</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
   $array = [
       ['赤','青','黄'],
       ['緑','紫','黒']
   ];

   echo '<pre>';
   var_dump($array);
   echo '<pre>'; 

   echo $array[1][1];

   echo '<br>';
   $array_member = [
       'name' => '本田',
       'height' => 170,
       'hobby' => 'サッカー'
   ];

   echo $array_member['hobby'];

   var_dump($array_member);
   echo '<pre>';
  ?>


</body>
</html>