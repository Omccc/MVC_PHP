<?php



// // Si le formulaire est validé on insert dans la table
// if (isset($_POST['submit'])){
//     $db = connectDB();
//     $sql = $db->prepare("INSERT INTO users (name,password) VALUES (?,?)");
//     $sql->execute([
//         $_POST['name'],
//         $_POST['password'],
       
        
//     ]);
//     // Et on redirige sur l'adminlist
//     header("Location:?page=home");
// }

// // --- la vue
// include "./views/layout.phtml"; 


// // Si le formulaire est validé, on vérifie si l'utilisateur est valide
// if (isset($_POST['submit'])) {
//     $db = connectDB();
//     $name = $_POST['mail'];
//     $password = $_POST['password'];

//     if (isUserValid($db, $name, $password)) {
//         // L'utilisateur est valide, on le connecte
//         // ...
//         header("Location:?page=home");

//     } else {
//         // L'utilisateur n'est pas valide, on affiche une erreur
//         // ...
//         echo ("Votre mot de passe ou votre adresse email est incorrect, merci de réessayer.");
//     }
// }

// // --- la vue
// include "./views/layout.phtml"; 

// Si le formulaire est validé, on vérifie si l'utilisateur est valide
// if (isset($_POST['submit'])) {
//     $db = connectDB();
//     $name = $_POST['mail']; 
//     $password = $_POST['password'];


//     function isUserValid($db, $name)
// {
//     // Préparer la requête SQL
//     $sql = $db->prepare("SELECT * FROM users WHERE mail=?");

//     // Exécuter la requête
//     $sql->execute(array($name));

//     // Vérifier si un utilisateur a été trouvé
//     $user = $sql->fetch(PDO::FETCH_ASSOC); //pour retourner un tableau associatif des résultats de la requête
//     if ($user) {
//         return $user;
//     } else {
//         return false;
//     }

// }

// $userdb=isUserValid($db,$name);



//     if ( $userdb && $password==$userdb['password']) {
//         // L'utilisateur est valide, on le connecte
//         // ...
//         // Définir une variable de session pour stocker l'ID de l'utilisateur connecté
//         session_start();
//         $_SESSION['id'] = $user['id'];

//         // Rediriger l'utilisateur vers la page d'accueil
//         header("Location:?page=home");

//     } else {
//         // L'utilisateur n'est pas valide, on affiche une erreur
//        $error="Votre mot de passe ou votre adresse email est incorrect, merci de réessayer.";
//     }
// }

// // --- la vue
// include "./views/layout.phtml";
// // var_dump($userdb);



// // Si le formulaire est validé on insert dans la table
// if (isset($_POST['submit'])){
//     $db = connectDB();
//     $sql = $db->prepare("INSERT INTO users (mail,password) VALUES (?,?)");
//     $sql->execute([
//         $_POST['mail'],
//         $_POST['password'],
//     ]);
//     // Et on redirige sur l'adminlist
//     header("Location:?page=adminlist");
// }



// Si le formulaire est validé, on vérifie si l'utilisateur est valide
if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $db = connectDB();

   
    
        // Préparer la requête SQL
        $sql = $db->prepare("SELECT * FROM users WHERE mail=?");

        // Exécuter la requête
        $sql->execute([$mail]);

        // Vérifier si un utilisateur a été trouvé
        $user = $sql->fetch(PDO::FETCH_ASSOC);
        if ($sql->rowCount() == 0){
            $error = "Vous n'avez pas de compte veuillez pour <a href=\"?page=register\">enregistrer</a> svp.";
        }
    

        $passVerif = password_verify(strip_tags($_POST['password']),$user['password']);
    if (!$passVerif){
        $error = "Désolé Login/Mot-de-passe incorrect(s).";
    }

    if (empty($error)){
        $_SESSION['user'] = $user;
        header("Location:?page=adminlist");
    }
}



// --- la vue
include "./views/layout.phtml";

// var_dump($userdb);

























