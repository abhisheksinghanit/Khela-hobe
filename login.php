<?php
    include('db.php');
    require_once('indexheader.php');
    //session_start();
    if(isset($_POST['login'])){
        $email =$_POST['email'];
        $password =$_POST['password'];
        if($email != "" && $password != ""){
            $passwd= sha1($password);
            $sql="SELECT * FROM users WHERE `email`='$email' AND `password`='$passwd' AND `user_type` =2";
            $result=mysqli_query($con,$sql) or die('Error');
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                   
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $passwd = $row['password'];
                    $email = $row['email'];
                    $profile =$row['prifile'];
                    $intro =$row['intro'];

                    $_SESSION['id'] = $id;
                    $_SESSION['firstname'] = $firstname;
                    $_SESSION['password'] = $passwd;
                    $_SESSION['email'] = $email;
                    $_SESSION['profile'] = $profile;
                    $_SESSION['intro'] = $intro;
                    
                    header('Location:mainpage.php');
                }
            }
            else{
                $error="Username or password is incorrect"; 
            }
        }else{
            $error="Filled the details";
        }
    }
?>

<div class="container">
<form class="form-horizontal" action="/blog/login.php" method="post">
  <fieldset>
    <legend>USER LOGIN</legend>
    <hr>
<div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="email" class="col-lg-2 col-form-label">Email</label>
      <div class="col-lg-10">
        <input type="email" name="email" class="form-control" placeholder="Email">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="password" class="col-lg-2 col-form-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" placeholder="Enter the password">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <div class="col-lg-10">
        <input type="submit" name="login" value="Login" class="btn btn-primary">
        <button type="reset" class="btn btn-default">Cancel</button>
      </div>
    </div>
        </div>
    </div>
</fieldset>
<div class="row">
    <div class="col-lg-5">
    <div class="form-group">
        <?php if(isset($_POST['login'])){?>
        <div class="alert alert-dismissable alert-warning">
        <p><?php echo $error;?></p>
        </div>
        <?php } ?>
    </div>
    </div>
    </div>
</form>
</div>
