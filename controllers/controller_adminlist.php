<?php

// Si $_SESSION['user'] n'est pas défini on redirige sur le login
if (!isset($_SESSION['user'])) header("Location:?page=login");
$db = connectDB();
$sql = $db->prepare("SELECT* FROM picture ORDER BY id DESC");


$sql->execute([
   
]);
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
// --- on charge la vue


include "./views/layout.phtml"; 













































// Explications de ce code 


    // Ce code effectue les actions suivantes :

    // 1. **Connexion à la base de données** :
    //    - Le code commence par se connecter à la base de données en utilisant la fonction `connectDB()`. Cela établit une connexion avec la base de données pour effectuer des opérations ultérieures.

    // 2. **Requête SQL pour récupérer des images** :
    //    - Une requête SQL est préparée pour sélectionner toutes les données de la table "picture" dans la base de données. Les images sont triées par ordre décroissant de leur ID, ce qui signifie qu'il récupérera les images les plus récentes en premier.

    // 3. **Exécution de la requête SQL** :
    //    - La requête SQL est exécutée en utilisant la méthode `execute()`. Dans ce cas, il n'y a pas de paramètres spécifiques à passer, donc l'argument de `execute()` est un tableau vide `[]`.

    // 4. **Récupération des données** :
    //    - Les données récupérées de la base de données (les images) sont stockées dans un tableau associatif `pictures` en utilisant la méthode `fetchAll(PDO::FETCH_ASSOC)`.

    // 5. **Chargement de la vue** :
    //    - Enfin, le code inclut le fichier de vue `layout.phtml` en utilisant `include "./views/layout.phtml"`. Cela signifie que le résultat des opérations précédentes sera affiché dans le contexte de cette vue pour être rendu dans le navigateur.

    // En résumé, ce code récupère les données des images depuis la base de données, les trie par ordre décroissant de l'ID, et les stocke dans un tableau associatif `pictures`. Ensuite, il charge une vue, probablement pour afficher ces images dans une page web.






























 // requete UPDATE dateUpdate
    //             try { //essayer de faire cette requête
    //                 $sql = "UPDATE users SET dateUpdate=? WHERE id=?";
    //                 $stmt = $connection->prepare($sql);

    //                 $stmt->execute(array(
    //                     date('Y-m-d H:i:s'),
    //                     $_GET['id']
    //                 ));
    //             } catch (Exception $e) { //s'il y a une exception, la mettre dans getMessage puis l'afficher
    //                 $sqlError = $e->getMessage();
    //             }
    //             //  if error
    //             if (isset($sqlError)) {
    //                 echo $sqlError;
    //             }
    //             // requete SELECT
    //             try {
    //                 $sql = "SELECT * FROM picture WHERE id=?";
    //                 $stmt = $connection->prepare($sql);
    //                 $stmt->execute(array($_GET['id']));
    //             } catch (Exception $e) {
    //                 $sqlError = $e->getMessage();
    //             }
    //             //  if error
    //             if (isset($sqlError)) {
    //                 echo $sqlError;
    //             }
    //             //  results (mise en tableau)
    //             $users = $stmt->fetch(PDO::FETCH_ASSOC);
    //             // print_r($users);
    //             echo '<hr>';

    //         
