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

















    // 6. **Chargement de la vue** :
    //    - Enfin, le code inclut le fichier de vue `layout.phtml`. Cela signifie que, après la redirection vers la page d'accueil, le résultat des opérations sera affiché dans le contexte de cette vue pour être rendu dans le navigateur.

    // En résumé, ce code vérifie d'abord si le formulaire a été soumis, puis insère les données du formulaire dans la base de données s'il a été validé avec succès. Ensuite, il redirige l'utilisateur vers la page d'accueil et affiche la vue correspondante. Cela peut être utilisé pour ajouter de nouvelles images à la base de données.
