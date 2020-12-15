<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$purpose = "Webプログラミング";

echo <<< EOM
PHPとは、HTMLへの埋め込み型プログラミング言語です。<br />
正式名称は「PHP: Hypertext Preprocessor」です。<br />
PHPは{$purpose}に利用されます!<br />
<a href="">詳細を読む<a>
EOM;

?>
</body>
</html>
