<?php //récolte toutes les requêtes, charge un controleur pour exécuter une logique
session_start();

//--- la config
require "config.php"; //ou./config.php relatif à la racine du dossier ; charger la config
// --- le routeur
require "./services/router.php"; //traiter le router
// --- le controlleur
require "./controllers/controller_{$page}.php"; //on charge le controlleur
// --- la vue
// include "./views/layout.phtml";
















































// Explications du code

    // Ce code PHP est un script qui gère les requêtes web en utilisant un modèle de routage et de contrôleurs. Voici une explication de chaque partie du code :

    // 1. **`session_start();`** :
    //    - Cette ligne démarre ou reprend une session PHP existante. Les sessions sont utilisées pour stocker des informations sur l'utilisateur entre les requêtes HTTP.

    // 2. **`require "config.php";`** :
    //    - Cette ligne inclut le fichier "config.php", qui est probablement un fichier de configuration contenant des paramètres, des constantes ou des configurations nécessaires au fonctionnement de l'application.

    // 3. **`require "./services/router.php";`** :
    //    - Cette ligne inclut le fichier "router.php" depuis le dossier "services". Le fichier "router.php" est probablement responsable de la gestion des routes et de la redirection des requêtes vers les contrôleurs appropriés en fonction de l'URL demandée.

    // 4. **`require "./controllers/controller_{$page}.php";`** :
    //    - Cette ligne inclut un fichier de contrôleur en fonction de la variable `$page`. Il semble que le nom du fichier de contrôleur soit généré dynamiquement en utilisant la valeur de la variable `$page`. Les contrôleurs sont responsables de l'exécution de la logique métier en réponse à une requête spécifique.

    // 5. **`include "./views/layout.phtml";`** (commenté) :
    //    - Cette ligne est commentée, ce qui signifie qu'elle est désactivée dans le code. Elle aurait normalement inclus un fichier de modèle de vue "layout.phtml", qui pourrait être responsable de l'affichage de la réponse à l'utilisateur. Les modèles de vue sont généralement utilisés pour générer la sortie HTML.

    // Globalement, ce code met en place une architecture de base pour une application web. Il initialise une session, charge un fichier de configuration, utilise un routeur pour diriger les requêtes vers les contrôleurs appropriés, et éventuellement génère une vue pour afficher les résultats. Le choix du contrôleur dépend probablement de la variable `$page`, qui est utilisée pour déterminer quelle page ou fonctionnalité de l'application doit être affichée en réponse à la requête.