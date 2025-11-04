<!-- Un dernier pour la route !
/** Exercice supp : Valider une date
*
*  Objectif : Ecrire une fonction qui valide si une date donnée sous la forme 'dd-mm-yyyy' est valide ou non
*  Testez avec plusieurs dates 😉
*
*  Aide : Utiliser strtotime() et verifier si le resultat est false
*
*/
  -->
<?php
    // Note à sois-même, les dates sont par défaut en mm/dd/yyyy alors que c'est français :(
    $userdate = ["08/04/2004", "11/11/2011", "21/12/2012", "12/03/2030"];
 
    foreach ($userdate as $key => $value) {
        $verif = strtotime($value);
        if ($verif) {
            echo date("d/m/Y", $verif) . " " . "date valide <br>";
 
        }else {
            echo "date invalide <br>";
        }
    }
   
?>