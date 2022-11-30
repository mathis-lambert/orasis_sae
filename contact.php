<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orasis 2023</title>

  <!-- import css -->
  <link rel="stylesheet" href="assets/style/style.css" />
</head>

<body>
  <?php include_once 'assets/includes/_navbar.html' ?>
  <!-- <div class="container"> -->
  <div class="container contact">
    <h1> Contact</h1>

      <form action="" method="post" class="form">
        <div class="input-group">
        <input name="mail" id="mail" placeholder=" " required>
        <label for="mail">Email</label>
        </div>
        <div class="input-group">
        <input name="nom" id="name" placeholder=" " required>
        <label for="name">Prénom et Nom</label>
        </div>
        <div class="input-group">
        <input name="sujet" id="sujet" placeholder=" " required>
        <label for="sujet">sujet</label>
        </div>
        <div class="input-group">
        <input name="message" id="message" placeholder=" " required>
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