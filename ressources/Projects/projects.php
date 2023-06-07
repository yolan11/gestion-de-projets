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
                    <td>
                        <?php
                        $timeToString = strtotime($project['deadline']);
                        $swap = date("d/m/Y", $timeToString);
                        echo $swap;
                        ?>
                    </td>
                    <td><?= $project['team_id'] ?></td>
                    <td><a class="details-inlist">Voir les détails</a></td>
                    <td><a class="modify-inlist" href="#popup<?= $project['idProjets']; ?>">Modifer</a></td>
                    <td>
                        <form class="aligner" action="/projects/delete/<?= $project['idProjets']; ?>" method="POST">
                            <button class="delete-inlist" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>

                    <div id="popup<?= $project['idProjets']; ?>" class="overlay">
                        <div class="popup">
                            <h2>Saisir les modifications</h2>
                            <a class="close" href="#">&times;</a>
                            <form class="popup-form" action="/projects/update/<?= $project['idProjets']; ?>" method="POST">
                                <label for="name">Nom</label>
                                <input placeholder="<?= $project['name']?>" type="text" name="name" id="name" value="<?= $project['name']?>" required>
                                <label for="description">Description</label>
                                <input placeholder="<?= $project['description']?>" type="text" name="description" id="description" value="<?= $project['description']?>" required>
                                <label for="deadline">Deadline</label>
                                <input placeholder="<?= $project['deadline']?>" type="date" name="deadline" id="deadline" value="<?= $project['deadline']?>" required>
                                <label for="teamid">Team id</label>
                                <input placeholder="<?= $project['team_id']?>" type="text" name="teamid" id="teamid" value="<?= $project['team_id']?>" required>
                                <button type="submit">Modifier le projet</button>
                            </form>
                        </div>
                    </div>

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