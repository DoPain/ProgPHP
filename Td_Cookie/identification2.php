<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TD cookie</title>
</head>
<body>
<h1>Identification</h1> 

<?php
if (isset($_POST["login"]) && isset($_POST["password"])){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
    $user = 'ETD';
    $password = 'ETD';
    $pdo = new PDO($dsn, $user, $password);
    $sqlp = $pdo ->prepare "Select  from Musicien Where Nom_Musicien Like 'B%' ";

  
}
?>

<a href="../index.html"> Retourner à l'accueil </a>

</body>
</html>
