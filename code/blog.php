<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "bubt_project");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($_FILES["image"]["error"] == 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('Invalid Image Extension'); </script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Image Size Is Too Large'); </script>";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, '../blog_image/' . $newImageName);

            // Use prepared statements to insert data safely
            $query = "INSERT INTO pending_blog (author_name, date, blog_title, blog_content, image) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "sssss", $name, $date, $title, $content, $newImageName);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script> alert('Successfully Added'); document.location.href = 'blog.php'; </script>";
            } else {
                echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
            }
            
            mysqli_stmt_close($stmt);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .icon-small {
            font-size: 15px;
            color: #FFFFFF;
            }
        .text1{
            font-size: 14px;
            font-weight: 500;
            color: #FFFFFF;
            margin-top: 15px;
        }
        .notice_txt{
            font-size: 45px;
            font-weight: 600;
            margin-top: 55px;
            margin-left: 30px;
        }
        .square-image{
            height: 100px;
            width: 100px;
        }
        .card:hover {
            background-color: #f8f9fa;
        }
        .custom-border {
            border: 1px solid #b2bec3;
        }
        .card-size {
            max-width: 380px;
        }
    </style>
</head>

<body>
<!-- First nevigation -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #0A0A0A; height: 40px;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mr-auto mt-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-telephone-fill icon-small"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-envelope-fill icon-small"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-clipboard2-pulse-fill icon-small"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="bi bi-question-square-fill icon-small"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="bi bi-collection-fill icon-small"></i></a>
                </li>
            </ul>
              <p class="text1">Bangladesh University of Business & Technology | Department of CSE </p>
        </div>
    </nav>

 <!-- Main nevigation -->
            
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF; height: 120px;">
    
    <div class="container-fluid">
        
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <a href="index.html">
            <img src="../image/bubtwebsitelogo.png" height="75px" width="280px"alt="BUBT Logo" />
        </a>
        
        <ul class="navbar-nav me-auto ml-auto font-weight-bold align-items-right justify-content-end"> 
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;" href="index.html">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " style="color: #38B6FF;" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;" href="notice.php">Notice</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;" href="results.php">Results</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;" href="routine.php">Routine</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " style="color: #38B6FF;" href="#" id="navbardrop" data-toggle="dropdown">
                student
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="tuition.php">Tuition Fee & Waiver</a>
                <a class="dropdown-item" href="admission.php">Take Admission</a>
                
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: #38B6FF;" href="#" id="navbardrop" data-toggle="dropdown">
                People
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="faculty.php">Faculty Members</a>
                <a class="dropdown-item" href="lab_assistent.php">Lab Assistent</a>
                <a class="dropdown-item" href="it_officers.php">IT Officers</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;"href="about.php">About CSE</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;"href="alumni.php">Alumni</a>
            </li>
        </ul>
        
        </div>
    </nav>
    
    <!-- Blog head -->
    <div class="container-fluid p-3 " style="background-color: #a29bfe; height: 225px;">
        
            <div class="row mt-0">
                <div class="col">
                <h5 class="text-center mb-2 font-weight-bold text-light notice_txt"><i class="bi bi-caret-right-fill"></i> University Blog</h5>
                <h5 class="text-center mb-0 font-weight-semibold text-dark " style=" margin-left:73px;"> Stories, Events and Perspectives</h5>
                </div>
                <div class="col text-center mb-5">
                    <img src="../image/blog_bg.png" alt="Notice Image" height="200px" width="240px" >
                </div>
            </div>  
    </div>

    <!-- Main section -->
    <div class="container-fluid" style="height:auto;">
        <div class="container-fluid mt-5" style="height:auto;">
            <div class="row" style="height:auto;">
                <div class="col-4 align-items-center justify-content-left">

                    <h5 class="font-weight-bold d-flex align-items-center justify-content-left" style="color: #38B6FF; font-size: 35px; margin-left: 25px; margin-top: 45px">
                        <i class="bi bi-pencil"> Share Your Story</i>
                    </h5>
                    <h3 class="font-weight-semibold d-flex align-items-center justify-content-left text-dark text-muted" style="font-size: 18px; margin-left: 25px; margin-top: 20px; font-weight: 600;">
                        Write a blog and we will feature it on our website
                    </h3>

                    <div class="card mt-4 card-size" style="font-size: 18px; margin-left: 25px; margin-top: 20px; font-weight: 600; border: 2px solid #b2bec3; color: #38B6FF; ">
                        <div class="card-body">
                            <form action="blog.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name" >Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="anonymous" value="anonymous">
                                </div>
                                <div class="form-group">
                                    <label for="date" >Date:</label>
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="image" >Image: (Aspect: 2 : 1)</label>
                                    <input type="file" class="form-control-file" id="image" name="image" accept=".jpg, .jpeg, .png" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="title" >Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content" >Content:</label>
                                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                
                <div class="col-8 text-center">
                <h5 class="font-weight-semibold d-flex align-items-right justify-content-right text-dark"  >Read All Blogs</h5>
                <hr style="border-top: 1px solid #8c8b8b;">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                        <div class="row flex-fill">
                        <?php
                            $conn = mysqli_connect("localhost","root","","bubt_project");
                            $stmt = $conn->prepare('SELECT * FROM blog ORDER BY date DESC');
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()):
                        ?>
                            <div class="col-md-4 d-flex mb-4">
                                <div class="card-deck">
                                    <div class="card flex-fill custom-border">
                                        <img src="../blog_image/<?php echo $row["image"]; ?>" class="card-img-top img-fluid" width="96" height="120" alt="">   
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="blog_view.php?id=<?php echo $row['bno'];?>" class="text-dark mb-2" data-abc="true"><?php echo $row["blog_title"]; ?></a>
                                            </h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->

<div class="container-fluid p-0 mt-5">

<footer class=" text-center text-lg-start text-white font-weight-bold" style="background-color:#38B6FF;">
 
  <div class="container p-4">

    <div class="row my-4">
 
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

        <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
          <img src="../image/01BUBT-Logo.png" height="70" alt=""
               loading="lazy" />
        </div>

        <p class="text-center">Bangladesh University of Business and Technology</p>

        <ul class="list-unstyled d-flex flex-row justify-content-center">
          <li>
            <a class="text-white px-2" href="#!">
              <i class="fab fa-facebook-square"></i>
            </a>
          </li>
          <li>
            <a class="text-white px-2" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a class="text-white ps-2" href="#!">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>

      </div>
  
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
        <h5 class="text-uppercase mb-4">Academic</h5>

        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Notice</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Blog</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Results</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Class Routine</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> People</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Alumni</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Volunteer activities</a>
          </li>
        </ul>
      </div>
  
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
        <h5 class="text-uppercase mb-4">Student</h5>

        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Tuition Fee & Waiver</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Waiver Calculator</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Admission Information</a>
          </li>
          <li class="mb-2">
            <a href="#!" class="text-white"><i class="bi bi-arrow-right-circle-fill"></i> Take Admission</a>
          </li>
        </ul>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4">Contact</h5>

        <ul class="list-unstyled">
          <li>
            <p><i class="fas fa-map-marker-alt pe-2"></i> Dhaka, Mirpur-2, Rupnagar Abashikh Elaka</p>
          </li>
          <li>
            <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
          </li>
          <li>
            <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
          </li>
        </ul>
      </div>
     
    </div>
    
  </div>
 

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Nahida Fatme, ID: 19202103127 : Owner </a>
  </div>
  
</footer>

</div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

</body>
</html>