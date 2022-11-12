<?php
require_once "./db_connection.php";
require_once "./file_upload.php";

if ($_POST) {
    $title = $_POST['title'];
    $picture = file_upload($_FILES['picture']);
    // var_dump_pretty($_FILES['picture']);
    // echo "<br>";
    // var_dump_pretty($picture);
    $ISBN_code = $_POST['ISBN_code'];
    $description = $_POST['short_description'];
    $type = $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_date = $_POST['publisher_date'];
    $availability= $_POST['availabilty'];
    $uploadError = '';

    // insert data into database with the query
    $sql = "INSERT INTO library (title, image, ISBN_code, short_description, type, author_first_name, author_last_name, publisher_name, publisher_date, availabilty) VALUES ('$title', '$picture->fileName', '$ISBN_code', '$description', '$type', '$firstname', '$lastname', '$publisher_name', '$publisher_date', '$availability')";

    if (mysqli_query($conn, $sql) == true) {
        $message = "
        The entry below was successfully created <br><br>
        <div class='card p-3' style='width: 360px;'>
        <img class='img-thumbnail' src='../images/$picture->fileName'>
        <div class='card-body'>
             <br>
            <h5 class='card-title'>$title</h5>
            <p class='card-text'>$description</p>
        <ul class='list-group list-group-flush'>
            <li class='list-group-item'><strong>ISBN Code: </strong>$ISBN_code</li>
            <li class='list-group-item'><strong>Type: </strong>$type</li>
            <li class='list-group-item'><strong>Author's name: </strong>$firstname $lastname</li>
            <li class='list-group-item'><strong>Publisher's name: </strong>$publisher_name</li>
            <li class='list-group-item'><strong>Publish date: </strong> $publisher_date</li>
            <li class='list-group-item'><strong>Status: </strong>$availability</li>
        </ul>
        </div>
        </div><br>";
    	$uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';

    } else {
        $message = "Error while creating record. Try again: <br>" . 
        $conn->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
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
    <title>Create</title>
    <?php require_once "../components/bootstrap.php"; ?>
        <!-- STYLING SCSS LINK -->
        <link rel="stylesheet" href="../style/style.css">
</head>

<body>
     <!-- NAVBAR -->
<nav class="navbar">
  <div class="container-fluid">
    <a class="library navbar-brand" href="../index.php">Our library</a>
    <a class="add nav-link active" href="../create.php">
        Add a book, CD or DVD!</a>
  </div>
</nav>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert" role="alert">
            <?= $message; ?>
            <p><?= $uploadError; ?></p>
            <a href='../index.php'><button style='color: white; background-color: rgb(129, 72, 6);' class="btn" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>