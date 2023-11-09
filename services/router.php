<?php 
//Si la variable page est définie dans l'URL
//On utilise page pour trouver le controlleur

// if (isset($_GET['page']) && file_exists("./controllers/controller_".$_GET['page'].".php")) { //si page est définie avec une variable avec la méthode GET et si le fichier de template existe alors tu me définis les pages

//     $page = $_GET['page']; //si c'est bon, il le définit

// //Sinon la page c'est home et le controlleur c'est
// //controlleur_home.php (logique)
// } else {
//     $page = 'home';
    

// }

// //ternaire
// $page = condition ? action : sinon;
$getPage = strtolower($_GET['page']); // mettre automatiquement en miniscules
$page = isset($_GET['page']) && file_exists("./controllers/controller_".$getPage.".php") ?  $getPage : array_key_first(CONFIG_ROUTES);



// $template = "template_" . $page . ".phtml"; en fonction des pages que je vais avoir, je vais charger différentes parties



