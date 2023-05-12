<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/user/store" method="post">
    <input placeholder="Prénom" type="text" name="name" id="name" required>
    <input placeholder="Nom" type="text" name="surname" id="surname" required>
    <input placeholder="Email" type="email" name="email" id="email" required>
    <button type="submit">Créer un utilisateur</button>
</form>
</body>
</html>
