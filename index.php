<?php 
include('db.php');
if(isset($_POST['register'])){
    $firstname =$_POST['firstname'];
    $middlename =$_POST['middlename'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];
    $conpass =$_POST['conpassword'];
    $intro =$_POST['intro'];
    $profile =$_POST['profile'];
    //duplicate email check
    $src ="SELECT email FROM users WHERE email ='$email'";
    $rs=mysqli_query($con,$src);
    if(mysqli_num_rows($rs)>0){
        $error= "This email is already registered";
    }else{

    if($firstname != '' && $lastname != '' && $email != '' && $mobile != '' && $password != '' && $conpass != '' && $intro != '' && $profile != '' ){
      if($password==$conpass){
       $pwd_hash = sha1($password);
       $sql = "INSERT INTO users (`firstname`, `middlename`,`lastname`,`email`, `mobile`, `password`,`confirm_pass`,`intro`,`profile`,`user_type`) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$mobile', '$pwd_hash', '$conpass', '$intro','$profile', 2);";
       $query = $con->query($sql); 
       if($query){
           header('Location:login.php');
       }
       else{
           $error = 'Failed to Register user';
       }
    }
    else{
        $error = "password not matched";
    }}else{
      $error ="Please submit the details";
    }
  
}}
?>
<?php include('indexheader.php');?>
<div class="container">
<form class="form-horizontal" action="/blog/index.php" method="POST">
  <fieldset>
    <legend>USER REGISTRATION</legend>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="firstname" class="col-lg-2 col-form-label">Firstname</label>
      <div class="col-lg-10">
        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="middlename" class="col-lg-2 col-form-label">Middlename</label>
      <div class="col-lg-10">
        <input type="text" name="middlename" class="form-control" placeholder="Middlename">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="lastname" class="col-lg-2 col-form-label">Lastname</label>
      <div class="col-lg-10">
        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="email" class="col-lg-2 col-form-label">Email</label>
      <div class="col-lg-10">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" onblur="check_email()">
        <span id="msg" class="text-danger"></span>
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="mobile" class="col-lg-2 col-form-label">Mobile</label>
      <div class="col-lg-10">
        <input type="text" name="mobile" class="form-control"  placeholder="Mobile">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="email" class="col-lg-2 col-form-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="email" class="col-lg-2 col-form-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="conpassword" class="form-control" placeholder="Confirm Password">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="intro" class="col-lg-2 col-form-label">Intro</label>
      <div class="col-lg-10">
        <input type="text-area" name="intro" class="form-control"  placeholder="Intro">
      </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <label for="profile" class="col-lg-2 col-form-label">Profile</label>
      <div class="col-lg-10">
        <input type="text" name="profile" class="form-control"  placeholder="Profile">
      </div>
    </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
      <div class="col-lg-10">
        <input type="submit" name="register" value="Register" class="btn btn-primary">
        <button type="reset" class="btn btn-default">Cancel

        </button>
      </div>
    </div>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-lg-5">
    <div class="form-group">
        <?php if(isset($_POST['register'])){?>
        <div class="alert alert-dismissable alert-warning">
        <p><?php echo $error;?></p>
        </div>
        <?php } ?>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script>
      function check_email(){
        var email=$("#email").val();
        $.ajax({
          method:"POST",
          url:'check_email.php',
          data:{email:email},
          success:function(resp){
            $("#msg").html(resp)
          }
        });
      }
    </script>
</form>
</div>
<?php include('footer.php');?>