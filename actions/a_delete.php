<?php
require_once "./db_connection.php";

if ($_POST) {
    $id = $_POST['libraryID'];
    $picture = $_POST['image'];
    ($picture == "product.png" ?: unlink("../images/$picture"));
    $sql = "DELETE from library WHERE libraryID = $id";
    // echo $sql;
    if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "Record deleted";
    } else {
        $class = "danger";
        $message = "Record not deleted" . $conn->error;
    }
} else {
    header("location: ../error.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "../components/bootstrap.php"; ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Delete request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>