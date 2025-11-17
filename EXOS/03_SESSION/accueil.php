<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_SESSION)) {
        echo "<p>Bonjour  " . htmlspecialchars($_SESSION['name']) . " " . htmlspecialchars($_SESSION['firstName']) . ", Bienvenue!  . </p>";
        echo "<p>Vos parametres de connexion sont : </p>";
        echo " <li> Nom : " . htmlspecialchars($_SESSION['name']) . "</li>";
        echo " <li> prenom : " . htmlspecialchars($_SESSION['firstName']) . "</li>";

        echo " <li> Email : " . htmlspecialchars($_SESSION['email'])  . "</li>";
        echo " <li> Mot de Passe : " . htmlspecialchars($_SESSION['mdp']) . "</li>";
    }
    ?>
    <a href="inscription.php?reset=delete">Déconnexion</a>
    <?php if (isset($_GET['reset'])) {

        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                "PHPSESSID",
                '',
                time() - 3600,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"] // si on les a défini
            );

            session_destroy();
            header("location : inscription.php");
        }
    }


    ?>
</body>

</html>