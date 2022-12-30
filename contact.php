<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orasis 2023 | Contact</title>

  <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

  <!-- import favicon -->
  <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

  <!-- import css -->
  <link rel=" stylesheet" href="assets/style/style.css" />
</head>

<body>
  <?php include_once 'assets/includes/_navbar.php' ?>
  <!-- <div class="container"> -->
  <div class="container contact">
    <h1 style="margin-bottom: 40px;">Contact</h1>

    <form action="" method="post" class="form">
      <div class="d-flex row" style="column-gap: 4rem; flex-wrap:wrap; ">
        <div class="input-group" id="div-mail">
          <input name="mail" id="mail" placeholder=" " required>
          <label for="mail">Email</label>
        </div>
        <div class="input-group" id="div-name">
          <input name="nom" id="name" placeholder=" " required>
          <label for="name">Prénom et Nom</label>
        </div>
      </div>
      <div class="input-group" id="div-sujet">
        <input name="sujet" id="sujet" placeholder=" " required>
        <label for="sujet">sujet</label>
      </div>
      <div class="input-group" id="div-message">
        <textarea name="message" id="message" cols="30" rows="10" placeholder=" " required></textarea>
        <label for="message">message</label>
      </div>
      <button type="submit" class="btn btn-blue">envoyer</button>
    </form>
  </div>
  <!-- </div> -->

  <?php include_once 'assets/includes/_footer.html' ?>
  <!-- Javascript import files -->

  <script src="assets/app/index.js"></script>
</body>

</html>