
<?php  include('../database/db.php');?> <!--file call korchi-->


<?php

//acces control.....user login korche kina cheking 
if(!isset($_SESSION['user']))
{
    $_SESSION['login-message']="<div class='text-center color2 '>Please login first to access Admin panel</div>";
    header("location:".SITEURL.'admin/admin-login.php');
}



?>


<html>
    <head>

    <title>
        website

    </title>
  
     
  <link rel="stylesheet" href="../css/admin.css?v= <?php echo time(); ?>">  
  
    </head>
    <body>
    <h1 class="text-center " > Admin panel</h1>
       
    <section class="navar">
        <div class="glasss">
        <div class="container">
       
 
              <div class="menu text-right">
                  <ul>
                      <li>
                          <a class="ab" href="index.php"> Home</a>
                      </li>
                 
                    <li>
                        <a class="ab"   href="manage-admin.php"> Admin</a>
                    </li>
                    <li>
                        <a class="ab"   href="food-manage.php"> Foods </a>
                    </li>
            
                    <li>
                        <a class="ab"  href="category-manage.php"> Category</a>
                    </li>
                    <li>
                        <a class="ab"  href="order-manage.php"> Order </a>
                    </li>

                    <li>
                        <a class="ab"  href="admin-logout.php"> Logout</a>
                    </li>
               


               
                </ul>
              </div>
              <div class=" clearfix">

              </div>

              </div>
            </div>   


           
    </section>

