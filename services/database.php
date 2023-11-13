<?php
const DB_HOST = "localhost";
const DB_NAME = "dwwm_23_10_19"; 
const DB_USER = "root";
const DB_PASS = "";


function connectDB(): PDO{
    $db = new PDO('mysql:host='.DB_HOST. ';port=3306;dbname='. DB_NAME.'; charset=utf8', DB_USER,DB_PASS);
    return $db;
}




//pdo
// configuration login mb
// on se connecte 
// on fait des requêtes















































// Explications de ce code 

    // Ce code est un exemple d'un fichier PHP qui définit des constantes et une fonction pour établir une connexion à une base de données MySQL en utilisant PDO (PHP Data Objects), une extension PHP pour interagir avec des bases de données.

    // 1. **Constantes de Configuration de la Base de Données** :
    //    - Les constantes `DB_HOST`, `DB_NAME`, `DB_USER`, et `DB_PASS` sont utilisées pour stocker les informations de configuration nécessaires pour se connecter à la base de données. Elles sont définies comme suit :
    //      - `DB_HOST` : L'adresse du serveur de base de données, généralement "localhost" s'il s'agit d'une base de données locale.
    //      - `DB_NAME` : Le nom de la base de données à laquelle vous souhaitez vous connecter.
    //      - `DB_USER` : Le nom d'utilisateur utilisé pour la connexion à la base de données.
    //      - `DB_PASS` : Le mot de passe associé à l'utilisateur pour la connexion.

    // 2. **Fonction `connectDB()`** :
    //    - Cette fonction est définie pour établir une connexion à la base de données en utilisant PDO. Elle effectue les étapes suivantes :
    //      - Crée une instance de la classe PDO en spécifiant les informations de connexion, telles que l'hôte, le port, le nom de la base de données, le jeu de caractères et les identifiants d'utilisateur et de mot de passe.
    //      - Retourne l'objet PDO nouvellement créé, qui peut être utilisé pour effectuer des opérations sur la base de données, telles que des requêtes SQL.

    // En résumé, ce code permet de stocker les informations de configuration de la base de données dans des constantes et fournit une fonction `connectDB()` pour établir une connexion à la base de données en utilisant PDO. Cette approche de séparation des informations de configuration de la base de données dans des constantes est une bonne pratique pour rendre le code plus modulaire et maintenable, car il permet de centraliser ces informations au cas où elles devraient être modifiées ultérieurement.