<?php
  session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>


<?php
$_SESSION['username'] = "Ashton64";
echo $_SESSION['username'];
if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else  {
    echo "You are logged in!";
}


?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">index</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Calender.php">Calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="internalfunctions.php">Functions</a>
        </li>
       <li class= "nav-item">
          <a class="nav-link" href="datatypes.php">datatypes</a>
        </li>
        <li class= "nav-item">
          <a class="nav-link" href="index.php">caculator</a>
        </li>
        <li class= "nav-item">
          <a class="nav-link" href="loop.php">loop</a>
        </li>

      </ul>
    <?php
      require "header.php";
      ?>

        <main>
          <div class="wrapper-main">
            <section class="section-default'>
            <h1>Signups</h1>
            <form action="includes/signup.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="text" name="uid" placeholder="Username">
    </div>
  </div>
</nav>