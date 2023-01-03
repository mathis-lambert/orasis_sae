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
</head>

<body>
    <?php include_once 'assets/includes/_navbar.php' ?>

    <section>
        <div class="container contact">
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
                <div class="imgReveal" style="margin-bottom: 20px;">
                    <img src="assets/img/camping.jpg" alt="" style="width: 70%;border-radius: 20px;height: 100%;">
                </div>
            </div>


        <h2 style="margin-bottom: 40px; text-align:center;">Tarifs</h2>
        <p>Tarifs d'inscription à ORASIS 2023
            Les frais d’inscriptions comprennent :
            <li> participation à l'ensemble du congrès et aux pauses-cafés ;</li>
            <li>les repas du lundi soir, mardi midi et soir, mercredi midi et soir, jeudi midi et vendredi midi ;</li>
            <li> repas de gala du jeudi soir ;</li>
            <li>les animations et visites (voir programme).</li>
            Vous avez le choix entre les options* suivantes (dans la limite des places disponibles) :
        </p>
        </div>
        <div class="container-table" style="color:white; margin:auto;">
            <table style="background-color:black ;border:2px solid white; border-collapse:collapse;">
                <tr>
                    <td style="height: 100px ; width:500px; text-align:center; display:table-cell; vertical-align:center;border-bottom:2px solid white; border-right:2px solid white; color:white;">tarif chambre simple</td>
                    <td style="height: 100px ; width:100px; text-align:center; display:table-cell; vertical-align:center; border-bottom:2px solid white;color:white;">650€</td>
                </tr>
                <tr>
                    <td style="height: 100px ; width:500px; text-align:center; display:table-cell; vertical-align:center; border-right:2px solid white;color:white;">tarif chambre double</td>
                    <td style="height: 100px ; width:100px; text-align:center; display:table-cell; vertical-align:center;color:white;">550€</td>
                </tr>
            </table>
        </div>
        <div class="container" style="color:white" ;>
            <p style="text-align: center;">
                L'inscription est ouverte à partir du 03 avril 2023</br>
                *Une majoration de 50€ sera appliquée sur les tarifs pour toute réservation faite à partir du 02 mai 2023, le choix de chambre simple ou double est possible en fonction de la disponibilité des chambres (70 chambres simples, 15 chambres doubles).
            </p>
        </div>

    </section>
    <!-- </div> -->
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>