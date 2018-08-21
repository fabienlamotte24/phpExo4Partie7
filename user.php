<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
  <body>
    <p>
      <!--Création d'une condition pour vérifier l'existence des données enregistréelse
      Puis affichage de celle-ci avec echo dans une phrase-->
      <?php
      if(!empty($_POST['lastName']) && !empty($_POST['firstName'])){
        echo 'Je m\'appelle ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
      }
      ?>
    </p>
  </body>
</html>
