<?php

$db = connectDB();
$id = intval($_GET['id']);
$sql = $db->prepare("SELECT * FROM picture WHERE id=?");
$sql->execute([$id]);
$pictures = $sql->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["Update"])) {
    $sql = $db->prepare("UPDATE picture SET title=?, description=?, src=?, author=? WHERE id=?");
    $sql->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['src'],
        $_POST['author'],
        
        $id,
    ]);
    // Et on redirige sur l'adminlist
    header("Location:?page=adminlist");
}


// --- on charge la vue
include "./views/layout.phtml";


































// Explications de ce code 


    // Ce code a pour but de mettre à jour une entrée dans la base de données correspondant à une image (enregistrée dans la table "picture"). Voici les étapes clés de ce code :

    // 1. **Connexion à la base de données** :
    //    - Le code commence par se connecter à la base de données en utilisant la fonction `connectDB()`. Cette connexion est nécessaire pour effectuer des opérations de mise à jour.

    // 2. **Récupération de l'ID de l'image à mettre à jour** :
    //    - L'ID de l'image à mettre à jour est récupéré à partir des paramètres GET de l'URL, et il est converti en un entier avec `intval($_GET['id'])`. Cela permet de s'assurer que l'ID est un entier.

    // 3. **Récupération des données de l'image à mettre à jour** :
    //    - Une requête SQL préparée est créée pour sélectionner les données de l'image spécifique avec l'ID correspondant. Les valeurs de l'image sont récupérées de la base de données à l'aide de la méthode `fetch(PDO::FETCH_ASSOC)` et stockées dans le tableau `$pictures`.

    // 4. **Vérification de la soumission du formulaire** :
    //    - Le code vérifie si le formulaire a été soumis en vérifiant si `$_POST["Update"]` existe. Cela signifie qu'un utilisateur a soumis le formulaire en appuyant sur le bouton "Update".

    // 5. **Mise à jour des données de l'image** :
    //    - Si le formulaire a été soumis, une nouvelle requête SQL préparée est créée pour mettre à jour les données de l'image. Les nouvelles valeurs (titre, description, source, auteur) sont définies comme des paramètres dans la requête SQL. L'ID de l'image à mettre à jour est également passé comme paramètre pour identifier l'enregistrement à mettre à jour.

    // 6. **Exécution de la requête de mise à jour** :
    //    - La requête SQL d'update est exécutée en utilisant la méthode `execute()`. Les données de l'image sont mises à jour avec les nouvelles valeurs soumises via le formulaire.

    // 7. **Redirection vers la page d'administration** :
    //    - Après avoir effectué avec succès la mise à jour des données de l'image, l'utilisateur est redirigé vers la page d'administration (page `adminlist`) en utilisant `header("Location:?page=adminlist")`.

    // 8. **Chargement de la vue** :
    //    - Enfin, le code inclut le fichier de vue `layout.phtml`. Cela signifie que, après la redirection vers la page d'administration, le résultat des opérations sera affiché dans le contexte de cette vue pour être rendu dans le navigateur.

    // En résumé, ce code permet de mettre à jour les données d'une image dans la base de données en fonction de l'ID de l'image fourni dans l'URL. Il vérifie d'abord si le formulaire a été soumis, puis exécute la mise à jour et redirige l'utilisateur vers la page d'administration.