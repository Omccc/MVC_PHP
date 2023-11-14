<?php

// $db = connectDB(); //se connecter à la bdd
// $id = $_GET['id'];
// //On récupère l'id depuis l'url
// //On la convertit en entier pour être plus prudent...
// $sql = $db->prepare("SELECT * FROM picture WHERE id='".$id."'");
// $sql->execute();

// //Le fetch tout court ne retourne qu'un seul array plat
// $pictures = $sql->fetch(PDO:: FETCH_ASSOC);


// //--- on charge la vue
// include "./views/layout.phtml";




require_once("./models/Picture.php");
// on récupère l'id depuis l'url
// on la convertit en entier pour être plus prudent...
$id = intval( $_GET['id'] );
$picModel = new Picture();
$pic = $picModel->getOne($id);
// --- on charge la vue
include "./views/layout.phtml";








































<<<<<<< HEAD
// Explications de ce code 


    // Ce code effectue les actions suivantes :

    // 1. **Connexion à la base de données** :
    //    - La première étape consiste à se connecter à la base de données en appelant la fonction `connectDB()`. Cela renvoie une instance de la classe PDO, qui permet d'interagir avec la base de données.

    // 2. **Récupération de l'identifiant depuis l'URL** :
    //    - Le code récupère l'identifiant (ID) à partir de la variable `$_GET['id']`. Cette valeur est généralement fournie en tant que paramètre dans l'URL.

    // 3. **Requête SQL pour récupérer une image spécifique** :
    //    - Le code prépare une requête SQL en utilisant l'ID récupéré de l'URL. La requête est conçue pour récupérer les informations d'une image spécifique de la base de données.

    // 4. **Exécution de la requête SQL** :
    //    - La requête SQL est exécutée en utilisant la méthode `execute()`. Cette requête SQL est conçue pour récupérer les informations d'une image spécifique.

    // 5. **Récupération des données de l'image** :
    //    - Les données de l'image spécifique sont récupérées à l'aide de la méthode `fetch(PDO::FETCH_ASSOC)`. Cela renvoie un tableau associatif contenant les informations de l'image.

    // 6. **Inclusion de la vue** :
    //    - Une fois les données de l'image récupérées, le code inclut la vue en utilisant `include "./views/layout.phtml"`. La vue "layout.phtml" est responsable de l'affichage des informations de l'image spécifique.

    // En résumé, ce code se connecte à la base de données, récupère l'identifiant d'une image depuis l'URL, exécute une requête SQL pour récupérer les informations de cette image, puis affiche ces informations en utilisant la vue "layout.phtml". Il s'agit généralement d'une page de détail d'une image spécifique.
=======



    // En résumé, ce code se connecte à la base de données, récupère l'identifiant d'une image depuis l'URL, exécute une requête SQL pour récupérer les informations de cette image, puis affiche ces informations en utilisant la vue "layout.phtml". Il s'agit généralement d'une page de détail d'une image spécifique.
>>>>>>> 7cfdd9f937be53e1303743ad699f8a0b3f865a06
