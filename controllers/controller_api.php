<?php
$db = connectDB();
$sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC");
$sql->execute();
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
header('content-type:application/json');
// echo json_encode($pictures);



// var_dump($pictures);
print_r($pictures);

















































// Explications de ce code 

    // Ce code effectue les actions suivantes :

    // 1. **Connexion à la base de données** :
    //    - Le code commence par se connecter à la base de données en utilisant la fonction `connectDB()`. Cela établit une connexion avec la base de données pour effectuer des opérations ultérieures.

    // 2. **Requête SQL pour récupérer des images** :
    //    - Une requête SQL est préparée pour sélectionner toutes les données de la table "picture" dans la base de données. Les images sont triées par ordre décroissant de leur ID, ce qui signifie qu'il récupérera les images les plus récentes en premier.

    // 3. **Exécution de la requête SQL** :
    //    - La requête SQL est exécutée en utilisant la méthode `execute()`, récupérant ainsi les résultats de la base de données.

    // 4. **Récupération des données** :
    //    - Les données récupérées de la base de données (les images) sont stockées dans un tableau associatif `pictures` en utilisant la méthode `fetchAll(PDO::FETCH_ASSOC)`.

    // 5. **Définition de l'en-tête de réponse JSON** :
    //    - Le code utilise `header('content-type:application/json')` pour définir l'en-tête de la réponse HTTP en tant que type de contenu JSON. Cela indique au navigateur que le contenu de la réponse sera au format JSON.

    // 6. **Affichage des données JSON** :
    //    - Enfin, le tableau `$pictures` est affiché en utilisant `print_r($pictures)`. Cela affiche les données récupérées de la base de données sous forme de structure JSON, ce qui est utile pour le débogage ou la communication de données avec d'autres parties du code.

    // Le code semble actuellement commenter la ligne qui utilise `json_encode($pictures)` pour renvoyer les données en tant que réponse JSON. Si vous souhaitez renvoyer ces données en tant que réponse JSON au lieu de les afficher sous forme de tableau, vous pouvez décommenter cette ligne pour utiliser `echo json_encode($pictures)`.