<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orasis 2023</title>

  <!-- import css -->
  <link rel="stylesheet" href="assets/style/style.css" />

  <!-- import GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body>
  <?php include_once 'assets/includes/_navbar.html' ?>
  <div class="hero_container">
    <div class="hero">
      <div class="content grid-center">
        <div class="content-container d-flex row">
          <div class="main-container">
            <h1>Bienvenue pour la 19ème édition d’ORASIS</h1>
            <div class="para">
              <p>
                Journée francophone des jeunes chercheurs en vision par ordinateur.
                <br>
                Elle se déroulera du 26 au 27 Mai 2023 à Carqueiranne.
                <br>
                Ces journées se veulent être, pour certains, la première opportunité d'entendre des chercheurs confirmés du domaine et de s'initier au processus de rédaction, dépôt, évaluation et présentation d'articles de recherche.
              </p>
            </div>

            <div>
              <a href="https://www.youtube.com/watch?v=9bZkp7q19f0" target="_blank" class="btn">Voir la vidéo</a>
            </div>
          </div>
          <div class="imgReveal">
            <img src="assets/img/native-mileiade.jpg" alt="">
            <div class="clippedImage">
              <img src="assets/img/computed-mileiade.jpg" alt="">
            </div>
            <div class="infoOverlay">

              <div class="overlayCard">
                <div class="overlayContent">
                  <p>Cette image a été traitée par un ordinateur pour reconnaître les différents types de surface</p>
                </div>
              </div>

              <div class="overlayBtn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M18.5,8.51h-7v-7A1.5,1.5,0,0,0,10,0h0A1.5,1.5,0,0,0,8.5,1.5v7h-7a1.5,1.5,0,0,0,0,3h7v7A1.5,1.5,0,0,0,10,20h0a1.5,1.5,0,0,0,1.5-1.5v-7h7a1.5,1.5,0,0,0,0-3Z"></path>
                </svg>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Javascript import files -->
  <script src="assets/app/index.js"></script>
</body>

</html>