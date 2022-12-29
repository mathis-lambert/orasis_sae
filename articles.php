<?php
define('MyConst', TRUE);
include_once 'config/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orasis 2023 | Les articles</title>

    <!-- import css -->
    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body id="articles_body">
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container">
        <h1>Articles</h1>
        <br>
        <?php
        $sql = "SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId AND written.writtenStatus = 'published'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="articles_grid">
            <?php
            if (!empty($articles)) {
                for ($i = 0; $i < 9; $i++) {
                    foreach ($articles as $article) {
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $article['articleTitle'] . '</h5>';
                        echo '<div class="card-text">' . $article['articleText'] . '</div>';
                        echo '<a href="article?id=' . $article['articleId'] . '" class="btn btn-primary card-link">Voir l\'article</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Aucun article</h5>';
                echo '<p class="card-text">Il n\'y a aucun article pour le moment.</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>