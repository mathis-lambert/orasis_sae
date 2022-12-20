<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';

if (empty($_SESSION) && !isset($_SESSION)) {
    header('Location: connexion');
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
    <?php include_once 'assets/includes/_navbar.html' ?>
    <div class="container">
        <?php
        if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
        } else {
            echo 'Vous n\'êtes pas connecté';
        }
        ?>
        <a href="logout">Déconnexion</a>
    </div>
    <!-- </div> -->
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>