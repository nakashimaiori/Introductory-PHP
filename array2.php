<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>連想配列udemy</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
    $array_member_2 = [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
      ];

  echo $array_member_2 ['香川']['height'];


  $signal = 'blue';

  if ($signal === 'red'){
      echo '止まれ';
  } else if($signal === 'yellow'){
      echo '一旦停止';
  } else {
      echo '進む';
  }


  ?>


</body>
</html>