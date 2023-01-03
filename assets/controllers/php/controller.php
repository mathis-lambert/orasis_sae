<?php
define('MyConst', TRUE);
include_once '../../../config/config.php';
session_start();

$data = file_get_contents('php://input');


if ($data == "") die();

$error = false;

$d = json_decode($data, true);

/* Class session */
class Session
{
    public $id;
    public $role;
    public $email;
    public $firstname;
    public $lastname;

    public function __construct($id, $role, $email, $firstname, $lastname)
    {
        $this->id = intval($id);
        $this->role = intval($role);
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function __setSession()
    {
        $_SESSION['id'] = $this->id;
        $_SESSION['role'] = $this->role;
        $_SESSION['email'] = $this->email;
        $_SESSION['firstname'] = $this->firstname;
        $_SESSION['lastname'] = $this->lastname;
        $_SESSION['logged'] = true;
    }
}

/* TRAITEMENT DES INSCRIPTIONS */
if (isset($d['inscription'])) {
    if (!isset($_SESSION) || !isset($_SESSION['logged']) || $_SESSION['logged'] == false) {
        $mail = $d['inscription']['email'];
        $nom = $d['inscription']['nom'];
        $prenom = $d['inscription']['prenom'];
        $password = $d['inscription']['password'];

        $checkMail = "SELECT * FROM users WHERE userEmail = ?";
        if ($stmt = $pdo->prepare($checkMail)) {
            $stmt->bindValue(1, htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'));
            $stmt->execute();
            $user = $stmt->fetch();
            if ($user) {
                echo json_encode(["error" => $error = true, "method" => "inscription", $id = null, "message" => "Cet email est déjà utilisé"]);
                exit;
            } else {
                $sql = "INSERT INTO users (userFirstname, userLastname, userEmail, userPassword) VALUES (?, ?, ?, ?)";

                if ($stmt = $pdo->prepare($sql)) {
                    $stmt->bindValue(1, htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'));
                    $stmt->bindValue(2, htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8'));
                    $stmt->bindValue(3, htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'));
                    $stmt->bindValue(4, password_hash($password, PASSWORD_DEFAULT));
                    $stmt->execute();

                    $session = new Session($pdo->lastInsertId(), 0, $mail, $prenom, $nom);
                    $session->__setSession();

                    echo json_encode(["error" => $error, "method" => "inscription", $id = $pdo->lastInsertId()]);
                    exit;
                } else {
                    echo json_encode(["error" => $error = true, "method" => "inscription", $id = null]);
                    exit;
                }
            }
        }
    } else {
        echo json_encode(["error" => $error = true, "method" => "inscription", $id = null, "message" => "Vous êtes déjà connecté"]);
        exit;
    }
}
/* ----- */

/* TRAITEMENT DES CONNEXIONS */
if (isset($d['connexion'])) {
    if (!isset($_SESSION) || !isset($_SESSION['logged']) || $_SESSION['logged'] == false) {
        $pseudo = $d['connexion']['email'];
        $password = $d['connexion']['password'];

        $sql = "SELECT * FROM users WHERE userEmail = ?";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindValue(1, htmlspecialchars($pseudo, ENT_QUOTES, 'UTF-8'));
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                if ($row = $stmt->fetch()) {
                    $userId = $row["userId"];
                    $pseudo = $row["userEmail"];
                    $hashed_password = $row["userPassword"];
                    $role = $row["userRole"];

                    if (password_verify($password, $hashed_password)) {

                        $session = new Session($userId, $role, $pseudo, $row["userFirstname"], $row["userLastname"]);
                        $session->__setSession();

                        echo json_encode(["error" => $error, "method" => "connexion", $id = $userId, "message" => "Connexion réussie"]);
                        exit;
                    } else {
                        echo json_encode(["error" => $error = true, "method" => "connexion", $id = null, "message" => "Le mot de passe est incorrect"]);
                        exit;
                    }
                }
            } else {
                echo json_encode(["error" => $error = true, "method" => "connexion", $id = null, "message" => "Le mail est incorrect"]);
                exit;
            }
        } else {
            echo json_encode(["error" => $error = true, "method" => "connexion", $id  = null, "message" => "Erreur de connexion"]);
            exit;
        }
    } else {
        echo json_encode(["error" => $error = true, "method" => "connexion", $id = null, "message" => "Vous êtes déjà connecté"]);
        exit;
    }
}
/* ----- */

/* TRAITEMENT DES MODIFICATIONS */
if (isset($d['edit'])) {
    if (in_array($_SESSION['role'], [1, 2, 3])) {
        if ($d['edit']['target'] == "users") {
            $id = $d['edit']['id'];
            $mail = $d['edit']['email'];
            $nom = $d['edit']['nom'];
            $prenom = $d['edit']['prenom'];
            $role = $d['edit']['role'];

            $sql = "UPDATE users SET userFirstname = ?, userLastname = ?, userEmail = ?, userRole = ? WHERE userId = ?";

            if ($stmt = $pdo->prepare($sql)) {
                $stmt->bindValue(1, htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8'));
                $stmt->bindValue(2, htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'));
                $stmt->bindValue(3, htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'));
                $stmt->bindValue(4, $role);
                $stmt->bindValue(5, $id);
                $stmt->execute();

                echo json_encode(["error" => $error, "method" => "edit", "target" => "user", $id = $id, "message" => "Modification réussie"]);
                exit;
            } else {
                echo json_encode(["error" => $error = true, "method" => "edit", "target" => "user", $id = null, "message" => "Erreur de modification"]);
                exit;
            }
        } else if ($d['edit']['target'] == "article") {
            $id = $d['edit']['id'];
            $titre = $d['edit']['titre'];
            $contenu = $d['edit']['contenu'];
            $auteur = $d['edit']['auteur'];
            $statut = $d['edit']['statut'];

            $sql = "UPDATE articles SET articleTitle = ?, articleText = ? WHERE articleId = ?";
            $sql2 = "UPDATE written SET writtenStatus = ?, writtenUserId = ? WHERE writtenArticleId = ?";

            if ($stmt = $pdo->prepare($sql)) {
                $stmt->bindValue(1, htmlspecialchars($titre, ENT_QUOTES, 'UTF-8'));
                $stmt->bindValue(2, $contenu);
                $stmt->bindValue(3, $id);
                $stmt->execute();

                // second statement
                if ($stmt2 = $pdo->prepare($sql2)) {
                    $stmt2->bindValue(1, $statut);
                    $stmt2->bindValue(2, $auteur);
                    $stmt2->bindValue(3, $id);
                    try {

                        $stmt2->execute();
                    } catch (PDOException $e) {
                        echo json_encode(["error" => $error = true, "method" => "edit", "target" => "article", $id = null, "message" => "Cet auteur n'existe pas"]);
                        exit;
                    }
                } else {
                    echo json_encode(["error" => $error = true, "method" => "edit", "target" => "article", $id = null, "message" => "Erreur de modification"]);
                    exit;
                }

                echo json_encode(["error" => $error, "method" => "edit", "target" => "article", $id = $id, "message" => "Modification réussie"]);
                exit;
            } else {
                echo json_encode(["error" => $error = true, "method" => "edit", "target" => "article", $id = null, "message" => "Erreur de modification"]);
                exit;
            }
        }
    } else {
        echo json_encode(["error" => $error = true, "method" => "edit", "target" => "article", $id = null, "message" => "Vous n'avez pas les droits pour effectuer cette action"]);
        exit;
    }
}

/* TRAITEMENT DES SUPPRESSIONS */
if (isset($d['delete'])) {
    if (in_array($_SESSION['role'], [2, 3])) {
        if ($d['delete']['target'] == 'users') {
            if ($_SESSION['id'] == $d['delete']['id']) {
                echo json_encode(["error" => $error = true, "method" => "delete", "target" => "user", $id = null, "message" => "Vous ne pouvez pas vous supprimer"]);
                exit;
            } else {
                $id = $d['delete']['id'];

                $sql = "DELETE FROM users WHERE userId = ?";

                if ($stmt = $pdo->prepare($sql)) {
                    $stmt->bindValue(1, $id);
                    $stmt->execute();

                    echo json_encode(["error" => $error, "method" => "delete", "target" => "user", $id = $id, "message" => "Suppression réussie"]);
                    exit;
                } else {
                    echo json_encode(["error" => $error = true, "method" => "delete", "target" => "user", $id = null, "message" => "Erreur de suppression"]);
                    exit;
                }
            }
        } else if ($d['delete']['target'] == 'article') {
            $id = $d['delete']['id'];

            $sql = "DELETE FROM articles WHERE articleId = ?";
            $sql2 = "DELETE FROM written WHERE writtenArticleId = ?";

            if ($stmt = $pdo->prepare($sql)) {
                $stmt->bindValue(1, $id);
                $stmt->execute();

                // second statement
                if ($stmt2 = $pdo->prepare($sql2)) {
                    $stmt2->bindValue(1, $id);
                    $stmt2->execute();
                } else {
                    echo json_encode(["error" => $error = true, "method" => "delete", "target" => "article", $id = null, "message" => "Erreur de suppression"]);
                    exit;
                }

                echo json_encode(["error" => $error, "method" => "delete", "target" => "article", $id = $id, "message" => "Suppression réussie"]);
                exit;
            } else {
                echo json_encode(["error" => $error = true, "method" => "delete", "target" => "article", $id = null, "message" => "Erreur de suppression"]);
                exit;
            }
        }
    } else {
        echo json_encode(["error" => $error = true, "method" => "delete", "target" => "user", $id = null, "message" => "Vous n'avez pas les droits pour effectuer cette action"]);
        exit;
    }
}

if (isset($d['submitArticle'])) {
    if (in_array($_SESSION['role'], [1, 2, 3])) {
        $titre = $d['submitArticle']['titre'];
        $contenu = $d['submitArticle']['resume'];
        $auteur = $_SESSION['id'];
        $file = $d['submitArticle']['file'];

        /* stocker titre, resumé et auteur dans la bdd, et envoyer le fichier pdf par mail */
        $sql = "INSERT INTO articles (articleTitle, articleText) VALUES (?, ?)";
        $sql2 = "INSERT INTO written (writtenStatus, writtenUserId, writtenArticleId) VALUES ('pending', ?, ?)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindValue(1, htmlspecialchars($titre, ENT_QUOTES, 'UTF-8'));
            $stmt->bindValue(2, $contenu);
            $stmt->execute();

            $lastId = $pdo->lastInsertId();

            if ($stmt2 = $pdo->prepare($sql2)) {
                $stmt2->bindValue(1, $auteur);
                $stmt2->bindValue(2, $lastId);
                $stmt2->execute();

                $to = $globalAdminMail;
                $subject = "Nouvel article en attente de validation";
                $message = "Un nouvel article a été soumis par " . $_SESSION['firstname'] . " et est en attente de validation. Vous pouvez le consulter en vous connectant à l'adresse suivante : http://localhost:8888/Projet%20PHP%20-%20Blog/admin.php";
                $headers = "From: " . $_SESSION['firstname'] . " <" . $_SESSION['email'] . ">";
                try {
                    mail($to, $subject, $message, $headers);
                } catch (Exception $e) {
                    echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Erreur d'envoi du fichier, veuillez contacter " . $globalAdminMail . " pour signaler le problème"]);
                    exit;
                }

                echo json_encode(["error" => $error, "method" => "submitArticle", "target" => "article", $id = $lastId, "message" => "Article soumis"]);
                exit;
            } else {
                echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Erreur de soumission"]);
                exit;
            }
        } else {
            echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Vous n'avez pas les droits pour créer un article"]);
        }
    }
}
