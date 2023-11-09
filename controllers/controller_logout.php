<?php

session_unset();

header("Location:?page=home");

?>























































<!-- Explication de code  -->

    Ce code PHP permet de se déconnecter d'un site web.

    La première ligne de code, session_unset(), détruit la session courante. Cela signifie que toutes les variables de session sont supprimées, y compris les informations de connexion de l'utilisateur.

    La deuxième ligne de code, header("Location:?page=home");, redirige l'utilisateur vers la page d'accueil du site web.

    En résumé, ce code permet de se déconnecter d'un site web en détruisant la session courante et en redirigeant l'utilisateur vers la page d'accueil.

    Voici une explication plus détaillée des deux lignes de code :

    session_unset()

    La fonction session_unset() détruit la session courante. Cette fonction prend en argument une liste de variables de session à détruire. Si aucune variable n'est spécifiée, toutes les variables de session sont détruites.

    Dans ce cas, aucune variable de session n'est spécifiée, donc toutes les variables de session sont détruites. Cela signifie que les informations de connexion de l'utilisateur sont également supprimées.

    header("Location:?page=home");

    La fonction header() envoie une en-tête HTTP au navigateur de l'utilisateur. Cette fonction prend en argument une chaîne de caractères contenant l'en-tête HTTP à envoyer.

    Dans ce cas, la chaîne de caractères Location:?page=home indique au navigateur de l'utilisateur de charger la page home. La question mark (?) indique que la page home peut être chargée avec des paramètres. Dans ce cas, le paramètre page est égal à home.

    Par conséquent, lorsque ce code est exécuté, l'utilisateur est déconnecté et redirigé vers la page d'accueil du site web.