<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';
?>
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

<body class="home">
   <?php include_once 'assets/includes/_navbar.php' ?>
   <div class="hero_container">
      <div class="hero">
         <div class="content">
            <div class="d-flex column">
               <h1>Bienvenue pour la 19ème édition d’ORASIS</h1>
               <div class="content-container d-flex row">
                  <div class="main-container">
                     <div class="para">
                        <p>
                           Journée francophone des jeunes chercheurs en vision par
                           ordinateur.
                           <br />
                           Elle se déroulera du 26 au 27 Mai 2023 à Carqueiranne.
                           <br />
                           Ces journées se veulent être, pour certains, la première
                           opportunité d'entendre des chercheurs confirmés du domaine et de
                           s'initier au processus de rédaction, dépôt, évaluation et
                           présentation d'articles de recherche.
                        </p>
                     </div>
                  </div>
                  <div class="imgReveal">
                     <img src="assets/img/native-mileiade.jpg" alt="" />
                     <div class="clippedImage">
                        <img src="assets/img/computed-mileiade.jpg" alt="" />
                     </div>
                     <div class="infoOverlay">
                        <div class="overlayCard">
                           <div class="overlayContent">
                              <p>
                                 Cette image a été traitée par un ordinateur pour reconnaître
                                 les différents types de surface
                              </p>
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
   </div>
   <br /><br /><br />

   <div class="container">
      <section id="accueil">
         <h1>Accueil</h1>
         <p>
            La 19ième édition du colloque d’ORASIS, journées francophones des jeunes
            chercheurs en vision par ordinateur, se déroulera du 22 au 26 mai 2023 à
            Carqueiranne (Var, PACA). Elle sera organisée par l'équipe Signal et Image
            du Laboratoire d'Informatique et Systèmes UMR7020, au centre vacanciel
            Miléade à Carqueiranne. Ce colloque vise à réunir de jeunes chercheurs
            francophones (doctorants et jeunes docteurs) issus de la communauté de la
            vision par ordinateur ou de domaines connexes, avec l'ambition de
            favoriser, dans une ambiance conviviale, les échanges entre les
            participants, notamment entre les jeunes chercheurs et chercheurs
            expérimentés dans le domaine. Les journées seront rythmées par des
            sessions plénières ainsi que des sessions posters. Plusieurs sessions (7)
            de conférenciers invités complètent le déroulement de ces journées. Les
            contributions doivent porter sur des travaux de recherche en lien avec la
            vision par ordinateur et le traitement d'images. Elles peuvent concerner
            des domaines d'application comme la vision robotique, l'imagerie médicale
            et biologique, l'imagerie par satellite, le multimédia, la réalité
            virtuelle. Plus précisément, elles peuvent couvrir les domaines suivants :
         </p>
      </section>
      <br />
      <section id="intervenants">
         <h1>Les intervenants</h1>
         <h2>Intelligence artificielle</h2>
         <div class="container" style="text-align: center; display:flex; flex-wrap:wrap; flex-direction:row; padding:50px; justify-content:center;">
            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>
         </div>

         <h2>traitement des signaux numériques</h2>
         <div class="container" style="padding: 50px; text-align: center; display:flex; flex-wrap:wrap; flex-direction:row; justify-content:center;">
            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>

            <div id="card_intervenant">
               <h3>Jhon Doe</h3>
               <p>Docteur dans la représentation
                  intelligente des système numériques </p>
            </div>

         </div>
         <h2></h2>
      </section>
      <br />
      <section id="programme">
         <h1>Le programme</h1>
      </section>
      <br />
      <section id="evenement">
         <h1>L'événement</h1>
         <h2>Les derniers articles</h2>
         <div id="articles_container" class="container articles_container">
            <div id="articles">
               <div id="article1" class="article">
                  <h4>Titre</h4>
                  <p id="txt_article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi iste quas magnam commodi illum dolore facilis facere culpa illo perferendis id soluta, labore est molestias quos distinctio, veniam minima mollitia!</p>
                  <button class="btn_blue">Voir l'article</button>

               </div>
               <div id="article2" class="article">
                  <h4>Titre</h4>
                  <p id="txt_article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi iste quas magnam commodi illum dolore facilis facere culpa illo perferendis id soluta, labore est molestias quos distinctio, veniam minima mollitia!</p>
                  <button class="btn_blue">Voir l'article</button>

               </div>
               <div id="article3" class="article">
                  <h4>Titre</h4>
                  <p id="txt_article">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi iste quas magnam commodi illum dolore facilis facere culpa illo perferendis id soluta, labore est molestias quos distinctio, veniam minima mollitia!</p>
                  <button class="btn_blue">Voir l'article</button>

               </div>
            </div>
         </div>
         <div id="bouton_articles">
            <button style="background-color: #47C7EF; color:white; border:solid 2px white; border-radius:15px; padding:4px;"><a href="articles">Voir tous les articles</a></button>
      </div>
      </section>
      <br />
      <section id="utiles">
         <h1>Infos utiles</h1>
         <div id="container_bas" class="container container_bas">
            <div id="dates">
               <h2>Dates importantes</h2>
               <div id="dates_importantes">
                  <div id="dadates" class="dadates">
                     <p class="p_dates"><b>Ouverture de soumission</b> - 15 janvier 2023</p>

                     <p class="p_dates"><b>Soumission des articles</b> - 15 février 2023</p>

                     <p class="p_dates"><b>Notifications aux auteurs</b> - 02 avril 2023</p>

                     <p class="p_dates"><b>Version finale</b> - 16 avril 2023</p>

                     <p class="p_dates"><b>Ouverture des inscriptions</b> - 03 avril 2023</p>

                     <p class="p_dates"><b>Inscription non majorée</b> - Avant le 2 mai 2023</p>

                     <p class="p_dates"><b>Dates de la conférence</b> - 22 au 26 Mai 2023</p>
                  </div>
               </div>
            </div>
            <div id="carte">
               <h2>Carte</h2>
               <div id='down_content'>
                  <iframe id="emplacement_map" src="https://www.google.fr/maps/place/Village+Club+Mil%C3%A9ade+Carqueiranne/@43.0901393,6.0929664,17z/data=!3m1!4b1!4m8!3m7!1s0x12c9218a0e6f68e7:0x77c8a07f5a809fbd!5m2!4m1!1i2!8m2!3d43.0901393!4d6.0929664"></iframe>
                  <div id="nav_bas">
                     <div id="bulles1">
                        <h6 class="txt_bulles">S'inscrire</h6>
                        <div class="flèches">
                           <div class="flèches_background">
                              <img src="./assets/img/Arrow 1.png" alt="" style="margin: 5px;">
                           </div>
                        </div>
                     </div>
                     <div id="bulles2">
                        <h6 class="txt_bulles">Plan d'accès</h6>
                        <div class="flèches">
                           <div class="flèches_background">
                              <img src="./assets/img/Arrow 1.png" alt="" style="margin: 5px;">
                           </div>
                        </div>
                     </div>
                     <div id="bulles3">
                        <h6 class="txt_bulles">Contact</h6>
                        <div class="flèches">
                           <div class="flèches_background">
                              <img src="./assets/img/Arrow 1.png" alt="" style="margin: 5px;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <?php include_once 'assets/includes/_footer.html' ?>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>