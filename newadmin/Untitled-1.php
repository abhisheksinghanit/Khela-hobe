<?php
$sqlTofetchAllBlog = "SELECT * FROM `blog`";
    $result=mysqli_query($con,$sqlTofetchAllBlog);
    $blogDetils = [];
    while($row= mysqli_fetch_assoc($result)){
        $blogDetils[] = $row;
    }
?>