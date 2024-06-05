<?php
header('Location:index.php');
include('fct/item.php');
include('fct/request.php');
include('config/app.php');
include('config/db.php');
include('connexion.php');


    $id = get('item');
    $query ="DELETE FROM todo WHERE id=:id";
    $stmt = $pdo->prepare($query);

    $intitule=post('intitule');
    $stmt ->bindParam('id',$id);
    $stmt->execute();   

?>