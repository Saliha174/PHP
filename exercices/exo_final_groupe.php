
<!-- Pour ceux qui sont chauds !!
Menu pour plusieurs personnes
Objectif : Créer un programme qui génère un menu aléatoire pour plusieurs personnes, calcule le total et applique une réduction si nécessaire, en utilisant tableaux multidimensionnels, boucles imbriquées et conditions.
Consignes :
Créer un tableau $menu avec les catégories entrees, plats et desserts.
Chaque élément est un sous-tableau contenant nom et prix.
Créer un tableau $personnes avec plusieurs noms.
Pour chaque personne :
Sélectionner un plat aléatoire dans chaque catégorie.
Afficher le menu (nom + prix).
Calculer le total.
Si le total dépasse 20 €, appliquer une réduction de 10 %.
Afficher le total à payer pour chaque personne. -->

<?php

    $menu = [
        "entree" => [
            [
                "nom" => "Salade",
                "prix" => 5
            ],[
                "nom" => "Bruschetta",
                "prix" => 7.50
            ]
        ],"plat" => [
            [
                "nom" => "Couscous",
                "prix" => 5
            ],[
                "nom" => "Boeuf bourguignon",
                "prix" => 7.50
            ]
        ],
        "Dessert" => [
            [
                "nom" => "Profiterole",
                "prix" => 8
            ],[
                "nom" => "Pastel de Nata",
                "prix" => 9.99
            ]
        ]
    ];

    $personnes = ["Saliha", "Maël", "Ludovic"];

     echo "<ol>";
    foreach ($personnes as $key => $value) {
        echo "<li>".$value."</li> <br>";
        $total=0;
        echo "<ul>";
        foreach ($menu as $key => $value) {
          $tab  =array_rand($value);
        //   var_dump($tab);
        //   var_dump($value);
 
            echo ucfirst( $key)." :" .$value[$tab]["nom"]." <br>   prix : ".$value[$tab]["prix"]."<br>";
            $total += $value[$tab]["prix"];
           
 
        }
        if ( $total>20){
            $somme=($total*0.9);
             echo "<p>Total = ". "<s>$total €</s> <strong>→ ".(round($somme, 2)). "</strong> €!";
        }else{
            echo "<strong>" . $total . "</strong>"." €!</p>";
        }
       
        echo "</ul>";
 
       
    }
    echo "</ol>";
 
 //***************************Travail de groupe*****************/

    // function getRandomElmt($arr){
    //     $rand = random_int(0, count($arr)-1);
    //     return $arr[$rand];
    // }

    // echo "<ol>";
    // foreach ($personnes as $key => $value) {
    //     $total = 0 ;
    //     echo "<li>" . $value . "</li>";
    //     echo "<ul>";
    //     foreach($menu as $key => $value){
    //         $randElmt = getRandomElmt($value);
    //         echo $randElmt["nom"] . " : " . $randElmt["prix"] . "€ <br>";
    //         $total += $randElmt["prix"];
    //     }
    //     echo "<p>Total = ". ($total > 20 ? "<s>$total €</s> <strong>→ ".(round($total*=0.9, 2)). "</strong>" : "<strong>" . $total . "</strong>")."! €</p>";
    //     echo "</ul>";
    // }
    // echo "</ol>";


    //***********Johane******************************/
    
    
// Tableau du menu complet
// $menu = [
//     "entrees" => [
//         ["nom" => "Salade César", "prix" => 4.55],
//         ["nom" => "Soupe à l’oignon", "prix" => 3.50],
//         ["nom" => "Bruschetta", "prix" => 4.90]
//     ],
//     "plats" => [
//         ["nom" => "Lasagnes", "prix" => 12.99],
//         ["nom" => "Poulet curry", "prix" => 11.0],
//         ["nom" => "Poisson pané", "prix" => 9.5]
//     ],
//     "desserts" => [
//         ["nom" => "Tiramisu", "prix" => 6.30],
//         ["nom" => "Crème brûlée", "prix" => 4.5],
//         ["nom" => "Mousse au chocolat", "prix" => 4.40]
//     ]
// ];

// // Tableau de personnes
// $personnes = ["Alice", "Bob", "Charlie"];

// // Boucle sur chaque personne pour les afficher
// foreach ($personnes as $pers) {
//     echo "<h2>Menu pour $pers</h2>";
//     $total = 0;

//     // Boucle imbriquée pour chaque catégorie
//     foreach ($menu as $categorie => $plats) {
//         $choix = $plats[array_rand($plats)];
//         echo "<p>" . ucfirst($categorie) . " : <strong>{$choix['nom']}</strong> - {$choix['prix']} €</p>";
//         $total += $choix['prix'];
//     }

//     // Condition pour réduction si le total dépasse 20 euros
//     if ($total > 20) {
//         $reduction = round($total * 0.1, 2);
//         $total -= $reduction;
//         echo "<p>💸 Réduction appliquée : -{$reduction} €</p>";
//     }

//     echo "<p>💳 Total à payer : <strong>$total €</strong></p>";
//     echo "<hr>";
// }


?>