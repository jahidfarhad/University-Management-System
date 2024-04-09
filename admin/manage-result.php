<?php include('partials/menu.php'); ?>

<div class="main-content">
   <div class="wrapper">
   <title>Result</title>
   <h1>Manage Result</h1>
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
               <a href="<?php echo SITEURL; ?>admin/add-result.php" class="btn-primary">Add Result</a>
               <br/><br/><br/>

             <table class="full">
              <tr>
                <th>S.N</th>
                <th>Department</th>
                <th>Semester</th>
                <th>Intake</th>
                <th>Action</th>
              </tr>
              <?php 
               // Query to get all category from database
               $sql = "SELECT * FROM results";

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
                  
                  $rno = $row['rno'];
                  $department=$row['department'];
                  $semester =$row['semester'];
                  $intake = $row['intake'];
                  $image = $row['results'];

                  ?>
                     <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $department; ?></td>
                <td><?php echo $semester;?></td>
                <td><?php echo $intake;?></td>

                <td>
              <a href="<?php echo SITEURL;?>admin/update-result.php?rno=<?php echo $rno; ?>&results=<?php echo $image; ?>" class="btn-secondary">Update Result</a>
              <a href="<?php echo SITEURL; ?>admin/delete-result.php?rno=<?php echo $rno;?>&results=<?php echo $image; ?>" class="btn-danger">Delete Result</a>
                
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
                       <td colspan="6"><div class="error">No Result Added</div></td>
                  </tr>

                  <?php
               }
              
              
              ?>
              
            
              
             </table>
             
   </div>
</div>

<?php include('partials/footer.php'); ?>
