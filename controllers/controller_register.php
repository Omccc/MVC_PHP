<?php


// Si le formulaire est validé on insert dans la table
if (isset($_POST['submit'])){
    $db = connectDB();
    $sql = $db->prepare("INSERT INTO users (firstName,name,mail, password) VALUES (?,?,?,?)");
    $sql->execute([
        $_POST['firstName'],
        $_POST['name'],
        $_POST['mail'],
        // On hashe le mdp avant de l'insérer dans la BDD 
        password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);
    // Et on redirige sur l'adminlist
    header("Location:?page=adminlist");
}

// --- la vue
include "./views/layout.phtml"; 



//pour hasher un mdp


// //D'abord on doit hasher le pass saisi lors de l'inscription
// $form_password = "12345";
// $password_hash = password_hash($form_password, PASSWORD_DEFAULT);


// //Ensuite lors d'une connexion on va vérifier le mot de passe saisi
// //lors de la connexion et on le confronte à celui qui est hashé dans la table user
// $login_password="12345";
// $password_verif = password_verify($login_password,$password_hash);


// if($password_verif) {

// echo "<p> Password correct</p>";


// }else {

//     echo "<p>Password incorrect </p>";

// }





































// Explications de ce code 


    // Ce code gère l'insertion de nouvelles données dans une table de la base de données à partir d'un formulaire. Voici une explication étape par étape du code :

    //     1. **Validation du formulaire** :
    //        - Le code commence par vérifier si le formulaire a été soumis. Cela est fait en vérifiant si la clé "submit" existe dans le tableau `$_POST`. Si le formulaire a été soumis (c'est-à-dire si l'utilisateur a cliqué sur un bouton "submit" dans le formulaire), le code continue à exécuter la logique d'insertion.
        
    //     2. **Connexion à la base de données** :
    //        - Une connexion à la base de données est établie en utilisant la fonction `connectDB()`. Cela crée un objet PDO qui sera utilisé pour interagir avec la base de données.
        
    //     3. **Préparation et exécution de la requête SQL** :
    //        - Une requête SQL est préparée pour insérer des données dans la table "users". Les valeurs à insérer sont passées en utilisant des paramètres de substitution (`?`) dans la requête, ce qui protège contre les attaques SQL par injection.
    //        - Les valeurs à insérer sont récupérées à partir du tableau `$_POST`. Il s'agit des valeurs des champs du formulaire "firstName", "name", "mail", et "password".
    //        - Le mot de passe est haché à l'aide de la fonction `password_hash()` avant d'être inséré dans la base de données. Cela garantit que le mot de passe est stocké de manière sécurisée.
    //        - La requête est exécutée en utilisant `$sql->execute()`.
        
    //     4. **Redirection vers une autre page** :
    //        - Après avoir inséré les données avec succès, l'utilisateur est redirigé vers la page "adminlist" en utilisant `header("Location:?page=adminlist")`. Cela permet généralement de rediriger l'utilisateur vers une liste d'éléments existants ou de confirmer que les données ont été ajoutées avec succès.
        
    //     5. **Inclusion de la vue** :
    //        - Enfin, le code inclut le fichier de vue "./views/layout.phtml". La vue peut contenir un message de confirmation ou une redirection vers une autre page, mais les détails spécifiques de la vue ne sont pas inclus dans le code fourni.
        
    //     En résumé, ce code gère l'insertion de nouvelles données d'utilisateur dans la table "users" de la base de données. Il effectue la validation du formulaire, la connexion à la base de données, l'insertion des données, la redirection de l'utilisateur vers une autre page et l'inclusion de la vue.













//password verify = vérifie seulement si le mot de passe présent dans la bdd correspond bien au hashage du mot de password_get_info


// crypter, hasher le mot de passe qui a été saisi 
    // dans le formulaire de login, récupérer le mdp de l'utilisateur, le mdp hashé de la bdd et confronter les 
    // 2 avec password verify pour s'assurer que l'utilisateur a bien tapé le bon mdp pour un nom d'utilisateur donné

    // 1ère etape dans le formulaire de login, quand l'user clique sur le bouon sublit je me connecte à la bdd, je récupère ces informations: le mdp hashé
    // pour confronter avec password verufy 2 choses: le mdp que l'user a tapé dans le formulaire de login et le mot de passe hashé










// // Si le formulaire est validé on insert dans la table
    // if (isset($_POST['submit'])){
    //     $db = connectDB();
    //     $sql = $db->prepare("INSERT INTO users (firstName,name,mail, password) VALUES (?,?,?,?)");
    //     $sql->execute([
    //         $_POST['firstName'],
    //         $_POST['name'],
    //         $_POST['mail'],
    //         $_POST['password']
            
    //     ]);
    //     // Et on redirige sur l'adminlist
    //     header("Location:?page=adminlist");
    // }

    // // --- la vue
    // include "./views/layout.phtml"; 

    // //pour hasher un mdp


    // //D'abord on doit hasher le pass saisi lors de l'inscription
    // $form_password = "12345";
    // $password_hash = password_hash($form_password, PASSWORD_DEFAULT);


    // //Ensuite lors d'une connexion on va vérifier le mot de passe saisi
    // //lors de la connexion et on le confronte à celui qui est hashé dans la table user
    // $login_password="12345";
    // $password_verif = password_verify($login_password,$password_hash);


    // if($password_verif) {

    // echo "<p> Password correct</p>";


    // }else {

    //     echo "<p>Password correct </p>";

    // }

