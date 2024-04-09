<?php
  //Include constants file
  include('../config/constants.php');
  //echo "Delete Page";
  //check whether the id and image_name value is set or not
  if(isset($_GET['num'])AND isset($_GET['notice_img']))
  {
    //Get the value and delete
    //echo"Get value and Delete";
    $num = $_GET['num'];
    $image = $_GET['notice_img'];

    //Remove the physical image file is available
    if($image !="")
    {
        //Image is available.So Remove it
        $path = "../Notice_Image/".$image;
        //Remove the image
        $remove =unlink($path);
        //If Failed to remove image then add an error message and stop the process.
        if($remove==false)
        {
            //Set the SESSION Message
            $_SESSION['remove'] = "<div class='error'>Failed to Remove Notice File</div>";

            //Redirect to Manage category page
            header('location:'.SITEURL.'admin/manage-notice.php');

            //Stop The process
            die();
        }
    }

    //Delete data from database
    //SQL Query to delete data from database
    $sql = "DELETE FROM notice WHERE num=$num";
    //Execute the query
    $res = mysqli_query($conn, $sql);

    //Check Whether the data is deleted from database or not
    if($res==true)
    {
        //Set the Success message and redirect
        $_SESSION['delete'] = "<div class='success'>Notice Deleted Successfully</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-notice.php');

    }
    else
    {
        //Set Failed Message and redirect
        $_SESSION['delete'] = "<div class='erroe'>Failed to Delete Notice</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-notice.php');

    }

  }
  else
  {
    //redirect to manage category page
    header('location:'.SITEURL.'admin/manage-notice.php');
  }

 ?>