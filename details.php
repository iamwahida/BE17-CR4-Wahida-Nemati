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
    <title>Library</title>
    <!-- BOOTSTRAP LINK -->
    <?php require_once "./components/bootstrap.php";?>
    <!-- STYLING SCSS LINK -->
    <link rel="stylesheet" href="./style/style.css">
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

    <div class="container d-flex justify-content-center mt-5 mb-5">
        <div class="card mb-3" style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4 p-3">
      <img src='./images/<?php echo $picture ?>' class="img-fluid" alt="<?php echo $title ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $title ?></h5>
        <p class="card-text"><?= $short_description?></p>
        <ul>
            <li><?= $ISBN_code ?></li>
            <li><?= $type ?></li>
            <li><?= $author_first_name ?> <?= $author_last_name ?></li>
            <li><?= $publisher_name ?></li>
            <li><?= $publisher_date ?></li>
            <li><?= $availabilty ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
    </div>

</body>
</html>