<?php
  //Include constants file
  include('../config/constants.php');
  //echo "Delete Page";
  //check whether the id and image_name value is set or not
  if(isset($_GET['rno'])AND isset($_GET['routine']))
  {
    //Get the value and delete
    //echo"Get value and Delete";
    $rno = $_GET['rno'];
    $image = $_GET['routine'];

    //Remove the physical image file is available
    if($image !="")
    {
        //Image is available.So Remove it
        $path = "../routines/".$image;
        //Remove the image
        $remove =unlink($path);
        //If Failed to remove image then add an error message and stop the process.
        if($remove==false)
        {
            //Set the SESSION Message
            $_SESSION['remove'] = "<div class='error'>Failed to Remove Routine File</div>";

            //Redirect to Manage category page
            header('location:'.SITEURL.'admin/manage-routine.php');

            //Stop The process
            die();
        }
    }

    //Delete data from database
    //SQL Query to delete data from database
    $sql = "DELETE FROM routine WHERE rno=$rno";
    //Execute the query
    $res = mysqli_query($conn, $sql);

    //Check Whether the data is deleted from database or not
    if($res==true)
    {
        //Set the Success message and redirect
        $_SESSION['delete'] = "<div class='success'>Routine Deleted Successfully</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-routine.php');

    }
    else
    {
        //Set Failed Message and redirect
        $_SESSION['delete'] = "<div class='erroe'>Failed to Delete Routine</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-routine.php');

    }

  }
  else
  {
    //redirect to manage category page
    header('location:'.SITEURL.'admin/manage-routine.php');
  }

 ?>