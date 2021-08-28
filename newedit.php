<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/dd9b9172d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="nav.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</head>
<body>
<nav style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand nav-brand" href="#"><img class="logo" src="./img/logo.png" width= "200px" alt="logo" srcset=""></a>
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
          <i class="fas fa-user"></i> Username
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item nav-elements" href="#">Dashboard</a></li>
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



   <div class="post-image">
                            <div>
                                <img src="./img/img1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Date</span>
                                <span>Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Copa America 2021 Final: Interesting Facts From Argentina's Record-Equaling Title Win</a>

                            <p>With wild celebrations marking Argentina’s triumph in Copa America, Lionel Messi, widely considered to be the greatest footballer to have played the game, has added another chapter to his storied career. On multiple occasions, Messi has fallen agonisingly short of lifting a major international trophy with his national team. Although he has an Olympic gold medal but the glory that comes with winning a continental or a world title in unmatched.
                            </p>
                            <button class="bttn post-bttn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
  
  

