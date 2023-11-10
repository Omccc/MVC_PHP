<?php
// $description = "Ceci est un site de la classe...";
$db = connectDB(); //se connecter à la bdd
$sql = $db->prepare("SELECT * FROM picture");
$sql->execute();
$pictures = $sql->fetchAll(PDO:: FETCH_ASSOC);
//--- la vue
include "./views/layout.phtml"; 






































