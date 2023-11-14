<?php


require_once("./services/database.php"); //intégrer le système de bdd partout

define("CONFIG_SITE_TITLE","Mon modèle MVC PHP"); //constante en PHP avec 2 paramètres : 2 chaines de caractères entre () 
define("CONFIG_ROUTES",
[

    // //charger les templates
    // "home" => "template_home.phtml",
    // "gallery" => "template_gallery.phtml",
    // "contact" => "template_contact.phtml"

    //Charger les controllers
    "home" => "Home",
    "gallery" => "Gallery",
    "register" => "Register",
    "api" => "API JSON",
    "upload" => "Upload",
    
    "mail" => "Mail"
   



]);


// // depuis la nouvelle norme on peut aussi écrire une variable comme en JavaScript
// //pour avoir accès à la PDO

// const DB_HOST = "localhost";
// const DB_NAME = "dwwm_23_10_19"; 
// const DB_USER = "root";
// const DB_PASS = "";
// function connectDB(): PDO{
//     $db = new PDO('mysql:host='.DB_HOST. ';port=3306;dbname='. DB_NAME.'; charset=utf8', DB_USER,DB_PASS);
//     return $db;
// }




















//Explications du code

    // Ce code PHP définit des constantes et des routes pour un modèle d'architecture MVC (Modèle-Vue-Contrôleur). Voici une explication de chaque partie du code non commentée :

    // 1. **`require_once("./services/database.php");`** :
    //    - Cette ligne inclut le fichier "database.php" depuis le dossier "services". Il s'agit probablement d'un fichier qui gère la connexion à une base de données, et en utilisant `require_once`, il s'assure qu'il n'est inclus qu'une seule fois dans le script, évitant ainsi des inclusions multiples.

    // 2. **`define("CONFIG_SITE_TITLE", "Mon modèle MVC PHP");`** :
    //    - Cette ligne définit une constante en PHP nommée "CONFIG_SITE_TITLE" avec la valeur "Mon modèle MVC PHP". Les constantes en PHP sont des valeurs qui ne peuvent pas être modifiées une fois qu'elles sont définies. Cette constante semble contenir le titre du site web.

    // 3. **`define("CONFIG_ROUTES", [...]);`** :
    //    - Cette ligne définit une autre constante en PHP nommée "CONFIG_ROUTES" avec une liste de routes.
    //    - Ces routes sont associées à des noms de pages ou de fonctionnalités de l'application et aux contrôleurs correspondants. Par exemple, lorsque l'URL contient "home", le contrôleur "Home" sera chargé pour gérer cette page.
    //    - Cela semble être une configuration de routage qui permet de mapper des URL aux contrôleurs correspondants dans le modèle MVC. Chaque élément du tableau associe une route (URL) à un contrôleur.

    // Ce code prépare l'application pour le modèle MVC en incluant le fichier de base de données et en définissant des constantes pour le titre du site et les routes. Les routes sont particulièrement importantes, car elles permettent de rediriger les requêtes URL vers les contrôleurs appropriés, facilitant ainsi la gestion de différentes pages ou fonctionnalités de l'application.