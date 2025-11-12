<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=<?php echo isset($_COOKIE["color"]) ? $_COOKIE["color"] :" " ;?>>
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="page2.php" method="POST">
        <input type="radio" id="red" name="color" value="red">
        <label for="red">Rouge</label><br>

        <input type="radio" id="green" name="color" value="green">
        <label for="green">Vert</label><br>

        <input type="radio" id="blue" name="color" value="blue">
        <label for="blue">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>

    <h2><a href="?delete=true">Réinitialiser la couleur</a></h2>
   <?php
   echo isset($_GET['delete']);

 if (isset($_GET['delete'])) {
        setcookie("color", "", time() - 3600);
        echo "<p>Le cookie a bien été supprimé !</p>";
    }
 
   ?>
   


</body>

</html>