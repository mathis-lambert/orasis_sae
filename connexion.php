<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';

if (!empty($_SESSION) && isset($_SESSION)) {
    header('Location: espace-perso.php');
    exit();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orasis 2023 | Connexion</title>

    <!-- import css -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body>
    <?php include_once 'assets/includes/_navbar.php' ?>

    <section id="connexion">

        <div class="container">
            <form method="post" class="form" id="connexion_form">
                <h1 class="no-style text-center f-width">Connexion</h1>
                <div id="error_container" class="error" style="display: none;"></div>
                <div class="input-group">
                    <input type="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,}" id="mail" name="MailUtilisateur" placeholder=" " autocomplete="current-mail" required>
                    <label for="mail">Adresse email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="MdpUtilisateur" autocomplete="current-password" placeholder=" " required>
                    <label for="password">Mot de passe</label>
                </div>
                <div class="error_div"></div>
                <button type="submit" class="btn btn-blue margin-auto">Connexion</button>
                <br>
                <a href="inscription">Je veux m'inscrire</a>
                <br>
                <a href="recover.php">Mot de passe oublié</a>
            </form>
        </div>


    </section>

    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>