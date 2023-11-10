<?php

// // Si $_SESSION['user'] n'est pas défini on redirige sur le login
// if (!isset($_SESSION['user'])) header("Location:?page=login");
$errors = [];
$upload_max_filesize =  ini_get('upload_max_filesize');


// Traitement du formulaire : si le formulaire est validé on va tenter l'upload et on insert dans la table

if (isset($_POST['submit'])) {

    $fileName= strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/','-',$_POST['title'])));


    // Récupération des données du formulaire
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];

    // Traitement du fichier
    $tempFile = $_FILES["src"]["tmp_name"];
    $fileType = $_FILES["src"]["type"];
    $fileSize = $_FILES["src"]["size"];
    $acceptedType = ["png", "jpeg"];
    $tabFileName = !empty($fileType) ? explode("/", $fileType) : [1 => ""];
    $fileExt = $tabFileName[1];

    // var_dump($_FILES);
    // var_dump($upload_max_filesize);
    // die;
    // Vérification de la taille du fichier
    if ($fileSize > $upload_max_filesize) {
        $errors[] = "Le fichier est trop gros !";
    }

    // Vérification de l'extension du fichier
    if (!in_array($fileExt, $acceptedType)) {
        $errors[] = "Le fichier doit être un .jpg, .jpeg ou .png uniquement";
    }

    // Upload du fichier
    if (empty($errors)) {
        $newFile = "./uploads/" .$fileName. "." . $fileExt;
        if (!move_uploaded_file($tempFile, $newFile)) {
            $errors[] = "Erreur lors de l'upload du fichier :(";
        }
    }

     /*
    FIN DU TRAITEMENT DU FICHIER POUR GERER L'UPLOAD
    */

    // Insertion dans la base de données
    if (empty($errors)) {
        $db = connectDB();
        $sql = $db->prepare("INSERT INTO picture (title, description, src, author) VALUES (?, ?, ?, ?)");
        $sql->execute([
            $title,
            $description,
            $newFile,
            $author,
        ]);

        // Redirection vers la page adminlist
        header("Location:?page=adminlist");
    }
}

// Affichage de la vue
include "./views/layout.phtml";


// if si le formulaire a été envoyée if si le fichier est pas trop grop, si aucune erreur on fait l'insert


















// Explications de ce code 


    // Ce code effectue les actions suivantes :

    // 1. **Vérification du formulaire** :
    //    - Il commence par vérifier si le formulaire a été validé en vérifiant si `$_POST['submit']` existe. Cela indique qu'un utilisateur a soumis le formulaire en appuyant sur le bouton "submit".

    // 2. **Connexion à la base de données** :
    //    - S'il y a eu une soumission du formulaire, le code se connecte à la base de données en utilisant la fonction `connectDB()`. Cela établit une connexion avec la base de données pour effectuer des opérations d'insertion ultérieures.

    // 3. **Préparation de la requête SQL d'insertion** :
    //    - Une requête SQL est préparée pour insérer des données dans la table "picture" de la base de données. Les valeurs à insérer sont définies comme des paramètres dans la requête SQL. Ces valeurs sont extraites des données soumises via le formulaire.

    // 4. **Exécution de la requête SQL d'insertion** :
    //    - La requête SQL est exécutée en utilisant la méthode `execute()`. Les données du formulaire, telles que le titre, la description, la source et l'auteur, sont passées comme arguments pour remplacer les paramètres de la requête SQL.

    // 5. **Redirection vers la page d'accueil (home)** :
    //    - Après avoir inséré avec succès les données dans la base de données, l'utilisateur est redirigé vers la page d'accueil (page `home`) en utilisant `header("Location:?page=home")`.

    // 6. **Chargement de la vue** :
    //    - Enfin, le code inclut le fichier de vue `layout.phtml`. Cela signifie que, après la redirection vers la page d'accueil, le résultat des opérations sera affiché dans le contexte de cette vue pour être rendu dans le navigateur.

    // En résumé, ce code vérifie d'abord si le formulaire a été soumis, puis insère les données du formulaire dans la base de données s'il a été validé avec succès. Ensuite, il redirige l'utilisateur vers la page d'accueil et affiche la vue correspondante. Cela peut être utilisé pour ajouter de nouvelles images à la base de données.