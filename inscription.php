<?php
define('MyConst', TRUE);
include_once 'assets/controllers/php/config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orasis 2023</title>

    <!-- import css -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body>
    <?php include_once 'assets/includes/_navbar.html' ?>
    <section id="formulaire_inscription">
        <!-- <div class="container"> -->
        <div class="container contact">
            <h1 style="margin-bottom: 40px; text-align:center;">Inscription</h1>
            <h2 style="margin-bottom: 40px; text-align:center;">Formulaire d'Inscription</h2>

            <form action="" method="post" class="form">
                <div class="d-flex row" style="column-gap: 4rem; flex-wrap:wrap; ">
                    <div class="input-group" id="div-mail">
                        <input name="mail" id="mail" placeholder=" " required>
                        <label for="mail">Email</label>
                    </div>
                    <div class="input-group" id="div-adr">
                        <input name="adresse" id="adresse" placeholder=" " required>
                        <label for="adresse">adresse</label>
                    </div>

                    <div class="input-group" id="div-nom">
                        <input name="nom" id="nom" placeholder=" " required>
                        <label for="nom">nom</label>
                    </div>
                    <div class="input-group" id="div-prenom">
                        <input name="prenom" id="prenom" placeholder=" " required>
                        <label for="prenom">prénom</label>
                    </div>
                    <div class="input-group" id="div-id">
                        <input name="id" id="id" placeholder=" " required>
                        <label for="id">identifiant</label>
                    </div>
                    <div class="input-group" id="div-mp">
                        <input name="mp" id="mp" placeholder=" " required>
                        <label for="mp">mot de passe</label>
                    </div>
                    <button type="submit" class="btn btn-blue">Inscription</button>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container contact">
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
        <div class="container-table" style="color:white; margin:auto;" >
            <table style="background-color:black ;border:1px solid white;">
                <tr>
                    <td style="height: 100px ; width:500px; text-align:center; display:table-cell; vertical-align:center;">tarif chambre simple</td>
                    <td style="height: 100px ; width:100px; text-align:center; display:table-cell; vertical-align:center;">650€</td>
                </tr>
                <tr>
                    <td style="height: 100px ; width:500px; text-align:center; display:table-cell; vertical-align:center;">tarif chambre double</td>
                    <td style="height: 100px ; width:100px; text-align:center; display:table-cell; vertical-align:center;">550€</td>
                </tr>
            </table>
        </div>
<div class="container" style="color:white";>
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
    <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>