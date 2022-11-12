<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding</title>
    <?php require_once "./components/bootstrap.php";?>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./style/style.css">
    <style>
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
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
        <legend class='h2'>Add a book, CD or a DVD</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="Title" /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>ISBN Code</th>
                    <td><input class='form-control' type="text" name="ISBN_code" placeholder="ISBN Code" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="Write a short description." /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="Is it a book, CD or DVD?" /></td>
                </tr>
                <tr>
                    <th>Author's firstname</th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="Firstname" /></td>
                </tr>
                <tr>
                    <th>Author's lastname</th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="Lastname" /></td>
                </tr>
                <tr>
                    <th>Publisher's name</th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Name" /></td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td><input class='form-control' type="text" name="publisher_date" placeholder="Date" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><input class='form-control' type="text" name="availabilty" placeholder="Status" /></td>
                </tr>
                <tr>
                    <td><button style="color: white; background-color: rgb(129, 72, 6);" class='btn' type="submit">Insert Product</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>