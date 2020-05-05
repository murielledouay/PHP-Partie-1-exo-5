<?php
//déclaration de la variable answer avec sa valeur oui ou non comme on veut
$answer = 'oui';
if ($answer){
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 1 exo 5</title>
</head>

<body>

  <p>Vous avez répondu :
    <?php
    //j'affiche avec echo la variable $answer sur mon navigateur pour afficher la réponse de l'utilisateur oui ou non
    echo $answer;
    ?>
  </p>


</body>
</html>
