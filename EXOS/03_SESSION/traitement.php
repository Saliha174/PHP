<?php session_start(); ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        empty($_POST['name'])
        || empty($_POST['firstName'])
        || empty($_POST['email'])
        || empty($_POST['mdp'])

    ) {

        echo "<p>Tous les champs doivent être remplis.</p>";
        die();
    }
    $name = trim($_POST['name']);
    $firstName = trim($_POST['firstName']);
    $email = trim($_POST['email']);
    $mdp = trim($_POST['mdp']);

    if (mb_strlen($name) > 30 || mb_strlen($name) < 2) {
        echo "<p>La longueur de votre nom doit etre compris entre 2 et 30 caractères !</p>";
        die();
    }
    if (mb_strlen($firstName) > 30 || mb_strlen($firstName) < 2) {
        echo "<p>La longueur de votre prénom doit etre compris entre 2 et 30 caractères !</p>";
        die();
    }

    if (mb_strlen($mdp) > 20 || mb_strlen($mdp) < 6) {
        echo "<p>La longueur de votre Mot de Passe doit etre compris entre 6 et 20 caractères !</p>";
        die();
    }
    $_SESSION['name'] = $name;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['email'] = $email;
    $_SESSION['mdp'] = $mdp;
    print_r($_SESSION);
    header("location:accueil.php");
}
