<?php
    require("getCategories.php");
?>
<html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">

      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">   <!-- for multi-selector -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>            <!-- for multi-selector -->

      <link href="all.css" rel="stylesheet">
      <link rel="stylesheet" href="./createListing.css">
      <link rel="stylesheet" href="css/grayscale.css">

      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
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
    <div class="container justify-content-center">
        <div class="row">
            <form class="">
                <div class="form-label-group space row">
                    <label class="unselectable font-weight-bold" for="title">Job Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-label-group space row">
                    <label class="unselectable font-weight-bold" for="category">Category</label>
                    <select class="custom-select" id="categorySelect" name="category">
                        <?php getCategories() ?>
                    </select>
                </div>
                <div class="form-label-group space row">
                    <label class="unselectable font-weight-bold" for="description">Job Description</label>
                    <input type="textarea" name="description" class="form-control" required>
                </div>
                <div class="form-label-group space row">
                    <label class="unselectable font-weight-bold" for="requirements">List Any Requirements (ex: Certifications, Standards, Methods)</label>
                    <input type="text" name="requirements" class="form-control">    <!-- text lines that dropdown as more are needed -->
                </div>
                <div class="form-label-group space row">

                    <label class="unselectable font-weight-bold" for="skillsRequired">Select All Skills Required:</label>
                                            <script type="text/javascript"> ajaxSkills(); </script>
                    <select class="custom-select" id="skillSelect" name="category">

                    </select>
                </div>
                <div class="form-label-group file-upload-wrapper upload">
                    <label class="unselectable font-weight-bold" for="imageUpload">Upload Image:</label>
                    <input type="file" id="input-file-now" class="file-upload" />
                </div>
                <div class="form-label-group space row">
                    <label class="unselectable font-weight-bold" for="offerPrice">Offer Price</label>
                    <input type="text" name="offerPrice" class="form-control">
                </div>
                <input type="submit" class="space" name="createListingBtn" value="Create Listing">
            </form>
        </div>
    </div>
</html>

<script>
$(document).ready(function() {

    $("#categorySelect").change(function() {
          var category_id = $(this).val();

          $.ajax({
                url: './getSkills.php',
                type: 'post',
                data: {category:category_id},
                dataType: 'json',
                success: function(response){

                    var len = response.length;

                    $("#skillSelect").empty();
                    for(var i = 0; i < len; i++) {
                        var id = response[i]['skill_id'];
                        var skill = response[i]['skill'];

                        $("#skillSelect").append("<option value='"+id+"'>"+skill+"</option>");
                    }
                }
          });
    });
});
</script>

<script>
    $('.file-upload').file_upload();
</script>
