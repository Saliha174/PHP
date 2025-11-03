<?php

// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */$i=0;
 while($i<=10){
   $x=$i*2;
    echo "$x<br>";
    $i++;
 }


/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 *  */$i=2000;
 echo"<p>Les années depuis 2000 sont : <p>";

 while($i<=2025){
  
    echo "<ul>$i</ul>";
    $i++;
 }
 
/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */
$i=1;
 echo"<p>Les multiples de 3 sont : <p>";

do{
   $x=$i*3;
   echo "$x<br>";
   $i++;
}while ($i<=10);

/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */
 echo"<p>Table de 8 : <p>";

for ($i = 1; $i<=10; $i++){
   $x=$i*8;
   echo"<p> $i*8= $x</p>";

}
/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */
$tr=1;
$td=1;
for($tr;$tr<=5;$tr++){
   echo "$tr,1 |$tr,2 |$tr,3 |$tr,4 |$tr,5 |";
   
}
echo "<br>";

for($tr=1;$tr<=5;$tr++){
   for($td=1;$td<=5;$td++){
      echo "$tr,$td |";
   }
   echo "<br>";
   
}


/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */
  $user = [
            "prenom" => 'ahmed',
            "nom" => '👎👎👎',
            "email" => 'mickeal@yahoo.usa',
            "age" => '50'
        ];
        echo "<p> La personnalité rencontrée ce soir est : </p>";
foreach ($user as $indice => $valeur){
   echo  "$indice : $valeur <br>";
}

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */
echo "<br>";
 $nav = [
            "accueil" => 'accueil',
            "produit" => 'produit',
            "contact" => 'contact'
            
        ];
       
foreach ($nav as $indice => $valeur){
   echo  "$indice : <a href='$valeur'>$valeur</a> <br>";
}

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */
for($tr=1;$tr<=10;$tr++){
   for($td=1;$td<=10;$td++){
      $randomNumber = random_int(1, 100);
      echo "  $randomNumber    |";
   }
   echo "<br>";
   
}


// EXO 8
echo "<table border='1' cellspacing='0' cellpadding='8'>";
 
for ($ligne = 1; $ligne <= 10; $ligne++) {
    echo "<tr>";
    for ($colonne = 1; $colonne <= 10; $colonne++) {
        $nombreAltr = random_int(1, 100);
        echo "<td>$nombreAltr</td>";
    }
    echo "</tr>";
}
 
echo "</table>";


echo "<table border='1' cellspacing='0' cellpadding='8'>";
 
for ($ligne = 1; $ligne <= 10; $ligne++) {
    echo "<tr>";
    for ($colonne = 1; $colonne <= 10; $colonne++) {
        $nombreAltr = random_int(1, 100);
        echo "<td>$nombreAltr</td>";
    }
    echo "</tr>";
}
 
echo "</table>";

/** Exercice 9 : Tableau de tableaux avec foreach
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */
$tabs=[
   [
            "prenom" => 'Mickael',
            "nom" => 'Jackson',
            "email" => 'mickeal@uahoo.usa',
            "age" => '50'
   ],

   [
            "prenom" => 'jason',
            "nom" => 'louis',
            "email" => 'louis@uahoo.usa',
            "age" => '30'
   ],

   [
            "prenom" => 'Brigitte',
            "nom" => 'Mimi',
            "email" => 'mimi@uahoo.usa',
            "age" => '12'
   ]
];

foreach($tabs as $index=>$tab){
   echo "Personne ".($index+1)."<br>";
   
   foreach($tab as $cle=>$valeur ){
       
   echo "<li>$cle : $valeur </li> "; 
   

 
   }
}

?>
