<?php
if (!defined('MyConst')) {
    die('Direct access not permitted');
}
define('DB_SERVER', 'SERVER_NAME');
define('DB_USERNAME', 'USERNAME');
define('DB_PASSWORD', 'PASSWORD');
define('DB_NAME', 'DB_NAME');

setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
date_default_timezone_set('Europe/Paris');

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");

    $settings = [];
    $sql = "SELECT * FROM settings";
    $result = $pdo->prepare($sql);
    $result->execute();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $settings[$row['SettingsName']] = $row['SettingsValue'];
    }
    // var_dump($settings);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

$roleArray = [
    0 => 'Lecteur',
    1 => 'Relecteur',
    2 => 'Auteur',
    3 => 'Administrateur',
    10 => 'Nouvel utilisateur',
];

$globalAdminMail = "ENTREZ VOTRE ADRESSE MAIL ICI";

function getRoleName($role)
{
    global $roleArray;
    return $roleArray[$role];
}

function generateRandomString($length = 20)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
function generateRandomNumber($length = 20)
{
    return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
function getDayName($dayOfWeek)
{
    switch ($dayOfWeek) {
        case 1:
            return 'Lundi';
        case 2:
            return 'Mardi';
        case 3:
            return 'Mercredi';
        case 4:
            return 'Jeudi';
        case 5:
            return 'Vendredi';
        case 6:
            return 'Samedi';
        case 7:
            return 'Dimanche';
        default:
            return '';
    }
}
function getMonthName($monthOfYear)
{
    switch ($monthOfYear) {
        case 1:
            return 'Janvier';
        case 2:
            return 'Février';
        case 3:
            return 'Mars';
        case 4:
            return 'Avril';
        case 5:
            return 'Mai';
        case 6:
            return 'Juin';
        case 7:
            return 'Juillet';
        case 8:
            return 'Août';
        case 9:
            return 'Septembre';
        case 10:
            return 'Octobre';
        case 11:
            return 'Novembre';
        case 12:
            return 'Décembre';
        default:
            return '';
    }
}
