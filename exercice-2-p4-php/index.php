<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 2</h1>
          <h4 class="text-white m-4 text-center">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
          $chaine = 'bonnejoureu les einfants, comment que ça va bienne ? ';
          function chaine($chaine) {
            return $chaine;
          }
          $res = chaine($chaine);
          echo $res;
        ?>
      </p>
    </div>
  </body>
</html>
