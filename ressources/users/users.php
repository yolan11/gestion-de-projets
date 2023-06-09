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
            <td><a class="details-inlist" href="/user/details/<?php echo $user['idusers']; ?>">Voir les détails</a></td>
            <td><a class="modify-inlist" href="#popup<?= $user['idusers']; ?>">Modifer</a></td>
            <td>
                <form class="aligner" action="/user/delete/<?= $user['idusers']; ?>" method="POST">
                    <button class="delete-inlist" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <div id="popup<?= $user['idusers']; ?>" class="overlay">
            <div class="popup">
                <h2>Saisir les modifications</h2>
                <a class="close" href="#">&times;</a>
                <form action="/user/update/<?= $user['idusers']; ?>" method="POST">
                    <input placeholder="<?= $user['name']?>" type="text" name="name" id="name" value="<?= $user['name']?>" required>
                    <input placeholder="<?= $user['surname']?>" type="text" name="surname" id="surname" value="<?= $user['surname']?>" required>
                    <input placeholder="<?= $user['email']?>" type="email" name="email" id="email" value="<?= $user['email']?>" required>
                    <button type="submit">Modifier l'utilisateur</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>