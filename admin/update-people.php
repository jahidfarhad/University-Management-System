<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
    <title>People</title>    
    <h1>Update People</h1>
        <br><br>

      <?php 
            //check whether the id is set or not
            if(isset($_GET['pnum']))
            {
                //Get the id and all other details
                //echo "Getting the data";
                $pnum = $_GET['pnum'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM people WHERE pnum=$pnum";

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
                    $department = $row['department'];
                    $contact = $row['contact'];
                    $telephone = $row['telephone'];
                    $publication = $row['publication_profile'];
                    $courses = $row['courses_taught'];
                    $details = $row['details'];
                    $catagory = $row['catagory'];
                }
                else
                {
                    //Redirect to manage category with session message
                    
                    $_SESSION['no-people-found'] = "<div class='error'>People Not Found</div>";
                    header('location:'.SITEURL.'admin/manage-people.php');
                }
            }
            else
            {
                //Redirect to Manage Category
                header('location:'.SITEURL.'admin/manage-people.php');
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
                   <td>Department:</td>
                   <td> 
                    <input type="text" name="department" value="<?php echo $department; ?>">
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
                   <td>Contact:</td>
                   <td> 
                    <input type="number" name="contact" value="<?php echo $contact; ?>">
                   </td>
                </tr>
                <tr>
                   <td>Telephone:</td>
                   <td> 
                    <input type="number" name="telephone" value="<?php echo $telephone; ?>">
                   </td>
                </tr>
                <tr>
                    <td>Publication:</td>
                    <td>
                    <input type="text" name="publication_profile" value="<?php echo $publication; ?>">
                    </td>
                </tr>
                <tr>
                   <td>Courses:</td>
                   <td> 
                    <input type="text" name="courses_taught" value="<?php echo $courses; ?>">
                   </td>
                </tr>
                <tr>
                   <td>Details:</td>
                   <td> 
                   <textarea name="details"  cols="30" rows="5" value="<?php echo $details; ?>"></textarea>
                   </td>
                </tr>
                <tr>
                   <td>Category:</td>
                   <td> 
                    <input type="text" name="catagory" value="<?php echo $catagory; ?>">
                   </td>
                </tr>

            <tr>
                <td>
                <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                <input type="hidden" name="pnum" value="<?php echo $pnum;?>">

                <input type="submit" name="submit" value="Update People" class="btn-secondary">

                </td>
            </tr>

        </table>
        </form>

        <?php 
           if(isset($_POST['submit']))
           {
             // echo "Clicked";
             //1.Get all the values from our form
                $pnum = $_POST['pnum'];
                $current_image = $_POST['current_image'];
                $name = $_POST['name'];
                $designation = $_POST['designation'];
                $email = $_POST['email'];
                $department = $_POST['department'];
                $contact = $_POST['contact'];
                $telephone = $_POST['telephone'];
                $publication = $_POST['publication_profile'];
                $courses = $_POST['courses_taught'];
                $details = $_POST['details'];
                $catagory = $_POST['catagory'];

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
                    $image_name = "faculty_image_".rand(000,999).'.'.$ext;// e.g medicine_category_814.jpg

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
                        header('location:'.SITEURL.'admin/manage-people.php');
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
                                header('location:'.SITEURL.'admin/manage-people.php');
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
             $sql2 = "UPDATE people SET
                    name = '$name',
                    image='$image_name',
                    designation = '$designation',
                    email = '$email',
                    department = '$department',
                    contact='$contact',
                    telephone = '$telephone',
                    publication_profile = '$publication',
                    courses_taught = '$courses',
                    details='$details',
                    catagory = '$catagory'
                    WHERE pnum=$pnum
             ";

             //Execute the query
             $res2 = mysqli_query($conn, $sql2);

             //4.Redirect to Manage category with message
             //Check whether executed or not
             if($res2==true)
             {
                //Category Updated
                $_SESSION['update'] = "<div class='success'>People Updated Successfully</div>";
                header('location:'.SITEURL.'admin/manage-people.php');
             }
             else
             {
                //Failed to Update category
                $_SESSION['update'] = "<div class='error'>Failed to Update People</div>";
                header('location:'.SITEURL.'admin/manage-people.php');
             }

           }
        ?>
    </div>
</div>

<?php include('partials/footer.php');?>