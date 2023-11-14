<!-- ce fichier porte le nom de notre "class" -->

<?php
require_once("./services/class/Database.php"); //intégrer le système de bdd partout, require include permet d'inclure des fichiers, require once importe le fichier qu'une seule fois



// class Picture{

    

//     public static function getAll() {

//         $pictures = []; //au début, tableau vide
//         $db = new Database();
//         $pictures = $db->query("SELECT * from picture ORDER BY id DESC");
//         return $pictures;
        
//     }

// }





class Picture
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll($nb=null)
    {
        $limit = !is_null($nb) ? "LIMIT " . $nb : "";
        $pictures = [];
        $pictures = $this->db->selectAll("SELECT * from picture ORDER BY id DESC ". $limit);
        return $pictures;
    }

    public function getOne($id=null)
    {
        $whereId = !is_null($id) ? "WHERE id=?" : "";
        $picture = [];
        $picture = $this->db->select("SELECT * from picture ". $whereId. "LIMIT 1",[$id]);
        return $picture;
    }
}



































// Explications de ce code 

    // Ce code est une classe PHP nommée "Picture" qui contient une méthode statique appelée "getAll". La classe "Picture" est utilisée pour interagir avec une base de données et récupérer des informations concernant des images (photos) à partir de la table "picture" dans la base de données. Voici une explication détaillée du code :

    //     1. **Inclusion du fichier de base de données** :
    //        - La première ligne du code inclut le fichier "./services/database.php" en utilisant la fonction "require_once". Cela permet d'intégrer le système de base de données dans ce fichier. Le "require_once" garantit que le fichier de base de données n'est inclus qu'une seule fois, même si la classe Picture est instanciée plusieurs fois.
        
    //     2. **Définition de la classe "Picture"** :
    //        - La classe "Picture" est définie en utilisant le mot-clé "class". Elle encapsule les méthodes et les propriétés nécessaires pour gérer les images.
        
    //     3. **Méthode statique "getAll"** :
    //        - La méthode statique "getAll" est définie pour récupérer toutes les images de la table "picture" de la base de données. Cette méthode ne nécessite pas d'instanciation de la classe "Picture" pour être appelée.
    //        - À l'intérieur de la méthode :
    //          - Un tableau vide nommé "$pictures" est déclaré pour stocker les données des images.
    //          - La fonction "connectDB()" est appelée pour établir une connexion à la base de données à l'aide de PDO (voir le code précédent).
    //          - Une requête SQL est préparée pour sélectionner toutes les colonnes de la table "picture" et les trier par ordre décroissant de l'identifiant ("id").
    //          - La requête SQL est exécutée.
    //          - Les résultats de la requête sont récupérés sous forme de tableau associatif en utilisant la méthode "fetchAll" de PDO avec l'option "PDO::FETCH_ASSOC".
    //          - Le tableau des images est retourné.
        
    //     En résumé, cette classe "Picture" est conçue pour récupérer les données de la table "picture" à partir de la base de données. La méthode statique "getAll" est utilisée pour obtenir toutes les images stockées dans la table. Cela permet d'abstraire la logique de récupération des données de la base de données et de la réutiliser facilement dans d'autres parties de l'application.