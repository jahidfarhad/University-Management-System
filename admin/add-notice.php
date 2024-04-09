<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
    <title>Notice</title>
        <h1>Add Notice</h1>
        <br><br>
        <?php
         if(isset($_SESSION['add']))
         {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
         }
         if(isset($_SESSION['upload']))
         {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
         }
        ?> 
        <br><br>

        

        <!----Add Category form starts---->

           <form action="" method="POST" enctype="multipart/form-data">
             <table class="tbl-30">
                <tr>
                   <td>Title:</td>
                   <td> 
                    <input type="text" name="content_title" placeholder="Enter Title">
                   </td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>
                    <input type="text" name="date" placeholder="Enter Date">
                    </td>
                </tr>
                <tr>
                   <td>Content:</td>
                   <td> 
                   <textarea name="content"  cols="30" rows="5" placeholder="Enter Content"></textarea>                   </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Notice" class="btn-secondary">
                    </td>
                </tr>
             </table>

           </form>
           <?php
             // check whether the submit button is clicked or not
             if(isset($_POST['submit']))
             {
                //echo "Clicked";

                //1.get the value from category form
                $content_title = $_POST['content_title'];
                $date = $_POST['date'];
                $content = $_POST['content'];

                //check whether the image is selected or not and set the value for image name accordingly
                //print_r($_FILES['image']);

                //die();// break the code here
                if(isset($_FILES['image']['name']))
                {
                    //upload the image
                    // to upload image we need image name, source path and destination path
                    $image_name =$_FILES['image']['name'];

                    //Upload Image only if image is selected
                    if($image_name !="")
                    {
                    //Auto rename our image
                    //get the extenssion of our image(jpg,png,gif,etc) e.g. "medicine1.jpg"
                    $ext = end(explode('.',$image_name));

                    //Rename the image
                    $image_name = "notice_".rand(000,999).'.'.$ext;// e.g alumni_image_814.jpg

                    $source_path =$_FILES['image']['tmp_name'];

                    $destination_path="../Notice_Image/".$image_name;

                    // finally upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);
                    // check whether the image is uploaded or not
                    // and if the images is not uploaded then we will stop the process and redirect with error message.
                    if($upload==false)
                    {
                        // set message
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload File</div>";
                        //redirect to add category page
                        header('location:'.SITEURL.'admin/add-notice.php');
                        //stop the process
                        die();
                    }
                 }
                }
                else
                {
                    //don't upload image and set the image_name value as blank
                    $image_name="";
                }

                //2. create sql query to insert category into database
                $sql = "INSERT INTO notice SET 
                    content_title = '$content_title',
                    notice_img ='$image_name',
                    date = '$date',
                    content = '$content'
                
                ";
                //3. execute the query and save in database
                $res = mysqli_query($conn, $sql);
                //4.check whether the query executed or not and data added or not
                if($res==true)
                {
                    //query executed and category added
                    $_SESSION['add'] = "<div class='success'>Notice Added Successfully</div>";
                    //redirect to manage category page
                    header('location:'.SITEURL.'admin/manage-notice.php');
                }
                else
                {
                    //Fail to add category
                    $_SESSION['add'] = "<div class='error'>Failed to Add Notice</div>";
                    //redirect to manage category page
                    header('location:'.SITEURL.'admin/manage-notice.php');
                }
             }
           
           
           ?>

         <!----Add Category form Ends---->
    </div>
</div>

<?php include('partials/footer.php');?>