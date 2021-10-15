<?php

    require 'dbConnection.php';

    $make = filter_input(INPUT_POST, 'make');
    $model = filter_input(INPUT_POST, 'model');
    $color = filter_input(INPUT_POST, 'color');
    $year = filter_input(INPUT_POST, 'year');

    if($make && $model && $year && $color){

        $sql = $pdo->prepare("INSERT INTO cars (make, model, color, year) VALUES (:make, :model, :color, :year)");
        $sql->bindValue(':make', $make);
        $sql->bindValue(':model', $model);
        $sql->bindValue(':color', $color);
        $sql->bindValue(':year', $year);
        $sql->execute();

        header("Location:index.php");
        exit;
    }else{
        header("Location:addCar.php");
        exit;
    }