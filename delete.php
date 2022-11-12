<?php
require_once "./actions/db_connection.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE libraryID = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {

        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $picture = $data['image'];
        $ISBN_code = $data['ISBN_code'];
        $short_description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_date = $data['publisher_date'];
        $availabilty = $data['availabilty'];
    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <?php require_once "components/bootstrap.php"; ?>
        <!-- stylesheet -->
        <link rel="stylesheet" href="./style/style.css">
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 70%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>

<body>
        <!-- NAVBAR -->
<nav class="navbar">
  <div class="container-fluid">
    <a class="library navbar-brand" href="index.php">Our library</a>
    <a class="add nav-link active" href="create.php">
        Add a book, CD or DVD!</a>
  </div>
</nav>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle'
                src='./images/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?= $title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="libraryID" value="<?= $id ?>" />
            <input type="hidden" name="image" value="<?= $picture ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>

</body>

</html>