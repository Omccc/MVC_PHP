<!-- ce fichier porte le nom de notre "class" -->

<?php
require_once("./services/database.php"); //intégrer le système de bdd partout, require include permet d'inclure des fichiers, require once importe le fichier qu'une seule fois



class Picture{

    public static function getAll() {
        $pictures = []; //au début, tableau vide
        $pdo = connectDB();
        $sql = $pdo->prepare("SELECT * from picture ORDER BY id DESC");
        $sql-> execute();
        $pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $pictures;
    }

}

































