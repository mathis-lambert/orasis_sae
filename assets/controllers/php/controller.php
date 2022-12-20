<?php
define('MyConst', TRUE);
include_once '../../../config/config.php';
session_start();

$data = file_get_contents('php://input');

$error = false;
$tx = array();
$id = array();

if ($data == "") die();

$d = json_decode($data, true);


/* TRAITEMENT DES INSCRIPTIONS */
if (isset($d['inscription'])) {
    $mail = $d['inscription']['email'];
    $nom = $d['inscription']['nom'];
    $prenom = $d['inscription']['prenom'];
    $password = $d['inscription']['password'];

    $sql = "INSERT INTO users (userFirstname, userLastname, userEmail, userPassword) VALUES (?, ?, ?, ?)";

    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindValue(1, htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'));
        $stmt->bindValue(2, htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8'));
        $stmt->bindValue(3, htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'));
        $stmt->bindValue(4, password_hash($password, PASSWORD_DEFAULT));
        $stmt->execute();

        $_SESSION['user'] = $mail;
        $_SESSION['id'] = $pdo->lastInsertId();

        $tx['inscription'] = true;
        $id['id'] = $pdo->lastInsertId();

        echo json_encode(["error" => $error = true, "method" => "inscription", $id]);
    } else {
        echo "Error: " . $sql . "<br>" . $pdo->error;
        $tx['inscription'] = false;
        $id['id'] = null;
        echo json_encode(["error" => $error = true, "method" => "inscription", $id]);
    }
}

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
                if (password_verify($password, $hashed_password)) {

                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["user"] = $pseudo;

                    $id['id'] = $userId;

                    echo json_encode(["error" => $error, "method" => "connexion", $id, "message" => "Connexion réussie"]);
                } else {
                    $id['id'] = null;
                    echo json_encode(["error" => $error = true, "method" => "connexion", $id, "message" => "Le mot de passe est incorrect"]);
                }
            }
        } else {
            $id['id'] = null;
            echo json_encode(["error" => $error = true, "method" => "connexion", $id, "message" => "Le mail est incorrect"]);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $pdo->error;
        $id['id'] = null;
        echo json_encode(["error" => $error = true, "method" => "connexion", $id, "message" => "Erreur de connexion"]);
    }
}

if (isset($d['send_message'])) {
    echo "send_message";
}
