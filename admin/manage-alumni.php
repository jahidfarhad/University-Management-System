<?php include('partials/menu.php'); ?>

<div class="main-content">
   <div class="wrapper">
   <title>Alumni</title>
   <h1>Manage Alumni</h1>
   <br/><br/>
   <?php
         if(isset($_SESSION['add']))
         {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
         }
         if(isset($_SESSION['remove']))
         {
          echo $_SESSION['remove'];
          unset($_SESSION['remove']);
         }
         if(isset($_SESSION['delete']))
         {
          echo $_SESSION['delete'];
          unset($_SESSION['delete']);
         }
         if(isset($_SESSION['no-alumni-found']))
         {
          echo $_SESSION['no-alumni-found'];
          unset($_SESSION['no-alumni-found']);
         }
         if(isset($_SESSION['update']))
         {
          echo $_SESSION['update'];
          unset($_SESSION['update']);
         }
         if(isset($_SESSION['upload']))
         {
          echo $_SESSION['upload'];
          unset($_SESSION['upload']);
         }
         if(isset($_SESSION['failed-remove']))
         {
          echo $_SESSION['failed-remove'];
          unset($_SESSION['failed-remove']);
         }


        ?>
        <br><br>
               <!----Button to add admin----->
               <a href="<?php echo SITEURL; ?>admin/add-alumni.php" class="btn-primary">Add Alumni</a>
               <br/><br/><br/>

             <table class="full">
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Image</th>
                <th>Designation</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
              <?php 
               // Query to get all category from database
               $sql = "SELECT * FROM alumni";

               //Execute query 
               $res = mysqli_query($conn, $sql);
               // Creat serial Number variable

               //count rows
               $count = mysqli_num_rows($res);  
               // Creat serial Number variable
               $sn =1;

               //check whether we have data in database or not
               if($count>0)
               {
                //we have data in database
                // get the data in display
                while($row=mysqli_fetch_assoc($res))
                {
                  
                  $ano = $row['ano'];
                  $name=$row['name'];
                  $image =$row['image'];
                  $designation = $row['designation'];
                  $email = $row['email'];

                  ?>
                     <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $name; ?></td>

                <td>
                  <?php 
                      // check whether image name is available or not
                      if($image!="")
                      {
                        //Display the image
                        ?>
                         <img src="<?php echo SITEURL;?>people_image/<?php echo $image; ?>"width="90px">
                        <?php
                      }
                      else
                      {
                        //Display the message
                        echo "<div class='error'>Image Not Added.</div> ";
                      }
                   ?>
                </td>

                <td><?php echo $designation;?></td>
                <td><?php echo $email;?></td>
                <td>
              <a href="<?php echo SITEURL;?>admin/update-alumni.php?ano=<?php echo $ano; ?>&image=<?php echo $image; ?>" class="btn-secondary">Update Alumni</a>
              <a href="<?php echo SITEURL; ?>admin/delete-alumni.php?ano=<?php echo $ano;?>&image=<?php echo $image; ?>" class="btn-danger">Delete Alumni</a>
                
                </td>
              </tr>
                  <?php
                }
               }
               else
               {
                  // we do not have data
                  //we wil display the message
                  ?>

                  <tr>
                       <td colspan="6"><div class="error">No Alumni Added</div></td>
                  </tr>

                  <?php
               }
              
              
              ?>
              
            
              
             </table>
             
   </div>
</div>

<?php include('partials/footer.php'); ?>
