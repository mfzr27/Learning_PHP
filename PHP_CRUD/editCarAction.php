<?php

    require 'dbConnection.php';

    $id = filter_input(INPUT_POST, 'id');
    $make = filter_input(INPUT_POST, 'make');
    $model = filter_input(INPUT_POST, 'model');
    $color = filter_input(INPUT_POST, 'color');
    $year = filter_input(INPUT_POST, 'year');

    if($make && $model && $color && $year){

        $sql = $pdo->prepare("UPDATE cars SET make = :make, model = :model, color = :color, year = :year WHERE id = :id");
        $sql->bindValue(':make', $make);
        $sql->bindValue(':model', $model);
        $sql->bindValue(':color', $color);
        $sql->bindValue(':year', $year);
        $sql->bindValue(':id', $id);
        $sql->execute();

        header("Location:index.php");
        exit;
    }else{
        header("Location:addCar.php");
        exit;
    }