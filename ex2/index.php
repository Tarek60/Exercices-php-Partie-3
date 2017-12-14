<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>
  <?php
  $firstVariable = 0; //initialisation de la premiere variable
  $secondVariable = 42; //initialisation de la deuxieme variable
  while ($firstVariable <= 20){ //Tant que (la première variable n'est pas supérieur à 20)
    $result = $firstVariable * $secondVariable; //multiplie la premiere variable avec la deuxieme
    echo $result; //on affiche le resultat
    ?>
    <br> <!--pour revenir a la ligne-->
    <?php
    $firstVariable++; //on incremente la premiere variable de 1
  }
  ?>
</body>
</html>
