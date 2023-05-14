<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
</head>
<body>
<h1>Projets</h1>
    <div class="tab">
        <table id="projects-tab">
            <thead id="titles">
                <tr>
                    <th>ID</th>
                    <th>Nom du project</th>
                    <th>Deadline</th>
                    <th>Equipe</th>
                    <th>Voir les détails</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project) : ?>
                <tr>
                    <td><?= $project['idProjets'] ?></td>
                    <td><?= $project['name'] ?></td>
                    <td><?= $project['deadline'] ?></td>
                    <td><?= $project['team_id'] ?></td>
                    <td><a href="projects/details/<?php echo $project['idProjets']; ?>">Voir les détails</a></td>
                    <td><a href="/projects/modify/<?php echo $project['idProjets']; ?>">Modifer</a></td>
                    <td><a href="/projects/delete/<?php echo $project['idProjets']; ?>">Supprimer</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <form autocomplete="off" action="projects/create" method="POST">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" required placeholder="Nom du projet">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required placeholder="Description">
        <label for="deadline">Deadline</label>
        <input type="date" name="deadline" id="deadline" required placeholder="Deadline">
        <label for="team">Equipe</label>
        <input type="text" name="team" id="team" required placeholder="Equipe">
        <button type="submit" id="create_project_form">Créer le projet</button>
    </form>

</body>
</html>