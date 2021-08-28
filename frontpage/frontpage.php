<?php
require_once(__DIR__.'../../config/config.php'); 
require_once(__DIR__.'../../db.php'); 
// include('addpost.php');
session_start();
$sqlTofetchAllBlog = "SELECT * FROM `blog` WHERE status='1'";
$result=mysqli_query($con,$sqlTofetchAllBlog);
$blogDetils = [];
$blogDetils2=[];
while($row= mysqli_fetch_assoc($result)){
    $blogDetils[] = $row;
    
    //$image = $row['img_add'];
    //$_SESSION['img_add']=$image;
}
?>
<?php 

$sqlTofetchAllBlog = "SELECT * FROM `blog` WHERE status='1' ORDER BY `id` DESC LIMIT 5" ;
$result_1=mysqli_query($con,$sqlTofetchAllBlog); 
$recentPostDetils = [];
while($row= mysqli_fetch_assoc($result_1)){
    $recentPostDetils[] = $row;
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport's Blog</title>

    <script src="https://kit.fontawesome.com/dd9b9172d1.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/style.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/aos.css">
    
    <style>

        /* --------------- SVG Animation ----------------- */
        #svg1 {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -60%);
            animation: fill 0.5s ease forwards 3s;
        }

        #svg1 path:nth-child(1) {
            stroke-dasharray: 512.35;
            stroke-dashoffset: 512.35;
            animation: line-anim 2s ease forwards;
        }
        #svg1 path:nth-child(2) {
            stroke-dasharray: 534.52; 
            stroke-dashoffset: 534.52;
            animation: line-anim 2s ease forwards 0.3s;
        }
        #svg1 path:nth-child(3) {
            stroke-dasharray: 463.96; 
            stroke-dashoffset: 463.96;
            animation: line-anim 2s ease forwards 0.6s;
        }
        #svg1 path:nth-child(4) {
            stroke-dasharray: 297.21; 
            stroke-dashoffset: 297.21;
            animation: line-anim 2s ease forwards 0.9s;
        }
        #svg1 path:nth-child(5) {
            stroke-dasharray: 490.29; 
            stroke-dashoffset: 490.29;
            animation: line-anim 2s ease forwards 1.2s;
        }
        
        #svg2 {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -40%);
            animation: fill 0.5s ease forwards 3s;
        }

        #svg2 path:nth-child(1) {
            stroke-dasharray: 534.52; 
            stroke-dashoffset: 534.52;
            animation: line-anim 2s ease forwards 1.5s;
        }
        #svg2 path:nth-child(2) {
            stroke-dasharray: 565.95; 
            stroke-dashoffset: 565.95;
            animation: line-anim 2s ease forwards 1.8s;
        }
        #svg2 path:nth-child(3) {
            stroke-dasharray: 610.23; 
            stroke-dashoffset: 610.23;
            animation: line-anim 2s ease forwards 2.1s;
        }
        #svg2 path:nth-child(4) {
            stroke-dasharray: 463.96; 
            stroke-dashoffset: 463.96;
            animation: line-anim 2s ease forwards 2.4s;
        }
        
        @keyframes line-anim {
            to {
                stroke-dashoffset: 0;
            }
        }
        @keyframes fill {
            from {
                fill: transparent;
            }
            to {
                fill: #086e3f;
            }
        }



        /* -------X-------- SVG Animation ---------X-------- */
    </style>

 



</head>
<body>

<!-- ----------------------------  Navbar ---------------------------------------------- -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav-brand fw-bold" href="#"><img class="logo" src="<?php echo $assets_url; ?>img/logo.png" width= "200px" alt="logo" srcset=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link nav-elements" href="<?php echo $base_url;?>login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-elements" href="<?php echo $base_url;?>index.php">Register</a>
        </li>
      </ul>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>       
      </form>
    </div>
</div>
</nav>

<!-- ----------------------------  Navbar ---------------------------------------------- -->

<!-- ----------------------------  SVG Animation ---------------------------------------------- -->

<div style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); width: 100%; height: 70vh;">
    

<svg class="container" id="svg1" width="404" height="101" viewBox="0 0 404 101" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M54.5591 101L13.2311 55.208V101H0.127075V0.632004H13.2311V47.144L54.7031 0.632004H71.2631L25.7591 50.888L71.6951 101H54.5591Z" stroke="#086e3f" stroke-width="5"/>
<path d="M163.658 0.632004V101H150.554V55.496H99.4342V101H86.3302V0.632004H99.4342V44.696H150.554V0.632004H163.658Z" stroke="#086e3f" stroke-width="5"/>
<path d="M199.137 11.288V44.84H235.713V55.64H199.137V90.2H240.033V101H186.033V0.488007H240.033V11.288H199.137Z" stroke="#086e3f" stroke-width="5"/>
<path d="M272.965 90.344H308.101V101H259.861V0.632004H272.965V90.344Z" stroke="#086e3f" stroke-width="5"/>
<path d="M381.346 78.68H337.57L329.506 101H315.682L351.97 1.208H367.09L403.234 101H389.41L381.346 78.68ZM377.602 68.024L359.458 17.336L341.314 68.024H377.602Z" stroke="#086e3f" stroke-width="5"/>
</svg>

<svg class="container" id="svg2" width="356" height="104" viewBox="0 0 356 104" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.8926 1.63198V102H64.7886V56.496H13.6686V102H0.564575V1.63198H13.6686V45.696H64.7886V1.63198H77.8926Z" stroke="#086e3f" stroke-width="5"/>
<path d="M145.772 103.008C136.46 103.008 127.964 100.848 120.284 96.528C112.604 92.112 106.508 86.016 101.996 78.24C97.5797 70.368 95.3717 61.536 95.3717 51.744C95.3717 41.952 97.5797 33.168 101.996 25.392C106.508 17.52 112.604 11.424 120.284 7.10398C127.964 2.68798 136.46 0.47998 145.772 0.47998C155.18 0.47998 163.724 2.68798 171.404 7.10398C179.084 11.424 185.132 17.472 189.548 25.248C193.964 33.024 196.172 41.856 196.172 51.744C196.172 61.632 193.964 70.464 189.548 78.24C185.132 86.016 179.084 92.112 171.404 96.528C163.724 100.848 155.18 103.008 145.772 103.008ZM145.772 91.632C152.78 91.632 159.068 90 164.636 86.736C170.3 83.472 174.716 78.816 177.884 72.768C181.148 66.72 182.78 59.712 182.78 51.744C182.78 43.68 181.148 36.672 177.884 30.72C174.716 24.672 170.348 20.016 164.78 16.752C159.212 13.488 152.876 11.856 145.772 11.856C138.668 11.856 132.332 13.488 126.764 16.752C121.196 20.016 116.78 24.672 113.516 30.72C110.348 36.672 108.764 43.68 108.764 51.744C108.764 59.712 110.348 66.72 113.516 72.768C116.78 78.816 121.196 83.472 126.764 86.736C132.428 90 138.764 91.632 145.772 91.632Z" stroke="#086e3f" stroke-width="5"/>
<path d="M263.727 50.304C267.375 50.88 270.687 52.368 273.663 54.768C276.735 57.168 279.135 60.144 280.863 63.696C282.687 67.248 283.599 71.04 283.599 75.072C283.599 80.16 282.303 84.768 279.711 88.896C277.119 92.928 273.327 96.144 268.335 98.544C263.439 100.848 257.631 102 250.911 102H213.471V1.63198H249.471C256.287 1.63198 262.095 2.78398 266.895 5.08798C271.695 7.29598 275.295 10.32 277.695 14.16C280.095 18 281.295 22.32 281.295 27.12C281.295 33.072 279.663 38.016 276.399 41.952C273.231 45.792 269.007 48.576 263.727 50.304ZM226.575 44.976H248.607C254.751 44.976 259.503 43.536 262.863 40.656C266.223 37.776 267.903 33.792 267.903 28.704C267.903 23.616 266.223 19.632 262.863 16.752C259.503 13.872 254.655 12.432 248.319 12.432H226.575V44.976ZM249.759 91.2C256.287 91.2 261.375 89.664 265.023 86.592C268.671 83.52 270.495 79.248 270.495 73.776C270.495 68.208 268.575 63.84 264.735 60.672C260.895 57.408 255.759 55.776 249.327 55.776H226.575V91.2H249.759Z" stroke="#086e3f" stroke-width="5"/>
<path d="M314.887 12.288V45.84H351.463V56.64H314.887V91.2H355.783V102H301.783V1.48798H355.783V12.288H314.887Z" stroke="#086e3f" stroke-width="5"/>
</svg>


</div>




<!-- -------------X---------------  SVG Animation -----------------------X----------------------- -->

<main>


<!-- --------------------- Blog Carousel ----------------- -->
<!-- header end -->

<section>
            <div class="blog">
                <div class="contain">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="<?php echo $assets_url; ?>img/img1.jpg" height="200px" alt="post-1">
                            <div class="blog-title">
                                <h3>Interesting Facts From Argentina's Title Win</h3>
                                <button class="bttn bttn-blog">Football</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="<?php echo $assets_url; ?>img/img3.jpg" height="200px" alt="post-1">
                            <div class="blog-title">
                                <h3>Euro 2020: Italy crowned European champions, again</h3>
                                <button class="bttn bttn-blog">Football</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img  src="<?php echo $assets_url; ?>img/img4.jpg" height="200px" alt="post-1">
                            <div class="blog-title">
                                <h3>Can Indian Men's Hockey Team End Medal Drought?</h3>
                                <button class="bttn bttn-blog">Hockey</button>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="<?php echo $assets_url; ?>img/img2.jpg" height="200px" alt="post-1">
                            <div class="blog-title">
                                <h3>India's Sumit Nagal Eligible For Men's Singles Draw, Says Report</h3>
                                <button class="bttn bttn-blog">Lone Tennis</button>
                                
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

<!-- --------------------- Blog Carousel ----------------- -->

<!-- ---------------------- Site Content -------------------------->
<section class="contain">
    <div class="site-content">
        <div class="posts" id="blogid">
            <?php foreach($blogDetils as $blog) { ?>
            
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image" >
                    <div>
                        <img src=" <?php echo $base_url.$blog['img_add']?> " class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;<?php echo $blog['username'];?></span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $blog['time'];?></span>
                        <!-- <span>Comments</span> -->
                    </div>
                </div>
                <div class="post-title">
                    <a href="#"><?php echo $blog['title']; ?></a>

                    <p><?php echo $blog['description']; ?></p>
                    <a href="../readmore.php?id=<?php echo $blog['id'];?>"><button class="bttn post-bttn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                </div>
            </div>
            
            <hr>
            <?php } ?>
        
                  
                    <!-- <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div> -->
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ">Popular Sports</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Football</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Cricket</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Hockey</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Lone Tennis</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Rugby</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Table Tennis</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">UFC</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Volleyball</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ">Recent Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <?php foreach($recentPostDetils as $recentblog) { ?>
                            <div class="post-image">
                                <div>
                                <img src="<?php echo $base_url.$recentblog['img_add']; ?>" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo$recentblog['time']; ?></span>
                                    <!-- <span>Commets</span> -->
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#"><?php echo $recentblog['title']; ?></a>
                            </div>
                        
                          
                        <?php } ?>  
                        </div>
                    </div>
                   
                    
                </aside>
            </div>
        </section>


        
        <!-- ---------------------- Site Content -------------------------->
      </main>
      <!-- --------------------------- Footer ---------------------------------------- -->
  
        <footer class="footer">
        <div class="contain">
            <div class="about-us">
                <h2>About Us</h2>
                <p class="container">This is a sports arena where you will find all kinds and categories of sports. This is a  place where you will get all the sports news just with a single click. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, quo maiores! Velit illum tempore atque consequuntur odio dolore ipsa doloremque minus quae nam tempora sapiente nemo aliquam minima, repudiandae saepe. Voluptatibus sequi dolores ad molestias facere cum quibusdam unde. Soluta repellendus excepturi ipsum officiis, nesciunt molestias totam saepe officia odit, perferendis consequatur. Maxime, veniam, ipsa modi odio vitae quos qui dolorem eligendi sed dolores sequi doloremque deleniti tempora reprehenderit reaceat ipsam nostrum beatae! Vitae sunt beatae expedita alias quisquam harum laborum, explicabo, veniam molestias cumque ipsa quaerat eos, minima ipsum repellendus rerum illo enim!</p>
            </div>
          <div class="rights flex-row">
              <h4 class="text-gray">
                  Copyright &copy; 2021 All rights reserved | khelahobe.com
              </h4>
          </div>
          </div>
        
          <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
          </div>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Jquery Library file -->
<script src="<?php echo $assets_url; ?>js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="<?php echo $assets_url; ?>js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="<?php echo $assets_url; ?>js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="<?php echo $assets_url; ?>js/main.js"></script>
<script src="<?php echo $assets_url; ?>js/svg.js"></script>
</body>

</html>