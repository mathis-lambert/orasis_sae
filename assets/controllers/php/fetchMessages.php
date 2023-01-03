<?php
define('MyConst', TRUE);
include_once '../../../config/config.php';
session_start();
$sql = "SELECT * FROM messages, users WHERE messages.messageUserId = users.userId AND messages.messageStatus = 'ok' ORDER BY messages.messageDate ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($messages);
