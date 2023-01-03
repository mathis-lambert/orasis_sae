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
    <title>Orasis 2023 | Discussion auteurs</title>

    <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

    <!-- import favicon -->
    <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

    <!-- import css -->
    <link rel=" stylesheet" href="assets/style/style.css" />
</head>

<body id="discussion">
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container">
        <h1>Discussion</h1>
        <br>
        <?php
        $sql = "SELECT * FROM messages, users WHERE messages.messageUserId = users.userId AND messages.messageStatus = 'ok' ORDER BY messages.messageDate ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT * FROM users WHERE userId = :userId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['userId' => $_SESSION['id']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="message_container">
            <div class="messages_grid">
                <?php
                if (!empty($messages)) {
                    foreach ($messages as $message) {
                        echo '<div class="message">';
                        echo '<div class="message_header">';
                        echo '<div class="message_infos">Par ' . $message['userFirstname'] . ' ' . $message['userLastname'] . ' le ' . $message['messageDate'] . '</div>';
                        echo '</div>';
                        echo '<div class="message_content">' . $message['messageText'] . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="message">';
                    echo '<h5 class="card-title">Aucun message</h5>';
                    echo '<p class="card-text">Il n\'y a aucun message pour le moment.</p>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>

        <!-- Input pour écrire un message -->
        <div class="send_container">
            <input type="text" id="message_input" placeholder="Écrire un message ...">
            <button id="message_button">Envoyer</button>
        </div>
    </div>
    <?php include_once 'assets/includes/_footer.html' ?>
    <!-- Javascript import files -->
    <script>
        const message_container = document.querySelector('.message_container');


        // Fonction pour scroller en bas de la page
        function scrollToBottom() {
            message_container.scrollTop = message_container.scrollHeight;
        }
        scrollToBottom();
    </script>
    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/app.js"></script>
</body>

</html>