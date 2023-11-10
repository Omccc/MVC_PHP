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
    "adminlist" => "Admin List",
    "upload" => "Upload"
   



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
















