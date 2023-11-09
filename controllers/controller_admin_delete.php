<?php

//Connect DB
$db = connectDB();

//Requête DELETE
try{
    $stmt = $db->prepare("DELETE FROM picture WHERE id=?");
    $stmt->execute(array(
           $_GET['id']));
        header("Location:?page=adminlist");


    }
catch (Exception $e) {$sqlError=$e->getMessage();
}
//if error
if ( isset($sqlError)){
echo $sqlError;
}







































// Explications de ce code 

    // Ce code effectue la suppression d'une image de la base de données en fonction de son ID. Voici comment le code fonctionne en détail :

    // 1. **Connexion à la base de données** :
    //    - Le code commence par se connecter à la base de données en utilisant la fonction `connectDB()`. Cette connexion est nécessaire pour effectuer des opérations de suppression.

    // 2. **Requête de suppression** :
    //    - Une requête SQL préparée est créée pour supprimer une ligne de la table "picture". La condition de suppression est basée sur l'ID de l'image, qui est récupéré à partir des paramètres GET de l'URL (`$_GET['id']`).

    // 3. **Exécution de la requête de suppression** :
    //    - La requête SQL de suppression est exécutée en utilisant la méthode `execute()`. Cela entraîne la suppression de l'image de la base de données.

    // 4. **Redirection vers la page d'administration** :
    //    - Après avoir effectué avec succès la suppression de l'image, l'utilisateur est redirigé vers la page d'administration (page `adminlist`) en utilisant `header("Location:?page=adminlist")`.

    // 5. **Gestion des erreurs** :
    //    - Le code utilise une structure `try...catch` pour capturer des exceptions, au cas où une erreur surviendrait lors de l'exécution de la requête de suppression. Si une exception est capturée, le message d'erreur est stocké dans la variable `$sqlError`.

    // 6. **Affichage des erreurs** :
    //    - Si une erreur est survenue lors de la suppression de l'image, le code vérifie la variable `$sqlError`. Si elle n'est pas vide, cela signifie qu'une erreur s'est produite, et le message d'erreur est affiché à l'utilisateur.

    // En résumé, ce code permet de supprimer une image de la base de données en fonction de son ID. Il gère les exceptions potentielles qui pourraient survenir lors de l'exécution de la requête de suppression et redirige l'utilisateur vers la page d'administration après la suppression réussie. Si une erreur se produit, le message d'erreur est affiché à l'utilisateur.