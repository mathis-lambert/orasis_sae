<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';

if (!empty($_SESSION) && isset($_SESSION)) {
   $session_role = $_SESSION['role'];
} else {
   $session_role = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Orasis 2023 | Dépôt d'articles</title>

   <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

   <!-- import favicon -->
   <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

   <!-- import css -->
   <link rel=" stylesheet" href="assets/style/style.css" />
</head>

<body id="depot_article">
   <?php include_once 'assets/includes/_navbar.php' ?>

   <div class="container">
      <?php
      if ($session_role != 0) :
      ?>
         <h1>Dépôt d'articles</h1>
         <!-- je te laisse mettre la méthode et le action pour le back -->
         <form method="" class="form" style="max-width: 600px; margin-bottom: 3.5rem;" id="article-form">
            <div class="input-group">
               <input type="text" name="titreArticle" id="articleTitle" required placeholder=" " />
               <label for="titreArticle">Titre de l'article</label>
            </div>
            <div class="input-group">
               <textarea name="resumeArticle" class="long" id="articleResume" placeholder=" " required></textarea>
               <label for="resumeArticle">Résumé de l'article (balises HTML acceptées)</label>
            </div>
            <div class="input-group">
               <input type="file" name="article" placeholder=" " accept=".pdf" id="file" required style="background-color: #fff;" />
               <label for="article">PDF de l'article</label>
            </div>
            <div class="error_div" style="margin-bottom: 1rem;"></div>
            <button type="submit" id="send" class="btn btn-blue margin-auto">Envoyer</button>
         </form>
      <?php
      else :
      ?>
         <h1 class="no-style">Vous devez être connecté pour déposer un article</h1>
         <a href="./connexion.php" class="btn btn-blue">Se connecter</a>
         <br>
         <a href="./inscription.php" class="btn btn-blue">S'inscrire</a>

      <?php
      endif;
      ?>
   </div>

   <?php include_once 'assets/includes/_footer.php' ?>

   <script>
      const userRole = <?= $session_role ?>;
      console.log(userRole);

      const file = document.getElementById('file');
      const errorDiv = document.querySelector('.error_div');

      file.addEventListener("change", () => {
         // verify if the file is a pdf
         if (file.files[0].type !== "application/pdf") {
            errorDiv.innerHTML = "Le fichier doit être un pdf";
            file.value = "";
         } else {
            errorDiv.innerHTML = "";
         }
      });
   </script>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/app.js"></script>
</body>

</html>