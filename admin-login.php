
<?php  include('../database/db.php');?>

<html>
<head>
<link rel="stylesheet" href="../css/admin.css?v= <?php echo time(); ?>">  
<title>Login</title>

</head>
<body>
    



<div class="ecec">

<h1 class="text-center vv">Enter Admin Panel</h1> </div>
<br>
<?php
if(isset($_SESSION['login-message']))
{
echo $_SESSION['login-message'];
unset($_SESSION['login-message']);
}

?>
<section class="Login text-center">
        <div class="container"> 
         <div class="glass">
             <br>
            <?php 
           
            if(isset( $_SESSION['login']))
            {
                echo  $_SESSION['login'];
                unset ($_SESSION['login']);
            }
            
            ?>
            <br>
            <h1 class="n1">Login</h1>
            
        
           <br>
           <div class="n"> USERNAME</div>
            <br>
            <div class="textbox"> 
                <form action="" method="POST">
           
           
                <input type="text" placeholder="Username" name="username"  value="" required>
            </div>
            <br>
            <div class="n">PASSWORD</div>
            <br>
            <div class="textbox"> 
                <input type="password" placeholder=" Enter password" name="password" value="">
              
            </div>
            <input class="btn-l" type="submit" name="submit" value="Log in">
            </form>
            <br>
            <br>
            <br>
            
           <br><br>
       </section>
      

       </body>
</html>




<?php

if(isset($_POST['submit']))
{
  $username=$_POST['username'];//login form theika data neoa ses
 $password=md5($_POST['password']);

//cheking usear ai name a ache ki na databse a 
$sql="SELECT *FROM tbl_admin WHERE username='$username' AND password='$password'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count==1)
{
    $_SESSION['login']="login succesfully";
    $_SESSION['user']='$username';
    header("location:".SITEURL.'admin/');//redirect page
}
else
{
    $_SESSION['login']="<div class='color'> Invalid Username or password</div>";
    header("location:".SITEURL.'admin/admin-login.php');//redirect page
}

}








?>

