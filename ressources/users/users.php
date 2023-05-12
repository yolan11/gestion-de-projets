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
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <tr>
            <th scope="row"><?= $user['idusers'] ?></th>
            <td><?= $user['surname'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>