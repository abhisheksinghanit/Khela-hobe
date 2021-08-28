<?php
require_once(__DIR__.'/config/config.php'); 
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/dd9b9172d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/nav.css">
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/bootstrap.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</head>
<body>
<nav style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand nav-brand" href="#"><img class="logo" src="<?php echo $assets_url;?>img/logo.png" width= "200px" alt="logo" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link nav-elements" href="post.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-elements" href="addpost.php">Add Post</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-elements" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i><?php echo $_SESSION['firstname'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item nav-elements" href="<?php echo $base_url ?>frontpage/frontpage.php">Dashboard</a></li>
            <li><a class="dropdown-item nav-elements" href="logout.php">Logout</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-elements" href="addpost.php"></a>
        </li> 
        <li class="nav-item">
          <a class="nav-link nav-elements" href="addpost.php"></a>
        </li>

      </ul>
      
    </div>
  </div>
  
</nav>
