<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <!--Création d'un formulaire simple avec post en méthode-->
<form action="user.php" method="POST">
  <label for="lastName">Votre nom: </label> <input type="text" name="lastName" placeholder="nom" />
  <label for="firstName">Votre prénom: </label> <input type="text" name="firstName" placeholder="prénom" />
  <input type="submit" name="submit" />
</form>
  </body>
</html>
