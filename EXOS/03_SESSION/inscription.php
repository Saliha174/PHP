<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="traitement.php" method="POST">

        <label for="name">Nom</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="firstName">Prénom</label>
        <input type="text" id="firstName" name="firstName">

        <br>
        <label for="mail">Email</label>
        <input type="email" id="mail" name="email">

        <br>
        <label for="mdp">Mot de Passe</label>
        <input type="password" id="mdp" name="mdp">

        <br>
        <input type="submit" value="Envoyer">

    </form>

</body>

</html>