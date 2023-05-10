<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<!-- Connexion -->

<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpintro', 'jeremy', 'toor');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>


<body>
<h1>Accueil</h1>
</body>
</html>