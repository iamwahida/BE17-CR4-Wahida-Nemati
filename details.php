<?php
require_once "./actions/db_connection.php";

$sql = "SELECT * from library";
$result = mysqli_query($conn, $sql);
$tbody = "";

if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
        <div class='card p-3' style='width: 260px;'>
        <img class='img-thumbnail' src='images/" . $row['image'] . "'>
  <div class='card-body'>
  <br>
    <h5 class='card-title'>". $row['title'] ."</h5>
    <p class='card-text'>" . $row['short_description'] . "..</p>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'><strong>ISBN Code: </strong>" . $row['ISBN_code'] . "</li>
    <li class='list-group-item'><strong>Type: </strong>" . $row['type'] . "</li>
    <li class='list-group-item'><strong>Author's name: </strong>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</li>
    <li class='list-group-item'><strong>Publisher's name: </strong>" . $row['publisher_name'] . "</li>
    <li class='list-group-item'><strong>Publish date: </strong>" . $row['publisher_date'] . "</li>
    <li class='list-group-item'><strong>Status: </strong>" . $row['availabilty'] . "</li>
  </ul>
  <div class='card-body'>
  <a href='update.php?id=" . $row['libraryID'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
  <a href='delete.php?id=" . $row['libraryID'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a><br>
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
    <link rel="stylesheet" href="./styling/style.css">
</head>
<body>
<div class='mb-3 mt-3'>
        </div>
    <div class="container d-flex justify-content-center row row-cols-1 mt-5 mb-5 gap-3">
        <?php echo $tbody; ?>
    </table>
    <br>
    <a href="index.php"><button class="btn btn-warning" type="button">Back</button></a>
    </div>

</body>
</html>