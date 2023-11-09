<?php
// $description = "Ceci est un site de la classe...";
$db = connectDB(); //se connecter à la bdd
$sql = $db->prepare("SELECT * FROM picture");
$sql->execute();
$pictures = $sql->fetchAll(PDO:: FETCH_ASSOC);
//--- la vue
include "./views/layout.phtml"; 



















































// Explications de ce code 

    // Ce code effectue les actions suivantes :

    // 1. **Connexion à la base de données** :
    //    - Le code utilise la fonction `connectDB()` pour établir une connexion à la base de données. Cette connexion est stockée dans la variable `$db`.

    // 2. **Récupération des images à partir de la base de données** :
    //    - Une requête SQL est préparée pour sélectionner toutes les entrées de la table "picture" dans la base de données.
    //    - La requête est exécutée à l'aide de la méthode `execute()`.
    //    - Les données résultantes sont récupérées sous forme de tableau associatif à l'aide de `fetchAll(PDO::FETCH_ASSOC)`. Les données sont stockées dans la variable `$pictures`.

    // 3. **Inclusion de la vue** :
    //    - Une fois que les données des images ont été récupérées, le code inclut le fichier de vue "./views/layout.phtml". Cette vue peut afficher les images récupérées à partir de la base de données.

    // Le code suppose que la vue (dans le fichier "layout.phtml") est responsable de l'affichage des images récupérées depuis la base de données. Le code dans le fichier "layout.phtml" devrait parcourir le tableau `$pictures` et afficher chaque image selon le format souhaité.

    // En résumé, ce code se connecte à la base de données, récupère des données d'images à partir de la table "picture", puis inclut une vue pour afficher ces images. Le détail de l'affichage des images se trouvera dans le fichier de vue "layout.phtml".