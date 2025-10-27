<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Bienvenue Sur mon Site</h1>
                   <!--petit mot reconfortant -->
                   <h2>presentation</h2>
                   <!-- presentation des modules -->

                   <p>La date d'aujourd'hui :</p><br>

    

    <?php
    $DateAndTime = date('m-d-Y h:i:s a', time());  
    echo $DateAndTime;
        

    ?>
</body>
</html>