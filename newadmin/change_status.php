<?php require_once('../db.php');
$id=$_POST['id'];
$status=$_POST['status'];
$upd="UPDATE blog SET status='$status' WHERE  id=$id";
$rs=mysqli_query($con, $upd) or die(mysqli_error($con));
if($rs==1){
    echo "Status changed successfully";
}
?>