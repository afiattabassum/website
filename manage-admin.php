
<?php include('partial/navbar.php'); ?>



    <div  class="content">
               <div class="wapper">
              <h1 class="text-left "> Manage-Admin-Panel   </h1> 
                      <br>
                     
             <a class="btn text-left" href="add-admin.php">Add-Admin</a>
                  <?php
                      
                      if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                      }
                      
                      ?>
          
                <br>

              <table class="manage-admin">

                 <tr class="a">
               <th class="a" >Serial No</th> 
                          <th>Name</th>
                <th>Username</th>
                 <th>Actions</th>
       </tr><br>



                           <?php
                           $sql="SELECT*FROM tbl_admin";
                           $res =mysqli_query($conn,$sql);//query exeqution
                          
                           if($res==true)//query check 
                           
                           {
                             $count=mysqli_num_rows($res);
                             $a=1;// 1 2  3 4 

                                          if($count>0){

                                               while($rows=mysqli_fetch_assoc($res)){    //data db te ache 

                                                          $id=$rows['id'];

                                                          $full_name=$rows['full_name'];
                                                        
                                                          $username=$rows['username'];
                                                         ?>
                                                                  
             <tr>
                   <td class="a"><?php  echo $a++;?></td>
                        <td><?php echo $full_name;?></td>     <!--value admin page a show korbe -->
                           <td><?php echo $username;?></td>
                      <td>
                   
                    <a href="<?php echo SITEURL;?>admin/delete-admin.php"  class="btn-c"  >  Delete Admin</a>
                     </td>
                   
         </tr>


                                                         <?php


                                                      }
                                                   } 
                                          else{


                                          }
                           }
                           
                           
                           
                           
                           
                           
                           
                           
                           ?>




    </table>

</div>
    </div>



    <?php include('partial/footer.php'); ?>

