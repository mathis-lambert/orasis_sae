<?php
define('MyConst', TRUE);
include_once 'config/config.php';
session_start();

$article_id = $_GET['id'];

$sql = "SELECT * FROM articles, written, users WHERE articles.articleId = written.writtenArticleId AND written.writtenUserId = users.userId AND written.writtenStatus = 'published' AND articles.articleId = :article_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['article_id' => $article_id]);
$article = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($article)) {
    header('Location: articles');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orasis 2023 | <?= $article['articleTitle'] ?></title>

    <!-- import css -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body id="articles_body">
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container">
        <h1><?= $article['articleTitle'] ?></h1>
        <p>
            <small>
                <i>Publié le <?= $article['writtenDate'] ?> par <?= $article['userFirstname'] ?> <?= $article['userLastname'] ?></i>
            </small>
        </p>
        <br>
        <div class="card">
            <div class="card-body">
                <?= $article['articleText'] ?>
            </div>
        </div>
    </div>
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>