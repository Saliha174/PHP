<?php

/** Exercice 1 : Afficher la date actuelle
 * 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

date_default_timezone_set("Europe/Paris");
echo '<p>' . date('d/m/y H:i:s') . '</p>';
/** Exercice 2 : Formater une date
 * 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : date() combinée à strtotime()
 */
 echo date("d/m/Y" ,strtotime('2024-08-08'));
/** Exercice 3 : Calculer l'âge d'une personne
 * 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 * 
 *  aide : combinaison date() et strtotime()
 * 
 */
echo "<br>";
echo $age=(int)((strtotime('04-11-2025')-strtotime('15-02-1990'))/(365.25*24*60*60));

// var_dump(strtotime('04-11-2025'));
// var_dump(strtotime('15-02-1990'));

/** Exercice 4 : Afficher le timestamp actuel
 * 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 * 
 *  aide : fonction time()
 * 
 */
echo "<br>";
echo "Fonction time() : ".time();
echo "<br><p>La fonction time() retourne le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit UTC (aussi appelé UNIX timestamp).</p><br>";

/** Exercice 5 : Convertir timestamp en date
 * 
 *  Objectif : Convertir le timstamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */
echo date("d/m/Y" ,time());

/** Exercice 6 : Date dans une semaine
 * 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */
echo "<br><br>".date("d/m/Y" ,strtotime("+1 week"));
/** Exercice 7 : Nombre de jours entre deux dates (BONUS)
 * 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */
echo "<br>";
echo time();
echo "<br>";
echo strtotime("01-01-2024");
echo "<br>";
$jours=((time()-strtotime("01-01-2024"))/(24*60*60));
echo "<br>";

echo (int)$jours;

