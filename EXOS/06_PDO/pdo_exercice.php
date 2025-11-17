<?php

function debug($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}


// pour les exercices, vous allez créer une table dans la BDD societe qui s'appelera, dirigeants

/** Cette table contiendra
 * 
 *  'id'(INT,clé primaire, auto-incrémentée)
 *  'prenom'(VARCHAR,255)
 *  'nom'(VARCHAR,255)
 *  'poste'(VARCHAR,255)
 *  'email'(VARCHAR,255,unique)
 *  'salaire'(FLOAT)
 *  'date_embauche'(DATE)
 */

/** Exercice 1 : Connexion à une base de données 
 * 
 *  Objectif : Se connecter à notre BDD
 * 
 *  1 . Commencer par utiliser l'objet PDO pour se connecter à la base de donnée MySQL (ou MySQLi si vous preférez)
 * 
 *  2 . S'assurer de gérer les erreurs de connexion de manière appropriée en affichant un message d'erreur si la connexion echoue
 */
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3308;charset=utf8;dbname=societe',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]
    );
    echo '<p>Connexion à la base de données réussie !</p>';
} catch (PDOException $e) {

    echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';

    die;
}

/** Exercice 2 : Insérer des données avec exec()
 * 
 *  Objectif : insérer des données dans la BDD 
 * 
 *  1 . Utiliser la méthode exec() pour insérer un nouveau dirigeant dans la table dirigeants. Afficher le nombre de lignes affectées par l'insertion et l'id du dirigeant inséré
 * 
 */



// $resultat = $pdo->exec("INSERT INTO dirigeants (prenom, nom, poste,email,salaire, date_embauche) VALUES ('saliha2', 'lili2', 'Directrice generale', 'saliha2@lepole.com',30000, '2024-02-08')");

// echo "Nombre de lignes affectées par le INSERT : $resultat <br>";
// echo 'Dernier id généré par la BDD : ' . $pdo->lastInsertId();

// $resultat = $pdo->exec("DELETE FROM dirigeants WHERE id = 8 ");
// echo "<br> Nombre de lignes affectées par le DELETE : $resultat <br>";



/** Exercice 3 : Récupérer et afficher l'enregistrement avec query()
 * 
 *  Objectif : récupérer notre dirigeant de la BDD
 * 
 *  1 . Utiliser query() pour séléectionner les informations d'un dirigeant spécifique dans la table 'employes' (par exemple, par son prenom)
 * 
 * 
 *  2 . Afficher les résultats sous forme de tableau associatif en utilisant fetch(PDO::FETCH_ASSOC)
 * 
 */



// $result = $pdo->query("SELECT * FROM dirigeants WHERE prenom = 'saliha'");



// $employe1 = $result->fetch(PDO::FETCH_ASSOC);
// var_dump($employe1);
// debug($employe1);







/** Exercice 4 : Affichage avec différents types de fetch
 * 
 * Objectif : Reprendre l'exercice précédent
 * 
 *  1 . Modifier le fetch(PDO::xxx) pour le remplacer par les trois autres types : FETCH_NUM,FETCH_ASSOC et FETCH_OBJ, Analyser et comparer
 * 
 */


// $employe2 = $result->fetch(PDO::FETCH_NUM);
// var_dump($employe2);
// debug($employe2);
//! ici tableau avec valeurs, on n'a plus les clefs mais indices

// $employe3 = $result->fetch(PDO::FETCH_OBJ);
// var_dump($employe3);
// debug($employe3);
// //! ici on a un objet

/** Exercice 5 : Récupérer tous les enregistrements avec fetchAll()
 * 
 * Objectif : Récupérer toutes les lignes d'une table 
 * 
 *  1 . Récuperer les enregistrements de la table dirigeants avec fecthAll(PDO::FETCH_ASSOC)
 * 
 *  2 . Afficher les données dans un tableau HTML (vous pouvez reprendre celui du cours)
 * 
 *  3 . S'assurer que chaque dirigeant est affiché sur une ligne distincte
 * 
 */



// $resultat = $pdo->query("SELECT * FROM dirigeants");
// $donnees = $resultat->fetchAll(PDO::FETCH_ASSOC);

// debug($donnees);

// echo '<hr>';
// // On parcourt $donnees avec une boucle foreach pour en afficher le contenu :
// foreach ($donnees as $dirigeants) {
//     // debug($employe);  // $employe correspond à chaque sous-array associatif contenu dans $donnees

//     echo '<div>';
//     echo '<p>' . $dirigeants['id'] . '</p>';
//     echo '<p>' . $dirigeants['prenom'] . '</p>';
//     echo '<p>' . $dirigeants['nom'] . '</p>';
//     echo '<p>' . $dirigeants['poste'] . '</p>';
//     echo '<p>' . $dirigeants['email'] . '</p>';
//     echo '<p>' . $dirigeants['salaire'] . '</p>';
//     echo '<p>' . $dirigeants['date_embauche'] . '</p>';

//     echo '</div><hr>';
// }



$resultat = $pdo->query("SELECT * FROM dirigeants");
echo '<table border="1">';

echo '<tr>';
for ($i = 0; $i < $resultat->columnCount(); $i++) {
    debug($resultat->getColumnMeta($i));

    $colonne = $resultat->getColumnMeta($i);

    echo '<th>' . $colonne['name'] . '</th>';
}

echo '<th>actions</th>';

echo '</tr>';

echo '<th>actions</th>';

echo '</tr>';


while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
    var_dump($ligne);
    echo '<tr>';

    foreach ($ligne as $information) {
        echo '<td>' . $information . '</td>';
    }

    echo '<td><a href="?action=suppression&id=' . $ligne['id'] . '">supprimer</a></td>';

    echo '</tr>';
}
echo '</table>';

/** Exercice 6 : Utilisation de requêtes préparées avec bindParam()
 * 
 *  Objectif : Sécuriser l'envoi de nos données à la BDD avec des requêtes préparées
 * 
 *  1 . Créer une requête pour selectionner un dirigeant par son nom
 * 
 *  2. Utiliser bindParam() pour lier les valeurs des paramètres et afficher les informations du dirigeant
 * 
 * 
 */



$prenom = "saliha";

$resultat = $pdo->prepare("SELECT * FROM dirigeants WHERE prenom = :prenom");

$resultat->bindParam(':prenom', $prenom);
$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);


/** Exercice 7 : Requêtes préparées avec bindValue()
 * 
 * Objectif : Reprendre l'exercice précédent et refaire la même chose à la place de bindParams()
 * 
 * Modifier la valeur du paramètre pour observer le comportement de la requête
 * 
 */
// $nom = "lili";

// $resultat = $pdo->prepare("SELECT * FROM dirigeants WHERE nom = :nom");

// $resultat->bindValue(':nom', $nom);
// $resultat->execute();
// $donnees = $resultat->fetch(PDO::FETCH_ASSOC);
// debug($donnees);


/** Exercice 8 : Utilisation des marqueurs "?" dans une requête préparée
 * 
 *  Objectif : utiliser les marqueurs ? pour préparer nos valeurs 
 * 
 *  1 . Creer une requête pour séléctionner un dirigeant par son nom ET son prénom
 * 
 *  2 . Utiliser bindValue() ou passer directement les valeurs via un tableau dans la fonction execute()
 * 
 *  3 . Afficher les résultats
 */


$resultat = $pdo->prepare("SELECT * FROM dirigeants WHERE prenom = ? AND nom = ? ");
$resultat->execute(['saliha', 'lili']);
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
debug($donnees);
