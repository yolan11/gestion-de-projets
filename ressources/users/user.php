<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateur <?= $user['firstname'] ?> <?= $user['lastname'] ?></title>
</head>
<body>
<h1>Utilisateur</h1>
<ul>
    <li>Prénom: <?= $user['firstname'] ?></li>
    <li>Nom: <?= $user['lastname'] ?></li>
    <li>Email: <?= $user['email'] ?></li>
    <li>Créé le: <?= \Carbon\Carbon::parse($user['created_at'])->format('d/m/Y H:i') ?></li>
</ul>
</body>
</html>