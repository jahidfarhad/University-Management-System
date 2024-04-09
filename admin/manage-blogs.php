<?php include('partials/menu.php'); ?>

<div class="main-content">
   <div class="wrapper">
   <title>Blogs</title>
   <h1>Manage Blogs</h1>
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
               <!-- <a href="<?php echo SITEURL; ?>admin/add-result.php" class="btn-primary">Add Result</a>
               <br/><br/><br/> -->

             <table class="full">
              <tr>
                <th>S.N</th>
                <th>Blog Title</th>
                <th>Author Name</th>
                <th>Date</th>
                <!-- <th>Image</th> -->
                <th>Action</th>
              </tr>
              <?php 
               // Query to get all category from database
               $sql = "SELECT * FROM blog";

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
                  
                  $bno  = $row['bno'];
                  $blog_title=$row['blog_title'];
                  $author_name =$row['author_name'];
                  $date = $row['date'];
                  $image = $row['image'];

                  ?>
                     <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $blog_title; ?></td>
                <td><?php echo $author_name;?></td>
                <td><?php echo $date;?></td>

                <!-- <td>
                  <?php 
                      // check whether image name is available or not
                      if($image!="")
                      {
                        //Display the image
                        ?>
                         <img src="<?php echo SITEURL;?>blog_image/<?php echo $image; ?>"width="90px">
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
            
              <a href="<?php echo SITEURL; ?>admin/delete-blogs.php?bno=<?php echo $bno;?>&image=<?php echo $image; ?>" class="btn-danger">Delete Blogs</a>
                
                </td>
              </tr>
                  <?php
                }
               }
               
              
              
              ?>
              
            
              
             </table>
             
   </div>
</div>

<?php include('partials/footer.php'); ?>
