<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';

if (!empty($_SESSION) && isset($_SESSION)) {
   $session_role = $_SESSION['role'];
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

<body>
   <?php include_once 'assets/includes/_navbar.php' ?>

   <div class="container">
      <h1>Dépôt d'articles</h1>
      <!-- je te laisse mettre la méthode et le action pour le back -->
      <form method="" class="form" style="max-width: 600px; margin-bottom: 3.5rem;">
         <div class="input-group">
            <input type="text" name="titreArticle" required />
            <label for="titreArticle">Titre de l'article</label>
         </div>
         <div class="input-group">
            <input type="text" name="resumeArticle" class="long" required />
            <label for="resumeArticle">Résumé de l'article</label>
         </div>
         <div class="input-group">
            <input type="file" name="article" accept=".pdf" id="file" required style="background-color: #fff;" />
            <label for="article">Résumé de l'article</label>
         </div>
         <div class="error_div" style="margin-bottom: 1rem;"></div>
         <button type="submit" id="send" class="btn btn-blue margin-auto">Envoyer</button>
      </form>
   </div>

   <?php include_once 'assets/includes/_footer.html' ?>

   <script>
      var userRole = "<?php $session_role ?>";
      console.log(userRole);

      const file = document.getElementById('file');
      const errorDiv = document.querySelector('.error_div');

      file.addEventListener('change', () => {
         // verify if the file is a pdf
         if (file.files[0].type !== 'application/pdf') {
            errorDiv.innerHTML = 'Le fichier doit être un pdf';
            file.value = '';
         } else {
            errorDiv.innerHTML = '';
         }
      });
   </script>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script defer src="assets/controllers/js/article.js"></script>
</body>

</html>