<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Orasis 2023 | Accueil</title>

   <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

   <!-- import favicon -->
   <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

   <!-- import css -->
   <link rel=" stylesheet" href="assets/style/style.css" />

</head>

<body>
   <?php include_once 'assets/includes/_navbar.php' ?>
   <div class="container act">
    <div class="activite">
        <div id="activite_content">
            <div><img id="img_act" src="./assets/img/randonnee.jpg" alt=""></div>
            <div><h3>Randonnée</h3></div>
        </div>
    </div>

    <div class="activite">
        <div id="activite_content">
            <div><img id="img_act" src="./assets/img/snorkeling.jpg" alt=""></div>
            <div><h3>Snorkeling</h3></div>
        </div>
    </div>

    <div class="activite">
        <div id="activite_content">
            <div><img id="img_act" src="./assets/img/jeux_de_societe.jpg" alt=""></div>
            <div><h3>Jeux de société</h3></div>
        </div>
    </div>

    <div class="activite">
        <div id="activite_content">
            <div><img id="img_act" src="./assets/img/gala.jpg" alt=""></div>
            <div><h3>Soirée de Gala</h3></div>
        </div>
    </div>


   </div>
      <?php include_once 'assets/includes/_footer.html' ?>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/accueil.js"></script>
   </body>

</html>