<?php include('partial/navbar.php'); ?>



<div  class="content">
               <div class="wapper">
                   <div class="ll">
              <h2 class="text-left  d ">  Add-Admin</h2> 
                      <br>
                      <?php
                      
                      if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];//messeage dekhabo add admin er pase 
                        unset($_SESSION['add']);//aktu por message chole jabe
                      }
                      
                      ?>
                    

                     
              <form action="" method="POST">
               <table class="add-admin">


              <tr >
                   <td class="a" >   Name</td>
                  
                   <td><input type="text" name="full-name" placeholder="name" class="ad-box " required ></td>
                   </tr> 

                <tr>
                   <td class="a" >  User-Name</td>
                   <td><input type="text" name="username" placeholder="username" class="ad-box"  required></td>
                   </tr>

                
                  <tr>
                   <td class="a" >Password</td>
                   <td><input type="password" name="password" placeholder="password" class="ad-box"></td>
                   </tr>
                 

        
                   <tr>
                  
                   <td colspan="2"class="a" >
                       <input type="submit" name="submit" value="Add-admin" class="btn-b  matha">
                        </td>
                   </tr>




               </table>







              </form>



              </div>

              </div>
    </div>

   






<?php include('partial/footer.php'); ?>


<?php



if(isset($_POST['submit']))
{
    $full_name=$_POST['full-name'];
     $username=$_POST['username'];//form theke sob data nilam
    $password=md5($_POST['password']);



$sql ="INSERT INTO tbl_admin SET


full_name='$full_name',
username='$username',
password='$password'

";//data admin table a save korlam 


$res = mysqli_query($conn,$sql) or die (mysqli_error()); //query execution


if($res==TRUE){
    $_SESSION['add']="Admin Added successfully";// message
    header("location:".SITEURL.'admin/manage-admin.php');//redirect page
}
else{
    $_SESSION['add']="Failed";
    header("location:".SITEURL.'admin/add-admin.php');//redirect page

}

}

?>






























