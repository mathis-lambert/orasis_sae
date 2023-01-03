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
    <title>Orasis 2023 | Tarifs</title>

    <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

    <!-- import favicon -->
    <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

    <!-- import css -->
    <link rel=" stylesheet" href="assets/style/style.css" />

    <style>
        .tarifs_container {
            padding: 1rem;
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container">
        <h1 class="white">
            Tarifs et hébergement
        </h1>

        <div class="tarifs_container" style="background-color:white; color: black;">
            <div class="content-container d-flex row">
                <div class="main-container">
                    <div class="para">
                        <p>
                            La conférence et les participants seront logés à l’établissement Miléade idéalement placé à Carqueiranne qui donne une vue sur mer.

                            Nous proposons une formule de pension complète incluse dans les prix d’inscription et de l’hébergement.

                            Les photos suivantes présentent les locaux et l’emplacement de cet établissement.
                        </p>
                    </div>
                </div>
                <div class="img_tarifs" style="margin-bottom: 20px;">
                    <img src="assets/img/camping.jpg" alt="camp milléiade">
                </div>
            </div>


            <h2 style="margin-bottom: 2rem; text-align:center;">Tarifs d'inscription à ORASIS 2023</h2>
            <b>Les frais d’inscriptions comprennent :</b>
            <ul class="doted">
                <li> participation à l'ensemble du congrès et aux pauses-cafés ;</li>
                <li>les repas du lundi soir, mardi midi et soir, mercredi midi et soir, jeudi midi et vendredi midi ;</li>
                <li> repas de gala du jeudi soir ;</li>
                <li>les animations et visites <a href="./#programme" style="color:black;text-decoration:underline;">(voir programme).</a></li>
            </ul>
            <br>
            <b>Vous avez le choix entre les options* suivantes (dans la limite des places disponibles) :</b>
            <div class="container-table" style="color:white; margin:auto;padding-top:0;">
                <table style="background-color:black ;border:2px solid white; border-collapse:collapse;">
                    <tr>
                        <td>tarif chambre simple</td>
                        <td>650€</td>
                    </tr>
                    <tr>
                        <td>tarif chambre double</td>
                        <td>550€</td>
                    </tr>
                </table>
            </div>
            <div>
                <p style="text-align: center;">
                    L'inscription est ouverte à partir du <b>03 avril 2023</b></br>
                    <em>*Une majoration de 50€ sera appliquée sur les tarifs pour toute réservation faite à partir du 02 mai 2023, le choix de chambre simple ou double est possible en fonction de la disponibilité des chambres.
                    </em>
                </p>

                <div class="content-container d-flex row">
                    <div class="main-container">
                        <div class="para" style="margin-top:20px;">
                            <p>
                                Le site peut accueillir jusqu’à 100 participants avec la configuration suivante : 70 chambres simples et 15 chambres doubles
                            </p>
                        </div>
                        <div class="imgReveal" style="margin-bottom: 20px;">
                            <img src="./assets/img/104316005.jpg" alt="" style="width: 70%;border-radius: 20px;height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'assets/includes/_footer.php' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>