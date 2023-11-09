

<?php
// $db = connectDB();
// $sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC");
// $sql->execute();
require_once ("./models/Picture.php");  //je charge mon model
$pictures = Picture::getAll();  //je veux injecter pictures à l'intérieur de mon layout
// --- on charge la vue
include "./views/layout.phtml"; 

















































// Explications de ce code 

    // Ce code effectue les actions suivantes :

    // 1. **Inclusion du modèle** :
    //    - Le code commence par inclure le fichier contenant le modèle "Picture.php" à l'aide de `require_once`.
    //    - Le modèle "Picture.php" est responsable de l'interaction avec la base de données pour récupérer des images. Il est utilisé pour encapsuler la logique de récupération des données.

    // 2. **Récupération des images à partir du modèle** :
    //    - Après avoir inclus le modèle, le code utilise la méthode statique `getAll()` de la classe `Picture` pour récupérer les images.
    //    - Les images sont récupérées sous forme de tableau et stockées dans la variable `$pictures`.

    // 3. **Inclusion de la vue** :
    //    - Une fois les données des images récupérées à partir du modèle, le code inclut la vue en utilisant `include "./views/layout.phtml"`.
    //    - La vue "layout.phtml" est responsable de l'affichage des images récupérées depuis le modèle.

    // Le modèle "Picture.php" encapsule la logique de récupération des images à partir de la base de données, tandis que la vue "layout.phtml" affiche ces images selon le format souhaité. La structure du code suit un modèle de conception MVC (Modèle-Vue-Contrôleur) où le modèle gère les données, la vue gère l'interface utilisateur et le contrôleur coordonne les interactions entre les deux.