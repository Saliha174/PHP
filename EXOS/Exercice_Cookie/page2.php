

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="css/style.css">
       <?php
     error_reporting(E_ALL);
    ini_set("display_errors", 1);


    
if(isset($_POST["color"])){
    $color=$_POST["color"];
}elseif(isset($_COOKIE['color'])){
    $color=$_COOKIE['color'];
}else{
    $color="";
}



    setcookie("color",$color,time()+3600);
    
    
   

    ?>
</head>

<body class=<?php echo isset($_COOKIE["color"]) ? $color :" " ;?>> <!-- Appliquer la classe correspondante pour la couleur -->
    <h1>Bienvenue sur la page 2</h1>
    <p>Ceci est une deuxième page qui conserve la couleur de fond sélectionnée.</p>

    <h2><a href="index.php">Retour à la première page</a></h2>
 
</body>

</html>