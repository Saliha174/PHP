<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */
$age=25.5;
if (is_int($age)){
    if ($age<120 && $age>0){
        echo " L'age est valide!<br>";
    }else {
        echo "L'age n 'est pas valide <br>";
    }
}else{
 echo " Veuillez saisir un nombre entier <br>";

}
/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
 */
$montant=75;
if($montant>=100){
    $total=0.9*$montant;
    echo "Vous avez une reduction de 10% , le prix sera de $total"."<br>";
}elseif($montant>50 && $montant<100){
    $total=0.95*$montant;
    echo "Vous avez une reduction de 5%  , le prix sera de $total"."<br>";
}else{
    echo "Vous avez droit à zero reduction <br>";
}

/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */

$jour="mercredi";
switch($jour) {
        case "lundi":
            echo "<p>On est lundi</p>";
            break;
        case "mardi":
            echo "<p>On est mardi</p>";
            break;
        case "mercredi":
            echo "<p>On est mercredi</p>";
            break;
            case "jeudi":
            echo "<p>On est jeudi</p>";
            break;
            case "vendredi":
            echo "<p>On est vendredi</p>";
            break;
        case "samedi":
            echo "<p>On est samedi</p>";
            break;
        
        default: 
            echo "<p>on est dimanche</p>";
    }
/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */
$var1="you";
$var2="you";



if (gettype($var1)===gettype($var2) && $var1==$var2 ){
    echo "les deux valeur sont identiques en type et en valeur <br>";
}else{
  echo "les deux valeur ne sont pas identiques en type et en valeur <br>";  
}

/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */
$nb1=3;
$nb2=17;
$nb3=12;

$moyenne=($nb1+$nb2+$nb3)/3;

if($moyenne>=10){
    echo "Vous avez plus que la moyenne , bravo!Elle est de $moyenne <br>";
}else{
    echo "Vous n'avez pas la moyenne , desolée! <br>";

}
/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */
$var=null;

if (isset($var)){
    echo " La variable existe bien , sa valeur est $var <br>";
}else{
    echo " La variable n'existe pas! <br>";

}

/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
 * 
 */
$nom=14;

if (!empty($nom)){
    echo "Vous avez bien rempli le champ! <br>";
}else{
    echo " Vous devez remplir le champ <br>";

}


/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */
$const1=26;
$modulo=$const1%2;
if ($modulo==0){
    echo "Le nombre $const1 est pair <br>";
}else{
    echo " Votre Le $const1 est impair <br>";

}



/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */
$agebis=80;

if($agebis<=10){
    echo " enfant <br>";
}elseif($agebis<18){
    echo " ado <br>";

}elseif($agebis<65){
    echo " adulte <br>";

}elseif($agebis<120){
    echo " senior <br>";
}elseif($agebis<150){
    echo " 6 pieds sous terre <br>";

}


/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */
$empreinte=true;
$mdp=true;

if($empreinte xor $mdp){
    echo " Vous etes bien connecté! <br>";
}else{
    echo " C est soit empreinte soit MDP <br>";

}

?>