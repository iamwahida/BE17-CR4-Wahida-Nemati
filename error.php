<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
    <!-- BOOTSTRAP -->
    <?php require_once "./components/bootstrap.php"; ?>
        <!-- STYLESHEET -->
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
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Invalid Request</h1>
        </div>
        <div class="alert alert-warning" role="alert">
            <p>You've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> to index and
                try again.</p>
        </div>
    </div>

</body>

</html>