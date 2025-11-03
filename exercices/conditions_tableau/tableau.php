<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 * 
 */

$films=['Breaking Bad',"Games of thrones","Bates motel","Vinking","Walking dead"];
foreach( $films as $film){
    echo "$film <br>";
}

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */
$fruits=["pomme","banane","orange"];
$fruits[]="kiwi";
echo var_dump($fruits);
array_shift($fruits);
print_r($fruits);
echo "<br>";

/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */
$user=[
    "prenom"=>"Issa",
    "nom"=>"Issadi",
    "age"=>20
];
foreach($user as $cle=>$valeur){
    echo " $cle : $valeur <br>";
}

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */
$villes=["Alger","Marrakech","Gonesse"];
echo "Le tableau contient ".count($villes)." villes <br>";

/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
$etudiants= [
        0 => [
            'prenom'    => 'Leila',
            'nom'       => 'LALA',
            'note' => 20
        ],
        1 => [
            'prenom'    => 'Issa',
            'nom'       => 'LALA',
            'note' => 17
        ],
        2 => [
            'prenom'    => 'Ahmed',
            'nom'       => 'LALA',
            'note' => 18
    ]
];

echo "La note de ".$etudiants[0]['prenom']. " est de ". $etudiants[0]['note']."InshaAllah.<br>";
    

/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */
 $etudiants[0]['note']=15;
echo " Nouvelle note ".$etudiants[0]['note']."<br>";

/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */
$mois=["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
for( $i=0; $i<count($mois);$i++){
    echo $mois[$i]."<br>";
}


/** Exercice 8 bonus : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */
$numero=[1,9,7,84,54,3,74];
if (in_array('54', $numero)) {
    echo "Dans le tableau il y a le nombre 54.<br>";
} else {
    echo "Le 54 n 'esty pas dans le tableau.<br>";
}

// $rndm = [13254,536584,687,5869847,1,98796847];
 
//     foreach ($rndm as $spe ) {
//         if ($spe == 1) {
//             echo "Found our NAMBA WAN!!!!!!!";
//         }
//     }

/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */
$noms=["lala","lolo","lili","lulu"];
$prenoms=["gragra","grogro","grigri","grugru"];
for($i=0;$i<count($noms);$i++){
    $tip[]="$noms[$i] $prenoms[$i]";
}
print_r($tip);


//creation d un tableau multidim

    $names = ["Riri", "Fifi", "Loulou"];
    $surname = ["Grigri", "Frifri", "Grougrou"];
 
    $ducks = [];
 
    for ($i = 0; $i < count($names); $i++) {
        $ducks[] = [
            "nom" => $names[$i],
            "prenom" => $surname[$i]
        ];
    }
 
    print_r($ducks);


