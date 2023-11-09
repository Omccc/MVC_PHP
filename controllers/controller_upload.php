
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































//Explications de ce code

    // Ce code PHP permet d'uploader une image sur un serveur web. Il utilise deux variables globales de PHP, $_FILES et $_POST.

    // La variable $_FILES contient des informations sur les fichiers téléchargés par l'utilisateur. Elle est un tableau associatif, dont les clés correspondent aux noms des champs du formulaire HTML. Dans ce cas, le formulaire contient un champ nommé image_file.
    // La variable $_POST contient les valeurs des champs du formulaire HTML. Elle est également un tableau associatif.
    // Le code commence par vérifier si le formulaire a été soumis. Si c'est le cas, il récupère le nom temporaire du fichier téléchargé dans la variable $tempFile. Ensuite, il utilise la fonction getimagesize() pour vérifier si le fichier est une image. Si ce n'est pas le cas, il affiche un message d'erreur.

    // Si le fichier est une image, le code génère un nouveau nom pour le fichier en utilisant le timestamp actuel. Il utilise ensuite la fonction move_uploaded_file() pour copier le fichier temporaire dans le dossier uploads.

    // Enfin, le code inclut la vue layout.phtml pour afficher la page web.

    // Voici une explication plus détaillée des différentes lignes de code :

    // PHP
    // $error="";
    // Utilisez le code avec précaution. En savoir plus
    // Cette ligne déclare une variable $error qui sera utilisée pour stocker un message d'erreur si le fichier n'est pas une image.

    // PHP
    // if(isset($_POST['upload'])){    // si le formulaire est posté/validé
    // Utilisez le code avec précaution. En savoir plus
    // Cette ligne vérifie si le formulaire a été soumis. La variable $_POST['upload'] contient la valeur du bouton de soumission du formulaire. Si cette valeur est définie, cela signifie que le formulaire a été soumis.

    // PHP
    // //On copie le fichier temporaire vers un vrai fichier quelque part
    // //dans notre projet..

    // $tempFile = $_FILES["image_file"]["tmp_name"];
    // $checkFile = getimagesize($tempFile);  
    // Utilisez le code avec précaution. En savoir plus
    // Ces deux lignes récupèrent le nom temporaire du fichier téléchargé et vérifient si le fichier est une image.

    // PHP
    // // Si ce n'est pas une image $checkFile retourne false !
    // if($checkFile){
    // Utilisez le code avec précaution. En savoir plus
    // Cette ligne vérifie si le fichier est une image. Si c'est le cas, la fonction getimagesize() retourne un tableau contenant des informations sur l'image. Si ce n'est pas le cas, la fonction retourne false.

    // PHP

    //     //On peut récupérer des infos sur le ficher temporaire avec getimagesize

    // //on précise le nom du fichier basé sur un timestamp (//time() va indiquer l'heure pour chaque image pour distinguer une image d'une autre et éviter d'écraser l'image suivante, on peut donc uploader plusieurs images à la suite)
    // $newFile = "./uploads/". time().".jpg"; 
    // move_uploaded_file($tempFile,$newFile);
    //                         //1er argument: le fichier temporaire généré par PHP; 2ème argument: où on souhaite uploader le fichier

    // Utilisez le code avec précaution. En savoir plus
    // Si le fichier est une image, ces lignes génèrent un nouveau nom pour le fichier et le copient dans le dossier uploads. Le nouveau nom du fichier est basé sur le timestamp actuel. Cela permet de distinguer les différentes images téléchargées et d'éviter d'écraser une image existante.

    // PHP

    // } else {
    //     $error = "Nous n'acceptons que les images merci !";
    // }

    // Utilisez le code avec précaution. En savoir plus
    // Si le fichier n'est pas une image, cette ligne affiche un message d'erreur.

    // PHP

    // //formulaire multipart
    // //input file pour charger des fichiers
    // //utiliser move_uploaded($files["nom du fichier templore"]["idem"], "./uploads/monfichier.jpg)
    // //le fichier uploadé sera uploader dans le dossier indiqué


    // // --- la vue
    // include "./views/layout.phtml";
    // Utilisez le code avec précaution. En savoir plus
    // Enfin, ces deux lignes incluent la vue layout.phtml pour afficher la page web.

    // Ce code peut être amélioré de plusieurs manières. Par exemple, on peut ajouter une validation des dimensions et du poids de l'image. On peut également créer un dossier pour chaque utilisateur afin de stocker ses images.