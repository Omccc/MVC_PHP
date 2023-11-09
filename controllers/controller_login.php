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
    $db = connectDB();
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    function isUserValid($db, $mail)
    {
        // Préparer la requête SQL
        $sql = $db->prepare("SELECT * FROM users WHERE mail=?");

        // Exécuter la requête
        $sql->execute(array($mail));

        // Vérifier si un utilisateur a été trouvé
        $user = $sql->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            return $user;
            
        } else {
            return false;
        }
    }

    $userdb = isUserValid($db, $mail);

    if ($userdb && $password === $userdb['password']) {
        // L'utilisateur est valide, on le connecte
        // ...
        // Définir une variable de session pour stocker l'ID de l'utilisateur connecté
        session_start();
        $_SESSION['id'] = $userdb['id'];

        // Rediriger l'utilisateur vers la page d'accueil
        header("Location:?page=home");

    } else {
        // L'utilisateur n'est pas valide, on affiche une erreur
        $error = "Votre mot de passe ou votre adresse email est incorrect, merci de réessayer.";
    }
}


// --- la vue
include "./views/layout.phtml";

// var_dump($userdb);




























// Explications de ce code 


    // Ce code gère l'authentification d'un utilisateur en vérifiant les informations de connexion saisies dans un formulaire. Voici une explication étape par étape du code :

    //     1. **Validation du formulaire** :
    //        - Le code commence par vérifier si le formulaire a été soumis en vérifiant si la clé "submit" existe dans le tableau `$_POST`. Si le formulaire a été soumis (c'est-à-dire si l'utilisateur a cliqué sur un bouton "submit" dans le formulaire), le code continue à exécuter la logique d'authentification.
        
    //     2. **Connexion à la base de données** :
    //        - Une connexion à la base de données est établie en utilisant la fonction `connectDB()`. Cela crée un objet PDO qui sera utilisé pour interagir avec la base de données.
        
    //     3. **Récupération des données du formulaire** :
    //        - Les données du formulaire sont récupérées à partir du tableau `$_POST`. Il s'agit de l'adresse e-mail (stockée dans la variable `$mail`) et du mot de passe (stocké dans la variable `$password`).
        
    //     4. **Vérification de l'utilisateur** :
    //        - Une fonction `isUserValid` est définie pour vérifier si l'utilisateur est valide. Cette fonction prend en paramètre la connexion à la base de données (`$db`) et l'adresse e-mail de l'utilisateur (`$mail`).
    //        - La fonction prépare une requête SQL pour sélectionner un utilisateur avec l'adresse e-mail correspondante.
    //        - La requête est exécutée, et le résultat est récupéré dans la variable `$user` en utilisant `$sql->fetch(PDO::FETCH_ASSOC)`.
    //        - Si un utilisateur est trouvé (c'est-à-dire si la requête retourne des données), la fonction renvoie les informations de l'utilisateur. Sinon, elle renvoie `false`.
        
    //     5. **Vérification du mot de passe et connexion de l'utilisateur** :
    //        - Le code vérifie si l'utilisateur a été trouvé dans la base de données (`$userdb`) et si le mot de passe saisi (`$password`) correspond au mot de passe stocké dans la base de données (`$userdb['password']`).
    //        - Si les informations de connexion sont valides, l'utilisateur est considéré comme connecté. Une variable de session est définie pour stocker l'ID de l'utilisateur connecté, puis l'utilisateur est redirigé vers la page d'accueil en utilisant `header("Location:?page=home")`.
        
    //     6. **Affichage d'une erreur en cas d'échec de l'authentification** :
    //        - Si les informations de connexion ne sont pas valides, une variable d'erreur est définie avec un message d'erreur. Cela informe l'utilisateur que son mot de passe ou son adresse e-mail est incorrect.
        
    //     7. **Inclusion de la vue** :
    //        - Enfin, le code inclut le fichier de vue "./views/layout.phtml". La vue peut contenir un message d'erreur ou une redirection vers une autre page, mais les détails spécifiques de la vue ne sont pas inclus dans le code fourni.
        
    //     En résumé, ce code gère l'authentification d'un utilisateur en vérifiant les informations de connexion saisies dans un formulaire, en interrogeant la base de données pour trouver l'utilisateur correspondant, puis en vérifiant le mot de passe. Si les informations sont correctes, l'utilisateur est connecté et redirigé vers la page d'accueil, sinon une erreur est affichée.