<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';
if (empty($_SESSION)) {
    if ($_SESSION['logged'] == false) {
        header('Location: connexion');
        exit();
    }
} else {
    //fetch all datas from user
    $sql = "SELECT * FROM users WHERE userId = ?";
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindValue(1, $_SESSION['id']);
        $stmt->execute();
        $user = $stmt->fetch();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orasis 2023 | Mon espace</title>

    <!-- import css -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body>
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container" style="min-height: 100vh; color:white;">
        <div class="d-flex row f-width justify-between align-center">
            <div>
                <h1 class="no-style">Bonjour <?= $_SESSION['firstname'] ?> </h1>
                <p>
                    Vous êtes connecté en tant que <?= getRoleName($_SESSION['role']) ?>
                </p>
            </div>
            <a class="btn" href="logout">Déconnexion</a>
        </div>
        <br>
        <p>
            Dans votre espace, vous pouvez :
        </p>
        <ul class="doted">
            <?php if ($_SESSION['role'] == 0) : ?>
                <li>Consulter les articles</li>
                <li>Consulter les informations de votre profil</li>
            <?php elseif ($_SESSION['role'] == 1) : ?>
                <li>Consulter les articles</li>
                <li>Relire et valider les articles</li>
                <li>Modifier un article</li>
                <li>Consulter les informations de votre profil</li>
            <?php elseif ($_SESSION['role'] == 2) : ?>
                <li>Consulter les articles</li>
                <li>Relire et valider les articles</li>
                <li>Modifier un article</li>
                <li>Créer un article</li>
                <li>Supprimer vos articles</li>
                <li>Consulter les informations de votre profil</li>
            <?php elseif ($_SESSION['role'] == 3) : ?>
                <li>Consulter les articles</li>
                <li>Relire et valider les articles</li>
                <li>Modifier un article</li>
                <li>Créer un article</li>
                <li>Supprimer vos articles</li>
                <li>Consulter les informations de votre profil</li>
                <li>Créer un utilisateur</li>
                <li>Modifier un utilisateur</li>
                <li>Supprimer un utilisateur</li>
            <?php endif; ?>
        </ul>
        <br>
        <div class="error_div"></div>
        <?php if ($_SESSION['role'] == 3) : ?>
            <?php include_once 'assets/includes/usersTable.php' ?>
        <?php endif; ?>

    </div>
    <!-- </div> -->
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->
    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>