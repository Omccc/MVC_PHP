<?php
// $description = "Ceci est un site de la classe...";
// $db = connectDB(); //se connecter à la bdd
// $sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC LIMIT 3");
// $sql->execute();
// $pictures = $sql->fetchAll(PDO:: FETCH_ASSOC);

// require_once "./services/class/Database.php"; //on charge la class Database
// $db = new Database(); // notre script sera connecté
// $pictures = $db->query("SELECT * FROM picture ORDER BY id DESC LIMIT 20"); //$pictures sert à récupérer les images à partir de la base de données

// //--- la vue
// include "./views/layout.phtml";  




require_once("./models/Picture.php");
$pic = new Picture();
$pictures = $pic->getAll(20);
// --- la vue
include "./views/layout.phtml";

































