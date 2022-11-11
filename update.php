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
    <title>CRUD</title>
    <?php require_once "./components/bootstrap.php"; ?>
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='./images/<?= $picture ?>'
                alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Title"
                            value="<?= $title ?>" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class="form-control" type="file" name="image" /></td>
                </tr>
                <tr>
                    <th>ISBN Code</th>
                    <td><input class="form-control" type="text" name="ISBN_code" placeholder="ISBN Code"
                            value="<?= $ISBN_code ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class="form-control" type="text" name="short_description" 
                    placeholder="Write a short description" value="<?= $short_description ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" 
                    placeholder="Is it a book, CD or DVD?" value="<?= $type?>" /></td>
                </tr>
                <tr>
                    <th>Author's firstname</th>
                    <td><input class='form-control' type="text" name="author_first_name" 
                    placeholder="Firstname" value="<?= $author_first_name?>"  /></td>
                </tr>
                <tr>
                    <th>Author's lastname</th>
                    <td><input class='form-control' type="text" name="author_last_name" 
                    placeholder="Lastname" value="<?= $author_last_name?>"/></td>
                </tr>
                <tr>
                    <th>Publisher's name</th>
                    <td><input class='form-control' type="text" name="publisher_name" 
                    placeholder="Name" value="<?= $publisher_name?>"  /></td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td><input class='form-control' type="text" name="publisher_date" 
                    placeholder="Date" value="<?= $publisher_date?>"/></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><input class='form-control' type="text" name="availabilty" 
                    placeholder="Status" value="<?= $availabilty?>" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?=$id?>" />
                    <input type="hidden" name="picture" value="<?= $image ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>