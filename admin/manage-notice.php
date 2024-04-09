<?php include('partials/menu.php'); ?>

<div class="main-content">
   <div class="wrapper">
   <title>Notice</title>
   <h1>Manage Notice</h1>
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
         if(isset($_SESSION['no-notice-found']))
         {
          echo $_SESSION['no-notice-found'];
          unset($_SESSION['no-notice-found']);
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
               <a href="<?php echo SITEURL; ?>admin/add-notice.php" class="btn-primary">Add Notice</a>
               <br/><br/><br/>

             <table class="full">
              <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Date</rth>
                <!-- <th>Image</th> -->
                <th>Action</th>
              </tr>
              <?php 
               // Query to get all category from database
               $sql = "SELECT * FROM notice";

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
                  
                  $num = $row['num'];
                  $content_title=$row['content_title'];
                  $date =$row['date'];
                  $image =$row['notice_img'];


                  ?>
                     <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $content_title; ?></td>
                <td><?php echo $date;?></td>
                <!-- <td>
                  <?php 
                      // check whether image name is available or not
                      if($image!="")
                      {
                        //Display the image
                        ?>
                         <img src="<?php echo SITEURL;?>Notice_Image/<?php echo $image; ?>"width="90px">
                        <?php
                      }
                      else
                      {
                        //Display the message
                        echo "<div class='error'>Image Not Added.</div> ";
                      }
                   ?>
                </td> -->

                <td>
              <a href="<?php echo SITEURL;?>admin/update-notice.php?num=<?php echo $num; ?>&notice_img=<?php echo $image; ?>" class="btn-secondary">Update Notice</a>
              <a href="<?php echo SITEURL; ?>admin/delete-notice.php?num=<?php echo $num;?>&notice_img=<?php echo $image; ?>" class="btn-danger">Delete Notice</a>
                
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
                       <td colspan="6"><div class="error">No Notice Added</div></td>
                  </tr>

                  <?php
               }
              
              
              ?>
              
            
              
             </table>
             
   </div>
</div>

<?php include('partials/footer.php'); ?>
