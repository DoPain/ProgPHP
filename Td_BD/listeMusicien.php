
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TD Base de Données</title>
    <link rel="stylesheet" href="pres.css">
</head>
<body>
<h1>TD3 Base de Données</h1>
<?php
if (substr($_SERVER['PHP_SELF'],0,4)!="info"){
    echo "<h3>Utilisez ce <a href=\"http://info-timide.iut.u-bordeaux.fr/TD3/baseDonnee.php\">lien</a> pour pouvoir acceder à la base de donnée et sortir du localHost</h3>";
}
?>
<a href="listeMusicien2.php" class="retour">Exercice 2</a>
<br>
<?php
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$sql = "Select Nom_Musicien from Musicien Where Nom_Musicien Like 'B%' ";
$query = $pdo->query($sql);
foreach ($query as $row) {
    echo 'Nom : ' . $row['Nom_Musicien'] ;
    echo "<br>";
}
?>
<a href="listeMusicien.php" class="retour"><- Retour <-</a>
<a href="../index.html"> Retourner à l'accueil </a>

</body>
</html>


