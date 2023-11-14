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














































