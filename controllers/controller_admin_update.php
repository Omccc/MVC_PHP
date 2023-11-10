<?php

$db = connectDB();
$id = intval($_GET['id']);
$sql = $db->prepare("SELECT * FROM picture WHERE id=?");
$sql->execute([$id]);
$pictures = $sql->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["Update"])) {
    $sql = $db->prepare("UPDATE picture SET title=?, description=?, src=?, author=? WHERE id=?");
    $sql->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['src'],
        $_POST['author'],
        
        $id,
    ]);
    // Et on redirige sur l'adminlist
    header("Location:?page=adminlist");
}


// --- on charge la vue
include "./views/layout.phtml";













