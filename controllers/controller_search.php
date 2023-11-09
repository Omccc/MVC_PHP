<?php
$db = connectDB();
// on récupère la chaine de recherche depuis l'url
// on la convertit en texte en enlevant les espace...
$keywords = strtolower(strval(urldecode(trim($_GET['keywords']))));
$sql = $db->prepare("SELECT * FROM picture WHERE title LIKE '%".$keywords."%' OR description LIKE '%".$keywords."%' OR src LIKE '%".$keywords."%' OR author LIKE '%".$keywords."%'");
$sql->execute();
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
// --- on charge la vue
include "./views/layout.phtml"; 



















































// Explications de ce code 

    // Ce code traite une requête de recherche d'images dans une base de données en fonction de mots-clés fournis par l'utilisateur. Voici une explication étape par étape du code :

    // 1. **Connexion à la base de données** :
    //    - Tout d'abord, une connexion à la base de données est établie en appelant la fonction `connectDB()`. Cette fonction renvoie un objet PDO qui permettra d'interagir avec la base de données.

    // 2. **Récupération des mots-clés de la requête** :
    //    - Les mots-clés de recherche sont extraits de l'URL en utilisant la superglobale `$_GET`. La variable `$keywords` est utilisée pour stocker ces mots-clés.
    //    - Les espaces en début et en fin de la chaîne de recherche sont supprimés à l'aide de la fonction `trim()`.
    //    - Les mots-clés sont convertis en minuscules à l'aide de `strtolower()` pour assurer que la recherche est insensible à la casse.

    // 3. **Préparation et exécution de la requête SQL** :
    //    - Une requête SQL est préparée pour sélectionner toutes les lignes de la table "picture" où le titre, la description, la source (src), ou l'auteur contiennent les mots-clés de recherche. La requête utilise l'opérateur SQL "LIKE" pour rechercher des correspondances partielles.
    //    - La requête est exécutée en appelant `$sql->execute()`.

    // 4. **Récupération des résultats de la recherche** :
    //    - Les résultats de la recherche sont récupérés à l'aide de `$sql->fetchAll(PDO::FETCH_ASSOC)`. Cela renvoie un tableau associatif contenant les données des images qui correspondent aux mots-clés de recherche.

    // 5. **Chargement de la vue** :
    //    - Enfin, le code inclut le fichier de vue "./views/layout.phtml". Cette vue peut afficher les images résultant de la recherche, mais les détails de la vue ne sont pas inclus dans le code fourni.

    // En résumé, ce code effectue une recherche dans la base de données en fonction des mots-clés fournis par l'utilisateur via l'URL, puis récupère les résultats de la recherche pour les afficher dans une vue spécifiée. La vue peut être configurée pour afficher les images correspondant aux mots-clés de recherche.