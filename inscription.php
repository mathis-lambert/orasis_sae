<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';

if (!empty($_SESSION) && isset($_SESSION)) {
    header('Location: espace-perso.php');
    exit();
}
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
    <?php include_once 'assets/includes/_navbar.php' ?>
    <section id="connexion">
        <!-- <div class="container"> -->
        <div class="container contact">
            <h1 style="margin-bottom: 40px; text-align:center;">Inscription</h1>

            <form action="" method="post" class="form" id="inscription_form">
                <h2 style="margin-bottom: 1rem; text-align:center;">Formulaire d'Inscription</h2>
                <div class="d-flex row" style="column-gap: 4rem; flex-wrap:wrap; ">
                    <div class="input-group" id="div-mail">
                        <input type="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,}" name="mail" id="mail" placeholder=" " required>
                        <label for="mail">Email</label>
                    </div>
                    <div class="input-group" id="div-nom">
                        <input type="text" name="lastname" id="nom" placeholder=" " required>
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-group" id="div-prenom">
                        <input type="text" name="firstname" id="prenom" placeholder=" " required>
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-group" id="div-mp">
                        <input type="password" name="password" id="password" placeholder=" " required>
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
                <div class="error_div"></div>
                <button type="submit" class="btn btn-blue margin-auto">Inscription</button>
            </form>
        </div>
    </section>

    <!-- </div> -->
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>