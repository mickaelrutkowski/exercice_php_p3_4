<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $num = 1;
  settype($num, 'integer');
  while ($num <= 10) {
    echo $num . ' ';
    $num += ($num/2);
  }
 ?>
</body>
</html>
