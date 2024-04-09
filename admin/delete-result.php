<?php
  //Include constants file
  include('../config/constants.php');
  //echo "Delete Page";
  //check whether the id and image_name value is set or not
  if(isset($_GET['rno'])AND isset($_GET['results']))
  {
    //Get the value and delete
    //echo"Get value and Delete";
    $rno = $_GET['rno'];
    $image = $_GET['results'];

    //Remove the physical image file is available
    if($image !="")
    {
        //Image is available.So Remove it
        $path = "../results/".$image;
        //Remove the image
        $remove =unlink($path);
        //If Failed to remove image then add an error message and stop the process.
        if($remove==false)
        {
            //Set the SESSION Message
            $_SESSION['remove'] = "<div class='error'>Failed to Remove Result File</div>";

            //Redirect to Manage category page
            header('location:'.SITEURL.'admin/manage-result.php');

            //Stop The process
            die();
        }
    }

    //Delete data from database
    //SQL Query to delete data from database
    $sql = "DELETE FROM results WHERE rno=$rno";
    //Execute the query
    $res = mysqli_query($conn, $sql);

    //Check Whether the data is deleted from database or not
    if($res==true)
    {
        //Set the Success message and redirect
        $_SESSION['delete'] = "<div class='success'>Result Deleted Successfully</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-result.php');

    }
    else
    {
        //Set Failed Message and redirect
        $_SESSION['delete'] = "<div class='erroe'>Failed to Delete Result</div>";
        //Redirect to Manage category
        header('location:'.SITEURL.'admin/manage-result.php');

    }

  }
  else
  {
    //redirect to manage category page
    header('location:'.SITEURL.'admin/manage-result.php');
  }

 ?>