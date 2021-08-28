<?php
require_once('db.php'); 
include('indexheader.php');
$id=$blog['id'];
$sql="SELECT * FROM `blog` WHERE `id`=$id";
$result=mysqli_connect($con,$sql);
$blogDetils = [];
$result=mysqli_query($con,$sql) or die('Error');

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $blogDetils[]=$row;
    }
}
?>
<h1>this is blog</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
  <h2>Blog Name</h2>
</div>

<div class="row">
<?php foreach($blogDetils as $blog) { ?>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <p><?php echo $blog['title'];?></p>
    </div>
    <div class="card">
      <h2>TITLE description</h2>
      <p><?php echo $blog['description'];?></p>
    </div>
  </div>
</div>
<?php } ?>
<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>