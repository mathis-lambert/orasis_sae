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

   <!-- Import full calendar -->
   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js"></script>
</head>

<body class="home">
   <?php include_once 'assets/includes/_navbar.php' ?>

   <div id="calendar_modal" class="hidden">
      <div class="modal">
         <div class="modal-header">
            <h2>Description :</h2>
            <span class="close">&times;</span>
         </div>
         <div class="modal-body">
            <p id="event_desc"></p>
            <br>
            <p id="event_time"></p>
         </div>
      </div>
   </div>


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
                           <br>
                           Les journées seront rythmées par des sessions plénières ainsi que des sessions posters. Plusieurs sessions (7) de conférenciers invités complètent le déroulement de ces journées.
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
         <h1>Orasis</h1>
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
         <div class="container intervenants_container">
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Marc ANTONINI</h3>
                  <p>DR,I3S, CNRS</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Claire DUNE</h3>
                  <p>MCF, Université de Toulon</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Frédéric JURIE</h3>
                  <p>PU, Université de Caen</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Patrick PEREZ</h3>
                  <p>Valeo VP of AI and Scientific Director of valeo.ai</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Peter STURM</h3>
                  <p>DR, INRIA</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>Stefanie WUHRER</h3>
                  <p>CR, INRIA</p>
               </div>
            </div>
         </div>
         <a class="btn btn-blue margin-auto" href="./comite.php">Voir les membres du Comité</a>

         <h2></h2>
      </section>
      <br />
      <section id="programme">
         <h1>Le programme</h1>
         <div id="calendar" class="container" style="padding-top: 20px;"></div>
      </section>
      <br />
      <section id="evenement" style="margin-bottom: 20px;">
         <h1>L'événement</h1>
         <h2>Les derniers articles</h2>
         <div id="articles_container" class="container articles_container">
            <div id="articles">
               <?php
               $sql = "SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId AND written.writtenStatus = 'published' ORDER BY written.writtenDate DESC";
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

               if (!empty($stmt)) {
                  if (count($articles) < 3) {
                     for ($i = 0; $i < count($articles); $i++) {

                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $articles[$i]['articleTitle'] . '</h5>';
                        echo '<p class="card-date">' . $articles[$i]['writtenDate'] . '</p>';
                        echo '<div class="card-text">' . $articles[$i]['articleText'] . '</div>';
                        echo '<a href="article?id=' . $articles[$i]['articleId'] . '" class="btn btn-blue card-link">Voir l\'article</a>';
                        echo '</div>';
                        echo '</div>';
                     }
                  } else {
                     for ($i = 0; $i < 3; $i++) {

                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $articles[$i]['articleTitle'] . '</h5>';
                        echo '<p class="card-date">' . $articles[$i]['writtenDate'] . '</p>';
                        echo '<div class="card-text">' . $articles[$i]['articleText'] . '</div>';
                        echo '<a href="article?id=' . $articles[$i]['articleId'] . '" class="btn btn-blue card-link">Voir l\'article</a>';
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
         <div class="container d-flex row more-infos">
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

   <?php include_once 'assets/includes/_footer.php' ?>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/accueil.js"></script>

   <script>
      // made a comment to describe the code below

      /*
       * FullCalendar v5.7.0
       * Docs & License: https://fullcalendar.io/
       * Ce code sert à afficher le calendrier des dates importantes de l'évènement sur la page d'accueil
       */
      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
         initialView: 'timeGridWeek',

         // able to switch to day view
         headerToolbar: {
            left: 'prev,next today myCustomButton',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
         },

         // edit myCustomButton
         customButtons: {
            myCustomButton: {
               text: 'ORASIS',
               click: function() {
                  calendar.changeView('timeGridWeek');
                  calendar.gotoDate('2023-05-22');
               }
            }
         },

         initialDate: '2023-05-22T08:00:00',
         // display 4 days
         duration: {
            days: 4
         },
         // avoid displaying time on cards
         displayEventTime: false,
         // set the zone
         locale: 'fr',
         // set monday as first day of the week
         firstDay: 1,
         // start the week at 8:00
         slotMinTime: '08:00:00',
         // end the week at 22:00
         slotMaxTime: '22:00:00',
         // padding between events
         slotLabelInterval: '01:00:00',

         hiddenDays: [0, 6],

         eventClick: function(info) {
            // display a popup when clicking on an event
            const calendarModal = document.getElementById('calendar_modal'),
               calendarModalDescription = document.getElementById('event_desc'),
               calendarModalTime = document.getElementById('event_time'),
               html = document.querySelector('html');

            html.classList.add('no-scroll');
            calendarModalDescription.innerHTML = info.event.extendedProps.description;
            calendarModalTime.innerHTML = info.event.start.toLocaleString('fr-FR', {
               hour: 'numeric',
               minute: 'numeric'
            }) + ' - ' + info.event.end.toLocaleString('fr-FR', {
               hour: 'numeric',
               minute: 'numeric'
            });
            calendarModal.classList.remove('hidden');

            // close the popup when clicking on the cross
            const calendarModalClose = calendarModal.querySelector('.close');
            calendarModalClose.addEventListener('click', function() {
               html.classList.remove('no-scroll');
               calendarModal.classList.add('hidden');
            });

            // close the popup when clicking outside of it
            calendarModal.addEventListener('click', function(e) {
               if (e.target === calendarModal) {
                  html.classList.remove('no-scroll');
                  calendarModal.classList.add('hidden');
               }
            });


         },

         events: [{
               title: 'ORASIS 2023',
               start: '2023-05-22',
               end: '2023-05-27',
               extendedProps: {
                  description: 'ORASIS 2023'
               }
            },
            {
               title: 'Accueil des participants',
               start: '2023-05-22T19:00:00',
               end: '2023-05-22T20:00:00',

               extendedProps: {
                  description: 'Accueil des participants, cocktail de bienvenue'
               }
            },
            {
               title: 'Accueil des participants',
               start: '2023-05-23T08:00:00',
               end: '2023-05-23T08:45:00',

               extendedProps: {
                  description: 'Accueil des participants et remise des badges'
               }
            },
            {
               title: 'Dîner',
               start: '2023-05-22T20:00:00',
               end: '2023-05-22T22:00:00',

               extendedProps: {
                  description: 'Dîner'
               }
            },
            {
               title: 'Dîner',
               start: '2023-05-23T20:00:00',
               end: '2023-05-23T22:00:00',

               extendedProps: {
                  description: 'Dîner'
               }
            },
            {
               title: 'Dîner',
               start: '2023-05-24T20:00:00',
               end: '2023-05-24T22:00:00',

               extendedProps: {
                  description: 'Dîner'
               }
            },
            {
               title: 'Gala de clôture',
               start: '2023-05-25T20:00:00',
               end: '2023-05-25T22:00:00',

               extendedProps: {
                  description: 'Gala de clôture, remise des prix, dîner'
               }
            },
            {
               title: 'Ouverture',
               start: '2023-05-23T08:45:00',
               end: '2023-05-23T09:00:00',

               extendedProps: {
                  description: 'Ouverture de la conférence par le président du comité d’organisation'
               }
            },
            {
               title: "Présentation du conférencier 1",
               start: '2023-05-23T09:00:00',
               end: '2023-05-23T10:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 1 "
               }
            },
            {
               title: "3D",
               start: '2023-05-23T10:00:00',
               end: '2023-05-23T11:00:00',

               extendedProps: {
                  description: "Les applications de la 3D"
               }
            },

            {
               title: "Pause café",
               start: '2023-05-23T11:00:00',
               end: '2023-05-23T11:15:00',

               extendedProps: {
                  description: "Pause café"
               }
            },
            {
               title: "Classification",
               start: '2023-05-23T11:15:00',
               end: '2023-05-23T12:15:00',

               extendedProps: {
                  description: "Classification"
               }
            },
            {
               title: "Déjeuner",
               start: '2023-05-23T12:15:00',
               end: '2023-05-23T14:00:00',

               extendedProps: {
                  description: "Déjeuner"
               }
            },
            {
               title: "Présentation du conférencier 2",
               start: '2023-05-23T14:00:00',
               end: '2023-05-23T15:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 2"
               }
            },
            {
               title: "Détection et classification",
               start: '2023-05-23T15:00:00',
               end: '2023-05-23T16:00:00',

               extendedProps: {
                  description: "Détection et classification"
               }
            },
            {
               title: "Pause café",
               start: '2023-05-23T16:00:00',
               end: '2023-05-23T16:15:00',

               extendedProps: {
                  description: "Pause café"
               }
            },
            {
               title: "Robotique",
               start: '2023-05-23T16:15:00',
               end: '2023-05-23T17:15:00',

               extendedProps: {
                  description: "Applications de la robotique"
               }
            },
            {
               title: "Télédétection",
               start: '2023-05-23T17:15:00',
               end: '2023-05-23T18:15:00',

               extendedProps: {
                  description: "Télédétection"
               }
            },
            {
               title: "Présentation du conférencier 3",
               start: '2023-05-24T09:00:00',
               end: '2023-05-24T10:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 3"
               }
            },
            {
               title: "Géométrie",
               start: '2023-05-24T10:00:00',
               end: '2023-05-24T11:00:00',

               extendedProps: {
                  description: "Géométrie"
               }
            },
            {
               title: "Pause café",
               start: '2023-05-24T11:00:00',
               end: '2023-05-24T11:15:00',

               extendedProps: {
                  description: "Pause café"
               }
            },
            {
               title: "Appariement",
               start: '2023-05-24T11:15:00',
               end: '2023-05-24T12:15:00',

               extendedProps: {
                  description: "Appariement"
               }
            },
            {
               title: "Déjeuner",
               start: '2023-05-24T12:15:00',
               end: '2023-05-24T14:00:00',

               extendedProps: {
                  description: "Déjeuner"
               }
            },
            {
               title: "Présentation du conférencier 4",
               start: '2023-05-24T14:00:00',
               end: '2023-05-24T15:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 4"
               }
            },
            {
               title: "Activités",
               start: '2023-05-24T15:00:00',
               end: '2023-05-24T19:00:00',

               extendedProps: {
                  description: "Activités"
               }
            },
            {
               title: "Présentation du conférencier 5",
               start: '2023-05-25T09:00:00',
               end: '2023-05-25T10:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 5"
               }

            },
            {
               title: "Apprentissage profond",
               start: '2023-05-25T10:00:00',
               end: '2023-05-25T11:00:00',

               extendedProps: {
                  description: "Apprentissage profond"
               }
            },
            {
               title: "Pause café",
               start: '2023-05-25T11:00:00',
               end: '2023-05-25T11:15:00',

               extendedProps: {
                  description: "Pause café"
               }
            },
            {
               title: "Apprentissage profond",
               start: '2023-05-25T11:15:00',
               end: '2023-05-25T12:15:00',

               extendedProps: {
                  description: "Apprentissage profond"
               }
            },
            {
               title: "Déjeuner",
               start: '2023-05-25T12:15:00',
               end: '2023-05-25T14:00:00',

               extendedProps: {
                  description: "Déjeuner"
               }
            },
            {
               title: "Présentation du conférencier 6 POSTER",
               start: '2023-05-25T14:00:00',
               end: '2023-05-25T16:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 6"
               }
            },
            {
               title: "Pause café",
               start: '2023-05-25T16:00:00',
               end: '2023-05-25T16:15:00',

               extendedProps: {
                  description: "Pause café"
               }

            },
            {
               title: "Imagerie médicale",
               start: '2023-05-25T16:15:00',
               end: '2023-05-25T17:15:00',

               extendedProps: {
                  description: "Imagerie médicale"
               }
            },
            {
               title: "Poster",
               start: '2023-05-25T17:15:00',
               end: '2023-05-25T18:15:00',

               extendedProps: {
                  description: "Poster"
               }
            },
            {
               title: "Présentation du conférencier 7",
               start: '2023-05-26T09:00:00',
               end: '2023-05-26T10:00:00',

               extendedProps: {
                  description: "Présentation du conférencier 7"
               }
            },
            {
               title: "Signal",
               start: '2023-05-26T10:00:00',
               end: '2023-05-26T11:00:00',

               extendedProps: {
                  description: "Signal"
               }

            },
            {
               title: "Pause café",
               start: '2023-05-26T11:00:00',
               end: '2023-05-26T11:15:00',

               extendedProps: {
                  description: "Pause café"
               }
            },
            {
               title: "Appariement",
               start: '2023-05-26T11:15:00',
               end: '2023-05-26T12:15:00',

               extendedProps: {
                  description: "Appariement"
               },
            },
            {
               title: "Déjeuner",
               start: '2023-05-26T12:15:00',
               end: '2023-05-26T14:00:00',

               extendedProps: {
                  description: "Déjeuner"
               }
            },
            {
               title: "Départ",
               start: '2023-05-26T14:00:00',
               end: '2023-05-26T15:00:00',

               extendedProps: {
                  description: "Départ, merci de votre participation"
               }
            }
         ]

      });
      calendar.render();
   </script>
</body>

</html>