<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 1</title>
</head>
<body>
  <?php
  $myNumber = 0; //initialisation de la variable
  while ($myNumber <= 10) { //tant que ($myNumber n'atteint pas 10)
    echo $myNumber; //on affiche la variable
     ?>
     <br> <!--pour revenir a la ligne-->
     <?php
    $myNumber++; //on l'incremente de 1
  }
  ?>
</body>
</html>
