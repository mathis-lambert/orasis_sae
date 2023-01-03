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

</head>

<body>
   <?php include_once 'assets/includes/_navbar.php' ?>
   <div class="container">
   <section id="intervenants">
         <h1 style="color: white;">Les intervenants</h1>
         <h2 style="color: white;">Comité d'organisation</h2>
         <div class="container intervenants_container">
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>THANH PHUONG NGUYEN</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>YASSINE ZNIYED</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>NADÈGE THIRION-MOREAU</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>

            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ERIC MOREAU</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>
         </div>
         <h2 style="color: white;">Soutien administratif</h2>
         <div class="container intervenants_container">
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ADORACION DI SANTI</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>
         </div>
         <h2 style="color: white;">Comité du programme</h2>
         <div class="container intervenants_container">
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>FABIEN BALDACCI</h3>
                  <p>UNIVERSITÉ DE BORDEAUX</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ODILE-MARIE BERGER</h3>
                  <p>INRIA NANCY</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ALICE CAPLIER</h3>
                  <p>GRENOBLE-INP</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>GUILLAUME CARON</h3>
                  <p>UNIVERSITÉ DE PICARDIE J.V</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>SYLVIE CHAMBON</h3>
                  <p>TOULOUSE INP</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>THIERRY CHATAU</h3>
                  <p>UNIVERSITÉ DE CLÉMONT AUV.</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>MICHAEL CLÉMENT</h3>
                  <p>BORDEAUX INP</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>DONATELLO CONTE</h3>
                  <p>UNIVERSITÉ DE BORDEAUX</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>NICOLAS COURTY</h3>
                  <p>UNIVERSITÉ BRETAGNE SUD</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>MICKAËL COUSTATY</h3>
                  <p>LA ROCHELLE UNIVERSITÉ</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>MOHAMED DAOUDI</h3>
                  <p>UNIVERSITÉ DE LILLE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>GERMAIN FORESTIER</h3>
                  <p>UNIVERSITÉ DE HAUTE-ALSACE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>PAUL HONEINE</h3>
                  <p>UNIVERSITÉ DE ROUEN NORMANDIE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>DINO IENCO</h3>
                  <p>INRAE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>BERTRAND KERAUTRET</h3>
                  <p>UNIVERSITÉ LUMIÈRE LYON 2</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ERWAN KERRIEN</h3>
                  <p>INRIA NANCY</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>CAMILLE KURTZ</h3>
                  <p>UNIVERSITÉ PARIS CITÉ</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>OLIVIER LÉZORAY</h3>
                  <p>UNIVERSITÉ DE CAEN</p>
               </div>
            </div><div class="card_container">
               <div id="card_intervenant">
                  <h3>SÉBASTIEN LEFÈVRE</h3>
                  <p>UNIVERSITÉ BRETAGNE SUD</p>
               </div>
            </div><div class="card_container">
               <div id="card_intervenant">
                  <h3>NICOLAS LOMÉNIE</h3>
                  <p>UNIVERSITÉ PARIS CITÉ</p>
               </div>
            </div><div class="card_container">
               <div id="card_intervenant">
                  <h3>ANTOINE MANZANERA</h3>
                  <p>ENSTA PARIS, IPP</p>
               </div>
            </div><div class="card_container">
               <div id="card_intervenant">
                  <h3>BENOÎT NAEGEL</h3>
                  <p>UNIVERSITÉ DE STRASBOURG</p>
               </div>
            </div><div class="card_container">
               <div id="card_intervenant">
                  <h3>THANH PHUONG NGUYEN</h3>
                  <p>UNIVERSITÉ DE TOULON</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>BENJAMIN PERRET</h3>
                  <p>ESIEE PARIS</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>YVAIN QUÉAU</h3>
                  <p>GREYC, CNRS</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>JEAN-YVES RAMEL</h3>
                  <p>UNIVERSITÉ DE TOUR</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>EWELINA RUPNIK</h3>
                  <p>UNIVERSITÉ GUSTAVE EIFFEL</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>GILLES SIMON</h3>
                  <p>UNIVERSITÉ DE LORRAINE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ANTOINE TABBONE</h3>
                  <p>UNIVERSITÉ DE LORRAINE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>CÉLINE TEULIÈRE</h3>
                  <p>UNIVERSITÉ DE CLÉMONT AUVERGNE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>LAURE TOUGNE</h3>
                  <p>UNIVERSITÉ LUMIÈRE LYON 2</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>SYLVIE TREUILLET</h3>
                  <p>UNIVERSITÉ D'ORLÉANS</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>ANTOINE VACAVANT</h3>
                  <p>UNIVERSITÉ DE CLÉMONT AUVERGNE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>PASCAL VASSEUR</h3>
                  <p>UNIVERSITÉ DE PICARDIE J. VERNE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>JONATHAN WEBBER</h3>
                  <p>UNIVERSITÉ DE HAUTE-ALSACE</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>CÉDRIC WEMMERT</h3>
                  <p>UNIVERSITÉ DE STRASBOURG</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>LAURENT WENDLING</h3>
                  <p>UNIVERSITÉ PARIS CITÉ</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>YASSINE ZNIYED</h3>
                  <p>UUNIVERSITÉ DE TOULON</p>
               </div>
            </div>
            <div class="card_container">
               <div id="card_intervenant">
                  <h3>A COMPLÉTER</h3>
                  <p>A COMPLÉTER</p>
               </div>
            </div>

         </div>

         <h2></h2>
      </section>
   </div>
      <?php include_once 'assets/includes/_footer.html' ?>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/accueil.js"></script>
   </body>

</html>