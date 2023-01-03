<footer>
  <a href="/">
    <img src="assets/img/white.svg" alt="Logo white" />
  </a>
  <div class="footer-items">
    <div class="footer-item">
      <h1 class="no-style">L'événement</h1>
      <a href="./#programme">Le programme</a>
      <a href="./comite">Comités</a>
      <a href="articles">Les articles</a>
      <a href="activite">Les activités</a>
    </div>
    <div class="footer-item">
      <h1 class="no-style">Informations</h1>
      <a href="plan-dacces">Informations d'accés</a>
      <a href="tarifs">Logement/Tarifs</a>
      <a href="contact">Contact</a>
    </div>
    <div class="footer-item">
      <h1 class="no-style"><?php
                            if (!empty($_SESSION) && isset($_SESSION)) {
                              echo 'Mon compte';
                            } else {
                              echo 'Adhérer';
                            }
                            ?></h1>
      <?php
      if (!empty($_SESSION) && isset($_SESSION)) {
        echo '<a href="espace-perso">Espace perso</a>';
      } else {
        echo '<a href="connexion">Se connecter</a>
          <a href="inscription">S\'inscrire</a>';
      }
      ?>
      <a href="http://www.afrif.asso.fr/?page_id=64" target="_blank">Adhérer à l'AFRIF</a>
    </div>

    <?php
    if (!empty($_SESSION) && isset($_SESSION) && in_array($_SESSION['role'], [2, 3])) {
    ?>
      <div class="footer-item">
        <h1 class="no-style">Auteur</h1>
        <a href="./espace-perso">Espace perso</a>
        <a href="./depot-article">Soummetre un article</a>
        <a href="./discussion-auteurs">Discussion avec les auteurs</a>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="footer-ending text-center">
    <p>
      © 2023 ORASIS. All rights reserved. <br />
      Développé par Mathis LAMBERT, Matthieu COHEN et Clément Favarel
      <br>
      IUT de Toulon - 2023
    </p>
  </div>
</footer>