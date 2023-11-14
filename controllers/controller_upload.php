
<?php



$errors=[];
// $errors[]= "Erreur numéro 1";
// $errors[]= "Erreur numéro 2";
// $errors[]= "Erreur numéro 3";
// $errors[]= "Erreur numéro 4"; // les erreurs sont stockées sous forme de tableau

$upload_max_filesize =  ini_get('upload_max_filesize');


if(isset($_POST['upload'])){    // si le formulaire+ est posté/validé


  
       
    $tempFile = $_FILES["image_file"]["tmp_name"];
    $fileType = $_FILES["image_file"]["type"];
    $fileSize = $_FILES["image_file"]["size"];
    $acceptedType = ["png","jpeg"];
    $tabFileName = !empty($fileType) ? explode("/",$fileType) : [1=>""];
    $fileExt = $tabFileName[1];


// //On copie le fichier temporaire vers un vrai fichier quelque part
            // //dans notre projet..

            // $tempFile = $_FILES["image_file"]["tmp_name"];
            // $checkFile = getimagesize($tempFile);  

            // // $format = $checkFile[0];


            // // Si ce n'est pas une image $checkFile retourne false !
            // if($checkFile){
            // ;
            //     //$checkFile['mime'] retourne "image/jpeg" par exemple
            //     //Donc on fait un array (tableau) qui s'appelle $tabFileName avec explode sur le slash /

            //     $tabFileName = explode("/",$checkFile['mime']); 
            // //Du coup, l'extenion de fichier c'est la clé 1 du tableau
            // $ext = $tabFileName[1];

            //     //On peut récupérer des infos sur le ficher temporaire avec getimagesize

            // //on précise le nom du fichier basé sur un timestamp (//time() va indiquer l'heure pour chaque image pour distinguer une image d'une autre et éviter d'écraser l'image suivante, on peut donc uploader plusieurs images à la suite)
            // $newFile = "./uploads/". time()."." . $ext; 

            // Si le fichier dépasse 30mo
 
    if ($fileSize > $upload_max_filesize) {
        $errors[] ="Le fichier est trop gros !";
    }
    
    if (empty($fileSize)) {
        $errors[] ="Fichier non traité. Vérifiez éventuellement qu'il ne soit pas trop gros...";
    }
    
    if (!in_array($fileExt,$acceptedType)){
        $errors[] ="Le fichier doit être un .jpg, .jpeg ou .png uniquement";
    }
      
    if (empty($errors)){
        
        $newFile = "./uploads/". time() .".".$fileExt;
        if (@move_uploaded_file($tempFile,$newFile)) {
            $success = true;
        } else {
            $errors[] ="Erreur lors de l'upload du fichier :(";  
        }
    } 
}



//formulaire multipart
//input file pour charger des fichiers
//utiliser move_uploaded($files["nom du fichier templore"]["idem"], "./uploads/monfichier.jpg)
//le fichier uploadé sera uploadé dans le dossier indiqué


// --- la vue
include "./views/layout.phtml";





























