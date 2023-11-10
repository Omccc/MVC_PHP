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

