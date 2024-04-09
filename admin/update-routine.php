<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
    <title>Routine</title>
        <h1>Update Routine</h1>
        <br><br>

      <?php 
            //check whether the id is set or not
            if(isset($_GET['rno']))
            {
                //Get the id and all other details
                //echo "Getting the data";
                $rno = $_GET['rno'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM routine WHERE rno=$rno";

                //Execute the query
                $res = mysqli_query($conn, $sql);

                //Count the rows to check whether the id valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);

                    $current_image = $row['routine'];
                    $department = $row['department'];
                    $section = $row['section'];
                    $intake = $row['intake'];
                }
                else
                {
                    //Redirect to manage category with session message
                    
                    $_SESSION['no-routine-found'] = "<div class='error'>Routine Not Found</div>";
                    header('location:'.SITEURL.'admin/manage-routine.php');
                }
            }
            else
            {
                //Redirect to Manage Category
                header('location:'.SITEURL.'admin/manage-routine.php');
            }
      
      
      
      ?>




        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>Department:</td>
                <td>
                    <input type="text" name="department" value="<?php echo $department; ?>">
                </td>
            </tr>

            <tr>
                <td>Intake:</td>
                <td>
                    <input type="text" name="intake" value="<?php echo $intake; ?>">
                </td>
            </tr>

            <tr>
                    <td>Section:</td>
                    <td>
                    <input type="number" name="section" value="<?php echo $section; ?>">
                    </td>
                </tr>

            <!-- <tr>
                <td>Current File:</td>
                <td>
                    <?php 
                       if($current_image !="")
                       {
                         //Displaye the Image
                         ?>
                         <img src="<?php echo SITEURL; ?>results/<?php echo $current_image; ?>" width="140px" >
                         <?php
                       }
                       else
                       {
                         //Display Message
                         echo"<div class='error'>File Not Added</div>";
                       }
                    ?>
                </td>
            </tr> -->
            
            <tr>
                <td>New File:</td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>

            <tr>
                <td>
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <input type="hidden" name="rno" value="<?php echo $rno; ?>">

                <input type="submit" name="submit" value="Update Routine" class="btn-secondary">

                </td>
            </tr>

        </table>
        </form>

        <?php 
           if(isset($_POST['submit']))
           {
             // echo "Clicked";
             //1.Get all the values from our form
             $rno = $_POST['rno'];
             $current_image = $_POST['current_image'];
             $department = $_POST['department'];
             $section = $_POST['section'];
             $intake = $_POST['intake'];

             //2.Updating new image if selected
               //check whether the image is selected or not
               if(isset($_FILES['image']['name']))
               {
                    //Get the image details
                    $image_name = $_FILES['image']['name'];
                    //Check whether image is available or not
                    if($image_name !="")
                    {
                        //Image is Available
                        //A.Upload the new image

                        
                    //Auto rename our image
                    //get the extenssion of our image(jpg,png,gif,etc) e.g. "medicine1.jpg"
                    $tmp = explode('.',$image_name);
                    $ext = end($tmp);

                    //Rename the image
                    $image_name = "routine_".rand(000,999).'.'.$ext;// e.g medicine_category_814.jpg

                    $source_path =$_FILES['image']['tmp_name'];

                    $destination_path="../routines/".$image_name;

                    // finally upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);
                    // check whether the image is uploaded or not
                    // and if the images is not uploaded then we will stop the process and redirect with error message.
                    if($upload==false)
                    {
                        // set message
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload File</div>";
                        //redirect to add category page
                        header('location:'.SITEURL.'admin/manage-routine.php');
                        //stop the process
                        die();
                    }

                        //B.Remove the current Image if available
                        if($current_image !="")
                        {
                            $remove_path = "../routines/".$current_image;
                            $remove = unlink($remove_path);
    
                            //Check the whether image is remove or not
                            //If failed to remove then display message and stop the process
                            if($remove==false)
                            {
                                //Failed to remove image
                                $_SESSION['failed-remove'] = "<div class='error'>Failed to Remove Current File</div>";
                                header('location:'.SITEURL.'admin/manage-routine.php');
                                die();//Stop the process
    
                            }
                        }
                      
                    }
                
                    else
                    {
                        $image_name = $current_image;
                    }

               }
               else
               {
                 $image_name = $current_image;
               }


             //3.Update the Database
             $sql2 = "UPDATE routine SET
                department = '$department',
                routine ='$image_name',
                section = '$section',
                intake = '$intake'
                WHERE rno=$rno
             ";

             //Execute the query
             $res2 = mysqli_query($conn, $sql2);

             //4.Redirect to Manage category with message
             //Check whether executed or not
             if($res2==true)
             {
                //Category Updated
                $_SESSION['update'] = "<div class='success'>Routine Updated Successfully</div>";
                header('location:'.SITEURL.'admin/manage-routine.php');
             }
             else
             {
                //Failed to Update category
                $_SESSION['update'] = "<div class='error'>Failed to Update Routine</div>";
                header('location:'.SITEURL.'admin/manage-routine.php');
             }

           }
        ?>
    </div>
</div>


<?php include('partials/footer.php');?>