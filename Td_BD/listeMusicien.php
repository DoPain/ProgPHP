
<?php
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);

$_initiale = $_POST['initiale'];
$sql = "Select Nom_Musicien from Musicien Where Nom_Musicien Like '".$_initiale."%'";
$query = $pdo->query($sql);
foreach ($query as $row) {
    echo 'Nom : ' . $row['Nom_Musicien']. "\n";
}
?>




