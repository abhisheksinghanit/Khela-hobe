<?php
require_once('db.php');
require_once('header.php');

//session_start();
//INSERT INTO `blog` (`id`, `title`, `description`, `user_id`) VALUES ('12345', 'hgvjhaslk', 'nbcakjc', '123');
if(empty($_SESSION['id'])){
    header('Location:login.php');
}
if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    //$name = $_POST['name'];
    $title = $_POST['title']; // Get Email from form
    $description = $_POST['description'];
    $user_id=$_SESSION['id'];
    $username=$_SESSION['firstname'];
    $fname = $_FILES['file']['name'];
    $ftype = $_FILES['file']['type'];
    $fsize = $_FILES['file']['size'];
    $fn = rand(0000000, 9999999) . "_" . $fname;
    $fpath = "upload/" . $fn;
    //$created_at= date('Y-m-d');
    if (move_uploaded_file($_FILES['file']['tmp_name'],$fpath)) {
        $sql = "INSERT INTO `blog` (`title`, `description`, `img_add`,`username`,`user_id`) VALUES ('$title', '$description', '$fpath', '$username', '$user_id')";
        $res = mysqli_query($con, $sql) or die(mysqli_error($con));
        if ($res == 1) {
            echo "Post created successfully";
        } else {
            echo "Post created successfully";
        }
    } else {
        header('location:index.php?msg=File not upload successfully');
    }
}
// if($_SERVER['REQUEST_METHOD']=='POST'){
// if($_FILES['file']['name'] != ''){
//     $filename = $_FILES['file']['name'];
//     $extension = pathinfo($filename,PATHINFO_EXTENSION);
//     $valid_extensions = array("jpg","jpeg","png","gif");
//     if(in_array($extension,$valid_extensions)){
//         $new_name =rand() .".".$extension;
//         $path ="upload/".$new_name;
//         if (move_uploaded_file($_FILES['file']['tmp_name'],$path)){
//             $sql="INSERT INTO `blog` (`title`, `description`, `img_add`,`user_id`) VALUES ('$title', '$description', '$path', '$user_id')";
//             $result=mysqli_query($con,$sql);
//             echo '<img src="'.$path.'" /><br><br>
//             <button data-path="'.$path.'" id="delete_btn">delete</button>';
//         }
//     }else{
//         echo '<script>alert("Invalid file format.")</script>';
//     }
//     }else{
//     echo '<script>alert("Please select file)</script>';
// }}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container my-4">
        <form method="post" enctype="multipart/form-data" id="submit_form"> 
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div> 
            <div>
                <input type="file" name="file" id="upload_file">
            </div>
        <input type="submit" class="btn btn-primary" name="submit" value="ADD POST">
        </form>
    </div>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript">
     $(document).ready(function(){
        $("#submit_form").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "frontpage.php",
                type: "POST",
                data:formData,
                contentType: multipart/form-data,
                processData:false,
                success: function(data){
                    $("data added successfully").show();
                    $("#preview").html(data);
                    $("#upload_file").val('');
                }
            });
        });
     });
    </script> -->
    <script type="text/javascript" src="bootstrap.min.js"></script>
    
</body>
</html>
