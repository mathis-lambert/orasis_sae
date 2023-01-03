<?php
/*
* use this script to encode a pdf from a js form
* and save it to the server
*/

define('MyConst', TRUE);
include_once '../../../config/config.php';
session_start();

$error = false;

$articleTitle = $_POST['titreArticle'];
$articleResume = $_POST['resumeArticle'];
$file = $_FILES['article'];

if (!empty($articleTitle) && !empty($articleResume) && !empty($file)) {
    if (in_array($_SESSION['role'], [1, 2, 3])) {
        $auteur = $_SESSION['id'];


        /* stocker titre, resumé et auteur dans la bdd, et stocker le fichier pdf dans le dossier ./articles */
        $sql = "INSERT INTO articles (articleTitle, articleText) VALUES (?, ?)";
        $sql2 = "INSERT INTO written (writtenStatus, writtenUserId, writtenArticleId) VALUES ('pending', ?, ?)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindValue(1, htmlspecialchars($articleTitle, ENT_QUOTES, 'UTF-8'));
            $stmt->bindValue(2, $articleResume);
            $stmt->execute();

            $lastId = $pdo->lastInsertId();

            if ($stmt2 = $pdo->prepare($sql2)) {
                $stmt2->bindValue(1, $auteur);
                $stmt2->bindValue(2, $lastId);
                $stmt2->execute();


                /* FILE ENCODING  PART */
                $fileName = $file['name'];
                $fileTmpName = $file['tmp_name'];
                $fileSize = $file['size'];
                $fileError = $file['error'];
                $fileType = $file['type'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('pdf');

                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 10000000) {
                            // give the file name, the name of the author + the date + the id of the article
                            $fileNameNew = "AuthorID_" . $auteur . "_" . date("Y-m-d") . "_ArticleID" . $lastId . "." . $fileActualExt;
                            $fileDestination = '../../../articles_pdf_files/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);

                            echo json_encode(["error" => $error, "method" => "submitArticle", "target" => "article", $id = $lastId, "message" => "Votre article a bien été envoyé, il sera publié après validation par un relecteur"]);
                        } else {
                            echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = $lastId, "message" => "Votre fichier est trop volumineux"]);
                        }
                    } else {
                        echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = $lastId, "message" => "Erreur lors du téléchargement du fichier"]);
                    }
                } else {
                    echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = $lastId, "message" => "Vous ne pouvez pas télécharger ce type de fichier"]);
                }
            } else {
                echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Erreur de soumission"]);
                exit;
            }
        } else {
            echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Vous n'avez pas les droits pour créer un article"]);
        }
    }
} else {
    echo json_encode(["error" => $error = true, "method" => "submitArticle", "target" => "article", $id = null, "message" => "Veuillez remplir tous les champs"]);
}
