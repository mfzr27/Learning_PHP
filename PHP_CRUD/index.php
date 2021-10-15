<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

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

    <?php
    require 'dbConnection.php';

    $carsList = [];

    $sql = $pdo->query("SELECT * FROM cars");
    if ($sql->rowCount() > 0) {
        $carsList = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    ?>

    <div class="container">
        <h2>All Cars</h2>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Color</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carsList as $car) : ?>
                    <tr>
                        <th><?= $car['id'] ?></th>
                        <td><?= $car['make']; ?></td>
                        <td><?= $car['model']; ?></td>
                        <td><?= $car['color']; ?></td>
                        <td><?= $car['year']; ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="editCar.php?id=<?= $car['id'];?>" role="button">Edit</a>
                            <a class="btn btn-danger btn-sm" href="deleteCar.php?id=<?= $car['id'];?>" role="button">Delete</a>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>