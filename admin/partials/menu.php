<?php 
include("../config/constants.php"); 
include('login-check.php');
?>

<html>
    <head>
        <!-- <title>Admin Panel</title> -->
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <!----Menu section start----->
          <div class="menu text-center">
            <div class="wrapper">
              <ul>
               <li><a href="homepage.php">Home</a></li>
               <li><a href="manage-admin.php">Admin</a></li>
               <li><a href="manage-result.php">Result</a></li>
               <li><a href="manage-routine.php">Routine</a></li>
               <li><a href="manage-people.php">People</a></li>
               <li><a href="manage-notice.php">Notice</a></li>
               <li><a href="manage-blogs.php">Blogs</a></li>
               <li><a href="manage-alumni.php">Alumni</a></li>
               <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
         
          </div>
        <!----Menu section End----->
    </body>
</html>
