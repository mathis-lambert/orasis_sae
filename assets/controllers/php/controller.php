<?php
define('MyConst', TRUE);
include_once '../../../config/config.php';
session_start();

$data = file_get_contents('php://input');

$error = false;

if ($data == "") die();

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
}
/* ----- */

/* TRAITEMENT DES CONNEXIONS */
if (isset($d['connexion'])) {

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
}
/* ----- */

/* TRAITEMENT DES MODIFICATIONS */
if (isset($d['edit'])) {
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

        echo json_encode(["error" => $error, "method" => "edit", $id = $id, "message" => "Modification réussie"]);
        exit;
    } else {
        echo json_encode(["error" => $error = true, "method" => "edit", $id = null, "message" => "Erreur de modification"]);
        exit;
    }
}

/* TRAITEMENT DES SUPPRESSIONS */
if (isset($d['delete'])) {
    if ($_SESSION['id'] == $d['delete']['id']) {
        echo json_encode(["error" => $error = true, "method" => "delete", $id = null, "message" => "Vous ne pouvez pas vous supprimer"]);
        exit;
    } else {
        $id = $d['delete']['id'];

        $sql = "DELETE FROM users WHERE userId = ?";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindValue(1, $id);
            $stmt->execute();

            echo json_encode(["error" => $error, "method" => "delete", $id = $id, "message" => "Suppression réussie"]);
            exit;
        } else {
            echo json_encode(["error" => $error = true, "method" => "delete", $id = null, "message" => "Erreur de suppression"]);
            exit;
        }
    }
}
