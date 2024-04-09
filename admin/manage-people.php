<?php include('partials/menu.php'); ?>

<div class="main-content">
   <div class="wrapper">
   <title>People</title>
   <h1>Manage People</h1>
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
         if(isset($_SESSION['no-people-found']))
         {
          echo $_SESSION['no-people-found'];
          unset($_SESSION['no-people-found']);
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
               <a href="<?php echo SITEURL; ?>admin/add-people.php" class="btn-primary">Add People</a>
               <br/><br/><br/>

             <table class="full">
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Image</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Action</th>
              </tr>
              <?php 
               // Query to get all category from database
               $sql = "SELECT * FROM people";

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
                  
                  $pnum = $row['pnum'];
                  $name=$row['name'];
                  $image =$row['image'];
                  $designation = $row['designation'];
                  $department = $row['department'];

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
                <td><?php echo $department;?></td>
                <td>
              <a href="<?php echo SITEURL;?>admin/update-people.php?pnum=<?php echo $pnum; ?>&image=<?php echo $image; ?>" class="btn-secondary">Update People</a>
              <a href="<?php echo SITEURL; ?>admin/delete-people.php?pnum=<?php echo $pnum;?>&image=<?php echo $image; ?>" class="btn-danger">Delete People</a>
                
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
                       <td colspan="6"><div class="error">No People Added</div></td>
                  </tr>

                  <?php
               }
              
              
              ?>
              
            
              
             </table>
             
   </div>
</div>

<?php include('partials/footer.php'); ?>
