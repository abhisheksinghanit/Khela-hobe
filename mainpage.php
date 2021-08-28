<?php
require_once('header.php');
require_once('db.php');

?>
<h1>Welcome <?php echo $_SESSION['firstname'];?></h1>
<h2><?php echo $_SESSION['profile'];?></h2>