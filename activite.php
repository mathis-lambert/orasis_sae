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

<body id="activites">
    <?php include_once 'assets/includes/_navbar.php' ?>
    <div class="container">
        <h1 class="white">Les activités prévues</h1>
        <div class="act">
            <div class="activite">
                <details>
                    <summary>
                        <div id="activite_content">
                            <div><img id="img_act" src="./assets/img/randonnee.jpg" alt=""></div>
                            <div>
                                <h3>Randonnée</h3>
                            </div>
                        </div>
                        <div class="details-modal-overlay"></div>
                    </summary>

                    <div class="details-modal">
                        <div class="details-modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                            </svg>
                        </div>
                        <div class="details-modal-title">
                            <h1>Randonnée</h1>
                        </div>
                        <div class="details-modal-content">
                            <p>
                                <li>Points de contrôles à atteindre avec un concours photo à chaque checkpoints pour pouvoir faire traiter ces photos par un ordinateur.</li>
                                <li>Ballotin de confiserie pour le vainqueur des plus belles photos.</li>
                            </p>
                        </div>
                    </div>
                </details>
            </div>

            <div class="activite">
                <details>
                    <summary>
                        <div id="activite_content">
                            <div><img id="img_act" src="./assets/img/snorkeling.jpg" alt=""></div>
                            <div>
                                <h3>Snorkeling</h3>
                            </div>
                        </div>
                        <div class="details-modal-overlay"></div>
                    </summary>

                    <div class="details-modal">
                        <div class="details-modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                            </svg>
                        </div>
                        <div class="details-modal-title">
                            <h1>Snorkeling</h1>
                        </div>
                        <div class="details-modal-content">
                            <p>
                                <li>plongée amateur pour découvrir les fonds marins de la côte d’azur.</li>
                            </p>
                        </div>
                    </div>
                </details>
            </div>

            <div class="activite">
                <details>
                    <summary>
                        <div id="activite_content button_act">
                            <div><img id="img_act" src="./assets/img/jeux_de_societe.jpg" alt=""></div>
                            <div>
                                <h3>Jeux de société</h3>
                            </div>
                            <div class="details-modal-overlay"></div>
                    </summary>

                    <div class="details-modal">
                        <div class="details-modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                            </svg>
                        </div>
                        <div class="details-modal-title">
                            <h1>Jeux de société</h1>
                        </div>
                        <div class="details-modal-content">
                            <p>
                                <li>Jeux de sociétés en lien avec l’informatique.</li>
                            </p>
                        </div>
                    </div>
                </details>
            </div>

            <div class="activite">
                <details>
                    <summary>
                        <div id="activite_content">
                            <div><img id="img_act" src="./assets/img/gala.jpg" alt=""></div>
                            <div>
                                <h3>Soirée de Gala</h3>
                            </div>
                        </div>
                        <div class="details-modal-overlay"></div>
                    </summary>

                    <div class="details-modal">
                        <div class="details-modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                            </svg>
                        </div>
                        <div class="details-modal-title">
                            <h1>Snorkeling</h1>
                        </div>
                        <div class="details-modal-content">
                            <p>
                                <li>Dégustations de vin (bandol, cassis …)</li>
                                <li>Karaoké</li>
                                <li>Chaise musicale</li>
                            </p>
                        </div>
                    </div>
                </details>
            </div>
        </div>
    </div>

    </div>
    </div>
    <?php include_once 'assets/includes/_footer.php' ?>

    <!-- Javascript import files -->
    <script src="assets/app/index.js"></script>
    <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>