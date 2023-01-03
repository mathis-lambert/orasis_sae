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

    <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

    <!-- import favicon -->
    <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

    <!-- import css -->
    <link rel=" stylesheet" href="assets/style/style.css" />
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
        <?php
        if ($_SESSION['role'] !== 10) {
            echo "        <p>
            Dans votre espace, vous pouvez :
        </p>";
        } else {
            echo "<p> Merci de patienter, votre compte est en cours de validation par un administrateur. </p>";
        }
        ?>
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
        <?php
        if ($_SESSION['role'] == 3) :
            include_once 'assets/includes/usersTable.php';
            include_once 'assets/includes/articlesTable.php';
        elseif ($_SESSION['role'] == 2) :
            include_once 'assets/includes/articlesTable.php';
        elseif ($_SESSION['role'] == 1) :
            include_once 'assets/includes/articlesTable.php';
        endif;
        ?>

    </div>
    <!-- </div> -->
    <?php include_once 'assets/includes/_footer.php' ?>
    <!-- Javascript import files -->
    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>