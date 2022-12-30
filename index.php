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
   <title>Orasis 2023 | Accueil</title>

   <meta name="description" content="Colloque ORASIS 2023 sur le traitement de l'image par ordinateur et l'intelligence artificielle à Carqueiranne, Var. Inscriptions et programme complet bientôt disponibles.">

   <!-- import favicon -->
   <link rel="icon" href="assets/img/ico-white.svg" type="image/png" />

   <!-- import css -->
   <link rel=" stylesheet" href="assets/style/style.css" />

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
         <div class="container" style="padding: 50px; text-align: center; display:flex; flex-wrap:wrap; flex-direction:row; ">
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
         <div class="container" style="padding: 50px; text-align: center; display:flex; flex-wrap:wrap; flex-direction:row;">
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
         <div class="container">
         <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FParis&showTitle=0&showNav=1&showTabs=1&showCalendars=0&showTz=0&mode=WEEK&src=MjNjODg4YjhhZjJlMzBmMDQxNDE4ZTNiNTBiNGUwMDlmOTBlOTVlZjQ2N2ZiYzc5ZmZiMTliYTQxNmE3ODAxOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23616161" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
         </div>
      </section>
      <br />
      <section id="evenement">
         <h1>L'événement</h1>
         <h2>Les derniers articles</h2>
         <div id="articles_container" class="container articles_container">
            <div id="articles">
               <?php
               $sql = "SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId ORDER BY written.writtenDate DESC";
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

               if (!empty($stmt)) {
                  if (count($articles) < 3) {
                     for ($i = 0; $i < count($articles); $i++) {
                        echo '<div class="article">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $articles[$i]['articleTitle'] . '</h5>';
                        echo '<div class="card-text">' . $articles[$i]['articleText'] . '</div>';
                        echo '<a href="article?id=' . $articles[$i]['articleId'] . '" class="btn btn-blue card-link">Voir l\'article</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                     }
                  } else {
                     for ($i = 0; $i < 3; $i++) {
                        echo '<div class="article">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $articles[$i]['articleTitle'] . '</h5>';
                        echo '<div class="card-text">' . $articles[$i]['articleText'] . '</div>';
                        echo '<a href="article?id=' . $articles[$i]['articleId'] . '" class="btn btn-blue card-link">Voir l\'article</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                     }
                  }
               } else {
                  echo "Il n'y a aucun article pour le moment.";
               }

               ?>
            </div>
            <a class="btn btn-blue margin-auto" href="articles.php">Voir tous les articles</a>
         </div>


      </section>
      <br />
      <section id="utiles">
         <h1>Infos utiles</h1>
         <div class="container d-flex row align-center more-infos">
            <div id="dates">
               <h2>Dates importantes</h2>
               <div id="dates_importantes">
                  <div class="dadates">
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
               <iframe class="emplacement_map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46611.73923899836!2d6.005719507128119!3d43.099603312579895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77c8a07f5a809fbd!2sVillage%20Club%20Mil%C3%A9ade%20Carqueiranne!5e0!3m2!1sfr!2sfr!4v1669663331592!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               <div id="nav_bas">
                  <div id="bulles1" class="bulle">
                     <h6 class="txt_bulles">S'inscrire</h6>
                     <a href="./inscription.php" aria-label="inscription" class="flèches">

                        <div class="flèches_background">
                           <img src="./assets/img/Arrow 1.png" alt="">
                        </div>

                     </a>
                  </div>
                  <div id="bulles2" class="bulle">
                     <h6 class="txt_bulles">Plan d'accès</h6>
                     <a href="./plan-dacces.php" aria-label="plan-dacces" class="flèches">

                        <div class="flèches_background">
                           <img src="./assets/img/Arrow 1.png" alt="">
                        </div>

                     </a>
                  </div>
                  <div id="bulles3" class="bulle">
                     <h6 class="txt_bulles">Contact</h6>
                     <a href="./contact.php" aria-label="contact" class="flèches">
                        <div class="flèches_background">
                           <img src="./assets/img/Arrow 1.png" alt="">
                        </div>
                     </a>
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