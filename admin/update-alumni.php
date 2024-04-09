<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Alumni</h1>
        <br><br>

      <?php 
            //check whether the id is set or not
            if(isset($_GET['ano']))
            {
                //Get the id and all other details
                //echo "Getting the data";
                $ano = $_GET['ano'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM alumni WHERE ano=$ano";

                //Execute the query
                $res = mysqli_query($conn, $sql);

                //Count the rows to check whether the id valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);

                    $current_image = $row['image'];
                    $name = $row['name'];
                    $designation = $row['designation'];
                    $email = $row['email'];
                }
                else
                {
                    //Redirect to manage category with session message
                    
                    $_SESSION['no-alumni-found'] = "<div class='error'>Alumni Not Found.</div>";
                    header('location:'.SITEURL.'admin/manage-alumni.php');
                }
            }
            else
            {
                //Redirect to Manage Category
                header('location:'.SITEURL.'admin/manage-alumni.php');
            }
      
      
      
      ?>




        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </td>
            </tr>

            <tr>
                <td>Current Image:</td>
                <td>
                    <?php 
                       if($current_image !="")
                       {
                         //Displaye the Image
                         ?>
                         <img src="<?php echo SITEURL; ?>people_image/<?php echo $current_image; ?>" width="140px" >
                         <?php
                       }
                       else
                       {
                         //Display Message
                         echo"<div class='error'>Image Not Added</div>";
                       }
                    ?>
                </td>
            </tr>

            <tr>
                <td>New Image:</td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>

            <tr>
                <td>Designation:</td>
                <td>
                    <input type="text" name="designation" value="<?php echo $designation; ?>">
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <input type="hidden" name="ano" value="<?php echo $ano; ?>">

                <input type="submit" name="submit" value="Update Alumni" class="btn-secondary">

                </td>
            </tr>

        </table>
        </form>

        <?php 
           if(isset($_POST['submit']))
           {
             // echo "Clicked";
             //1.Get all the values from our form
             $ano = $_POST['ano'];
             $current_image = $_POST['current_image'];
             $name = $_POST['name'];
             $designation = $_POST['designation'];
             $email = $_POST['email'];

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
                    $ext = end(explode('.',$image_name));

                    //Rename the image
                    $image_name = "alumni_image_".rand(000,999).'.'.$ext;// e.g medicine_category_814.jpg

                    $source_path =$_FILES['image']['tmp_name'];

                    $destination_path="../people_image/".$image_name;

                    // finally upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);
                    // check whether the image is uploaded or not
                    // and if the images is not uploaded then we will stop the process and redirect with error message.
                    if($upload==false)
                    {
                        // set message
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image</div>";
                        //redirect to add category page
                        header('location:'.SITEURL.'admin/manage-alumni.php');
                        //stop the process
                        die();
                    }

                        //B.Remove the current Image if available
                        if($current_image !="")
                        {
                            $remove_path = "../people_image/".$current_image;
                            $remove = unlink($remove_path);
    
                            //Check the whether image is remove or not
                            //If failed to remove then display message and stop the process
                            if($remove==false)
                            {
                                //Failed to remove image
                                $_SESSION['failed-remove'] = "<div class='error'>Failed to Remove Current Image</div>";
                                header('location:'.SITEURL.'admin/manage-alumni.php');
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
             $sql2 = "UPDATE alumni SET
                name = '$name',
                image='$image_name',
                designation = '$designation',
                email = '$email'
                WHERE ano=$ano
             ";

             //Execute the query
             $res2 = mysqli_query($conn, $sql2);

             //4.Redirect to Manage category with message
             //Check whether executed or not
             if($res2==true)
             {
                //Category Updated
                $_SESSION['update'] = "<div class='success'>Alumni Updated Successfully</div>";
                header('location:'.SITEURL.'admin/manage-alumni.php');
             }
             else
             {
                //Failed to Update category
                $_SESSION['update'] = "<div class='error'>Failed to Update Alumni</div>";
                header('location:'.SITEURL.'admin/manage-alumni.php');
             }

           }
        ?>
    </div>
</div>


<?php include('partials/footer.php');?>