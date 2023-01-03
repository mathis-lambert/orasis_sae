# orasis_sae

SAE3 - Conférence Orasis 2023

site lié à la SAE 301 - gestion de la conférence ORASIS 2023

pour le cloner

```shell
git clone https://github.com/mathis-lambert/orasis_sae orasis
```

## Installation
- importer le fichier `./docs/_orasis.sql` dans votre base de données
- modifier la table `settings` pour y mettre les paramètres de votre serveur de mail
- Pour créer un premier compte avec les droits d'administrateur, il faut modifier la table `users` et mettre le rôle de l'utilisateur à 3 après l'avoir créé, une fois fait, se déconnecter et se reconnecter avec le compte créé.
- dupliquer le fichier `./config/config_sample.php` en `./config/config.php`
- modifier les paramètres de connexion à la base de données dans le fichier `./config/config.php`

## Utilisation
- Les rôles sont définis dans la table `users.userRole` :
    - 0 : Lecteur
    - 1 : Relecteur
    - 2 : Auteur
    - 3 : Administrateur
    - 10 : Nouvel utilisateur
- Les PDFs qui sont demandés lors de la création d'un article sont dans le dossier `./articles_pdf_files/`
- La discussion en temps réel est gérée par le fichier `./assets/controllers/php/fetchMessages.php`

## Développement
- Les fichiers de configuration sont dans le dossier `./config`
- Les fichiers de style sont dans le dossier `./assets/style`
- L'ensemble des traitemts SERVEUR sont faits grâce à Javascript et PHP et modele MVC
- Les fichiers de traitement sont dans le dossier `./assets/controllers/`

