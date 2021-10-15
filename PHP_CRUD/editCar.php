<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car CRUD - Edit Car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<?php
    require 'dbConnection.php';

    $carInfo = [];
    $carId = filter_input(INPUT_GET, 'id');

    if($carId){
        $sql = $pdo->prepare("SELECT * FROM cars WHERE id = :id");
        $sql->bindValue('id', $carId);
        $sql->execute();
        if($sql->rowCount() > 0){
            $carInfo = $sql->fetch( PDO::FETCH_ASSOC );
        }else{
            header("Location:index.php");
        }
    }else{
        header("Location:index.php");
        exit;
    }
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Car CRUD</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addCar.php">New Car</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Edit Car</h2>
        <form action="editCarAction.php" method="POST">
            <div class="form-group">
                <label for="make">Make: </label>
                <input type="text" class="form-control" name="make" value="<?=$carInfo['make']?>">
            </div>
            <div class="form-group">
                <label for="model">Model: </label>
                <input type="text" class="form-control" name="model" value="<?=$carInfo['model']?>">
            </div>
            <div class="form-group">
                <label for="color">Color: </label>
                <input type="text" class="form-control" name="color" value="<?=$carInfo['color']?>">
            </div>
            <div class="form-group">
                <label for="year">Year: </label>
                <input type="number" class="form-control" name="year" value="<?=$carInfo['year']?>">
            </div>
            <input type="hidden" name="id" value="<?=$carInfo['id']?>">
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>

</body>

</html>