<?php
require_once "./db_connection.php";
require_once "./file_upload.php";

if ($_POST) {
    $title = $_POST['title'];
    $picture = file_upload($_FILES['image']);
    $id = $_POST['id'];
    $ISBN_code = $_POST['ISBN_code'];
    $description = $_POST['short_description'];
    $type = $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_date = $_POST['publisher_date'];
    $availability= $_POST['availabilty'];
    $uploadError = '';

    if ($picture->error === 0) {
        ($_POST['image'] == "product.png" ?: unlink("../images/$_POST[picture]"));
        $sql = "UPDATE library SET title='$title', image ='$picture->fileName', ISBN_code='$ISBN_code', short_description = '$short_description', type='$type', author_first_name ='$author_first_name', author_last_name='$author_last_name', publisher_name='$publisher_name', publisher_date='$publisher_date', availabilty='$availabilty'  WHERE libraryID = $id";
    } else {
        $sql = "UPDATE library SET title='$title', ISBN_code='$ISBN_code' WHERE libraryID = $id";
    }
    if (mysqli_query($conn, $sql) == TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
    <?php require_once "../components/bootstrap.php"; ?>
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo $message; ?></p>
            <p><?php echo $uploadError; ?></p>
            <a href='../update.php?id=<?= $id ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>