<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
<?php

// Crée un cookie "vu" qui a comme valeur "0"
setcookie('vu', 0);

$nbCookie = $_COOKIE['vu'];

if (isset($_COOKIE['vu'])) { 
    $nbCookie++;
    setcookie('vu',$nbCookie);
    echo "Bonjour"." "."Je t'ai vu " , $nbCookie, " fois";
} else {
    echo "Je ne t'ai toujours pas vu";
}

?>

<br>
<a href="../index.html"> Retourner à l'accueil </a>
</body>
</html>
