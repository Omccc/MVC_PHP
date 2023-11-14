

<?php
// $db = connectDB();
// $sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC");
// // $sql->execute();
// require_once ("./models/Picture.php");  //je charge mon model
// $pictures = Picture::getAll();  //je veux injecter pictures à l'intérieur de mon layout
// // --- on charge la vue





require_once("./models/Picture.php");
$pic = new Picture();
$pictures = $pic->getAll();
// --- on charge la vue
include "./views/layout.phtml";











































