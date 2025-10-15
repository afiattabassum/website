


<?php
 include('../database/db.php');

//session kill & straight go to log in page 
session_destroy();
header("location:".SITEURL.'admin/admin-login.php');//redirect page

?>