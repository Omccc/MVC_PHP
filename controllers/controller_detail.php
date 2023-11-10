<?php

$db = connectDB(); //se connecter à la bdd
$id = $_GET['id'];
//On récupère l'id depuis l'url
//On la convertit en entier pour être plus prudent...
$sql = $db->prepare("SELECT * FROM picture WHERE id='".$id."'");
$sql->execute();

//Le fetch tout court ne retourne qu'un seul array plat
$pictures = $sql->fetch(PDO:: FETCH_ASSOC);


//--- on charge la vue
include "./views/layout.phtml";











































    // En résumé, ce code se connecte à la base de données, récupère l'identifiant d'une image depuis l'URL, exécute une requête SQL pour récupérer les informations de cette image, puis affiche ces informations en utilisant la vue "layout.phtml". Il s'agit généralement d'une page de détail d'une image spécifique.
