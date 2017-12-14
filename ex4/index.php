<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <?php
  $myVariable = 1; //initialisation de la variable
  while ($myVariable != 10){ //Tant que cette variable n'atteint pas 10
    echo $myVariable;
    ?>
    <br> <!--pour revenir a la ligne-->
    <?php
    $myVariable += 0.5; //on incremente de la moitié de sa valeur
  }
  ?>
</body>
</html>
