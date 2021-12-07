<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/boot/bootstrap.min.css">

  <!-- Fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/custom.css">

  <!-- Lightbox CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/lightbox/dist/css/strip.css">

  <!-- LightSlider CSS -->
  <link type="text/css" rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/lightslider.css" />

  <!-- Vivify CSS -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/vivify/vivify.min.css"> -->
  <link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/vivify.min.css">

  <!-- CK editor -->
  <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>

  <title>School Project</title>
</head>

<body>
  <!-- Top bar starts here  -->

  <?php if (isLoggedIn()) : ?>
    <section id="top-bar" style="height: 60px!important; line-height:60px!important;">
    <?php else : ?>
      <section id="top-bar">
      <?php endif; ?>
      <div class="container">
        <div class="row">
          <div class="top-bar-content d-flex justify-content-between justify-content-lg-between w-100 px-5 px-lg-0">
            <div class="topbar-mail">
              <p>School@mail.com</p>
            </div>
            <div class="topbar-links d-flex">
              <div class="links">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <?php if (isLoggedIn()) : ?>
                <form class="ml-3" action="logout.php" method="POST" style="align-self: center;">
                  <button class="btn btn-warning mb-3" name="doLogOut">Logout</button>
                </form>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      </section>

      <!-- Top bar ends here  -->

      <!-- Header starts here -->

      <header id="header" class="sticky-top bg-primary">
        <div id="main-navbar">
          <nav class="navbar navbar-expand-lg navbar-light bg-primary mx-5">
            <a class="navbar-brand m-0 p-0" href="<?php echo BASE_URI; ?>index.php">
              <!-- <img src="images/logo.png" width="200px" alt=""> -->
              <h4 class="text-white">PrabhaDamkot S.S</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto mx-5">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo BASE_URI; ?>index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plus +2
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>manage.php">Management </a>
                    <a class="dropdown-item" href="#">Agriculture</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Humanities</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>about.php">About Us</a>
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>managers.php">Management Team</a>
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>admins.php">Administrative Staff</a>
                    <a class="dropdown-item" href="#">Faculty Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo  BASE_URI; ?>eca.php">ECA</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gallery
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>pictures.php">Photo Gallery</a>
                    <a class="dropdown-item" href="<?php echo BASE_URI; ?>videos.php">Video Gallery</a>

                  </div>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Notices</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo BASE_URI; ?>apply.php" class="nav-link">Apply Online</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo BASE_URI; ?>contact.php" class="nav-link">Contact Us</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0 d-flex justify-content-between">
                <input class="form-control mr-sm-2 m-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
              </form>

            </div>
          </nav>
        </div>

        <?php echo displayMessage(); ?>

      </header>


      <!-- Header ends here -->