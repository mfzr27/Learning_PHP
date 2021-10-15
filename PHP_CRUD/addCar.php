<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car CRUD - New Car</title>
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

    <div class="container">
        <h2>New Car</h2>
        <form action="addCarAction.php" method="POST">
            <div class="form-group">
                <label for="make">Make: </label>
                <input type="text" class="form-control" name="make">
            </div>
            <div class="form-group">
                <label for="model">Model: </label>
                <input type="text" class="form-control" name="model">
            </div>
            <div class="form-group">
                <label for="color">Color: </label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="form-group">
                <label for="year">Year: </label>
                <input type="number" class="form-control" name="year">
            </div>
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>

</body>

</html>