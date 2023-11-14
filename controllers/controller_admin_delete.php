<?php

// //Connect DB
// $db = connectDB();

// //Requête DELETE


// $deleteFile = './uploads/php-php.png';


// if(isset ($deleteFile['srs']))
//   unlink($deleteFile) ;
// try{
//     $stmt = $db->prepare("DELETE FROM picture WHERE id=?");
//     $stmt->execute(array(
//            $_GET['id']));
//         header("Location:?page=adminlist");


//     }
// catch (Exception $e) {$sqlError=$e->getMessage();
// }
// //if error
// if ( isset($sqlError)){
// echo $sqlError;
// }





// Si $_SESSION['user'] n'est pas défini on redirige sur le login
if (!isset($_SESSION['user'])) header("Location:?page=login");
// Si l'id est dans l'url on delete dans la table
// Si le delete dans la table a bien été effectué on unlink() le fichier
if (isset($_GET['id'])){
    $id = intval( $_GET['id'] );
    $db = connectDB();
    // On fait une petite requète pour récupérer la source à supprimer
    $sql = $db->prepare("SELECT src FROM picture WHERE id=?");
    $sql->execute([$id]);
    // Notez le fetchColumn() qui ne retourne qu'une seule info de la table
    $srcToDelete = $sql->fetchColumn(); 
    // On fait la suppression de la ligne dans la table
    $sql = $db->prepare("DELETE FROM picture WHERE id=?");
    // Si la requète de suppression a bien été effectuée
    if ($sql->execute([$id])){
        // Si le fichier existe on le supprime avec unlink()
        if (file_exists($srcToDelete)){
            unlink($srcToDelete);
        }
    }
    // Et on redirige sur l'admin_list
    header("Location:?page=admin_list");
}





















