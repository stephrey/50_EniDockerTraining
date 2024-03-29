<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


@ob_start(); //???
session_start();
if (!isset($_SESSION["nbRefreshs"]) || empty($_SESSION["nbRefreshs"])) {
    $_SESSION["nbRefreshs"] = 0;
    $_SESSION["listPrimes"] = array();
}

// Rempli listPrimes & retourne true si $n est premier
function isPrime($n)
{
    if ($n == 1) {
        return false;
    }

    foreach ($_SESSION["listPrimes"] as $v) {
        if ($n % $v == 0) {
            return false;
        }

    }
    $_SESSION["listPrimes"][] = $n;
    return true;

}

$hostname = gethostname();
$ip = gethostbyname($hostname);
//$ip=$_SERVER['SERVER_ADDR'];

$_SESSION["nbRefreshs"]++;

$textRefreshs = $_SESSION["nbRefreshs"] . " qui ";
$textRefreshs .= isPrime($_SESSION["nbRefreshs"]) ? "EST " : "n'est PAS ";
$textRefreshs .= "premier.";

$textListPrimes = "";
foreach ($_SESSION["listPrimes"] as $v) {
    $textListPrimes .= $v . ", ";
}

$textListPrimes = substr($textListPrimes, 0, -2);

?>

<!DOCTYPE html>
<html>
<head>



<meta charset="utf-8">

<title>L'hôte et des nombres</title>

<style>
    h1 {
        text-align: center;
    }
    .textRefreshs {
        font-size: 1.6em;
    }
</style>
</head>

<body>
    <h1>
        Hôte: <?php echo $hostname . " (" . $ip . ")"; ?>
    </h1>
    <p><div class="textRefreshs">
        Nombre de "Refreshs": <?php echo $textRefreshs ?>
    </div></p>
    Liste des nombres premiers trouvés (<?php echo count($_SESSION["listPrimes"]); ?>): <?php echo $textListPrimes; ?>
</body>
</html>


