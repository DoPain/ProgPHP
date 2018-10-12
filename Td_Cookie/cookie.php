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