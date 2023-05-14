<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
</head>
<body>
<h1>Utilisateurs</h1>
<a href="/user/create">Créer un nouvel utilisateur</a>
<table id="projects-tab">
    <thead id="titles">
    <tr>
        <th>ID</th>
        <th>Nom de famille</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Voir les détails</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['idusers'] ?></td>
            <td><?= $user['surname'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><a href="projects/details/<?php echo $user['idusers']; ?>">Voir les détails</a></td>
            <td><a href="/projects/modify/<?php echo $user['idusers']; ?>">Modifer</a></td>
            <td><a href="/projects/delete/<?php echo $user['idusers']; ?>">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>