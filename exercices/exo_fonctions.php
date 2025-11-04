<?php

/*

1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/

function greet(){
    echo "Hello, world!" ;
}
greet();
/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/
echo "<br>";
function greetUser($name){
    echo "Hello, $name!";
}
greetUser("Saliha");


/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/
echo "<br>";

function sum($a,$b){
    $x=$a+$b;
   return " le resultat de $a + $b = $x";
}
echo sum(10,15);

/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/
echo "<br>";


function sumArray($numbers){
    $somme=0;
foreach($numbers as $valeur ){
    $somme+=$valeur;
    
}
 return" La somme des nombres du tableau est egal a $somme";
}
$tab=[1,2,3,4];
echo sumArray($tab);
/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!

Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/
echo "<br>";

function greetWhiteTime($name,$timeOfDay="day"){
    return "Good $timeOfDay, $name!";

}
echo greetWhiteTime("Charlie ");
echo "<br>";
echo greetWhiteTime("Charlie","Monday");



/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/
echo "<br>";

function getFruits(){
    return $fruits=["pomme","kiwi","cerise"];
}
print_r(getFruits()) ;
/*

7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/
echo "<br>";

function reverseString($str){
    return strrev($str);
}

echo reverseString("table");
/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/
echo "<br>";

function divide($a,$b){
    if($b!=0){
        $y=$a/$b;
        return "la division vaut $y";
        
    }else{
        return 'erreur';
    }
}
echo divide(4,0);
/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/
echo "<br>";

function generateMultiplicationTable($number){
    for ($i=0; $i <=10 ; $i++) { 
    $tab[]=$number*$i;
    }
    return $tab;
}

print_r (generateMultiplicationTable(3));

/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".

*/
echo "<br>";

function checkEligibility($age, $hasLicense){
    if($age>=18 && $hasLicense===true){
        return "Vs etes eligible";
    }
    return " Not Eligible";
}

echo checkEligibility(19,true);
?>