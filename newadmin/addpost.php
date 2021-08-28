<?php
    //session_start();
    require_once('../db.php');
    require_once('../header.php');
    //INSERT INTO `blog` (`id`, `title`, `description`, `user_id`) VALUES ('12345', 'hgvjhaslk', 'nbcakjc', '123');
    if(empty($_SESSION['id'])) {
         
        header('Location:login.php');
      }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST["title"];
        $description=$_POST["description"];
        $user_id=$_SESSION["id"];
        $sql="INSERT INTO `blog` (`title`, `description`, `user_id`) VALUES ('$title', '$description', '$user_id')";
        $result=mysqli_query($con,$sql);
        //copy for edit if to result
        //header(Location:mainpage.php);
        if($result){
            echo "data added sucessfully"; 
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
        }

    }


    ?>

<div class="container my-4">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>