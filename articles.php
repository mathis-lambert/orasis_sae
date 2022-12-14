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

    <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

    <!-- import favicon -->
    <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

    <!-- import css -->
    <link rel=" stylesheet" href="assets/style/style.css" />
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
                foreach ($articles as $article) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $article['articleTitle'] . '</h5>';
                    echo '<div class="card-text">' . $article['articleText'] . '</div>';
                    echo '<a href="article?id=' . $article['articleId'] . '" class="btn btn-primary card-link">Voir l\'article</a>';
                    echo '</div>';
                    echo '</div>';
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
    <?php include_once 'assets/includes/_footer.php' ?>
    <!-- Javascript import files -->

    <script src="assets/app/index.js"></script>
</body>

</html>