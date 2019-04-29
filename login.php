<?php
    require("createSession.php");
?>
<html>
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Labor Legion</title>

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/grayscale.min.css" rel="stylesheet">
      <link href="all.css" rel="stylesheet">
    </head>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a href="index.html">
              <picture>
                <img class="navbar-brand" src="img/icon.png" width="60" height="60" alt="IfItDoesntMatchAnyMedia">
              </picture>
          </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="jobListings.php">Search For Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="profileBrowser.php">Browse Profiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br><br>
    <form action="createSession.php" method="post">
        <div class="container col-3 justify-content-center">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="username" name="username" class="form-control" id="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <center><input type="submit" name="loginButton" class="btn btn-default" value="Login"></center>
      </div>
    </form>
</html>
