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
                "prix" => 10
            ],[
                "nom" => "Pastel de Nata",
                "prix" => 9.99
            ]
        ]
    ];

    $personnes = ["Saliha", "Maël", "Ludovic"];

    function getRandomElmt($arr){
        $rand = random_int(0, count($arr)-1);
        return $arr[$rand];
    }

    echo "<ol>";
    foreach ($personnes as $key => $value) {
        $total = 0 ;
        echo "<li>" . $value . "</li>";
        echo "<ul>";
        foreach($menu as $key => $value){
            $randElmt = getRandomElmt($value);
            echo $randElmt["nom"] . " : " . $randElmt["prix"] . "€ <br>";
            $total += $randElmt["prix"];
        }
        echo "<p>Total = ". ($total > 20 ? "<s>$total €</s> <strong>→ ".(round($total*=0.9, 2)). "</strong>" : "<strong>" . $total . "</strong>")."! €</p>";
        echo "</ul>";
    }
    echo "</ol>";

    

?>