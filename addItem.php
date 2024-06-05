<?php
 header('Location:index.php');
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');
    include('config/db.php');
    include('connexion.php');

    $intitule= post('intitule');

    $query ="INSERT INTO todo (intitule) VALUES (:intitule)  ";
    $stmt = $pdo->prepare($query);

    $intitule=post('intitule');
    $stmt ->bindParam('intitule',$intitule);
    $stmt->execute();


?>