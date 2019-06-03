<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 7 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 7</h1>
          <h4 class="text-white m-4 text-center">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $age = 22;
          $gender = true;
          function fonctionQuiDitSiTesUnHommeOuUneFemme ($gender, $age) {
            if ($gender == true && $age >= 18) {
              echo 'Vous êtes un homme et vous êtes majeur';
            } else if ($gender == true && $age < 18) {
              echo 'Vous êtes un homme et vous êtes mineur';
            } else if ($gender == false && $age >= 18) {
              echo 'Vous êtes une femme et vous êtes majeur';
            } else {
              echo 'Vous êtes une femme et vous êtes mineur';
            }
          }
          fonctionQuiDitSiTesUnHommeOuUneFemme ($gender, $age);
        ?>
      </p>
    </div>
  </body>
</html>
