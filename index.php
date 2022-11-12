<?php
require_once "./actions/db_connection.php";

$sql = "SELECT * from library";
$result = mysqli_query($conn, $sql);
$tbody = "";

if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
        <div class='card p-3' style='width: 290px; text-align: center;'>
        <img class='img-thumbnail' src='images/" . $row['image'] . "'>
  <div class='card-body'>
  <br>
    <h4 class='card-title'>". $row['title'] ."</h4>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'><strong>Type: </strong>" . $row['type'] . "</li>
    <li class='list-group-item'><strong>Author's name: </strong>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</li>
    <li class='list-group-item'><strong>Publisher's name: </strong>" . $row['publisher_name'] . "</li>
  </ul>
  <div class='card-body'>
  <a href='update.php?id=" . $row['libraryID'] . "'><button style='color: white; background-color: rgb(129, 72, 6);'class='btn btn-sm' type='button'>Edit</button></a>
  <a href='delete.php?id=" . $row['libraryID'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
  <br><br>
  <a href='details.php?id=" . $row['libraryID'] . "'><button class='btn btn-dark btn-sm' type='button'>Show details</button></a>

  </div>
  </div>
  </div>

";
    }

} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
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
<nav style="padding-bottom: 20px; padding-top: 20px;" class="navbar">
  <div class="container-fluid">
    <a class="library navbar-brand" href="index.php">Our library</a>
    <a class="add nav-link active" href="create.php">
        <span>Add a book, CD or DVD!</span></a>
  </div>
</nav>

    <div class="container container-fluid justify-content-center row row-cols-1 mt-5 mb-5 gap-3">
        <?php echo $tbody; ?>
    </div>

</body>
</html>