<?php


$db = connectDB();
$sql = $db->prepare("SELECT* FROM picture ORDER BY id DESC");


$sql->execute([
   
]);
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
// --- on charge la vue


include "./views/layout.phtml"; 









































    //                 $stmt->execute(array(
    //                     date('Y-m-d H:i:s'),
    //                     $_GET['id']
    //                 ));
    //             } catch (Exception $e) { //s'il y a une exception, la mettre dans getMessage puis l'afficher
    //                 $sqlError = $e->getMessage();
    //             }
    //             //  if error
    //             if (isset($sqlError)) {
    //                 echo $sqlError;
    //             }
    //             // requete SELECT
    //             try {
    //                 $sql = "SELECT * FROM picture WHERE id=?";
    //                 $stmt = $connection->prepare($sql);
    //                 $stmt->execute(array($_GET['id']));
    //             } catch (Exception $e) {
    //                 $sqlError = $e->getMessage();
    //             }
    //             //  if error
    //             if (isset($sqlError)) {
    //                 echo $sqlError;
    //             }
    //             //  results (mise en tableau)
    //             $users = $stmt->fetch(PDO::FETCH_ASSOC);
    //             // print_r($users);
    //             echo '<hr>';

    //         
