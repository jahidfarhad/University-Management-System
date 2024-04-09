<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog View</title>
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
        .title_txt{
            font-size: 39px;
            font-weight: 500;
            margin-top: 45px;
            
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
        .small-card {
            max-width: 300px;
        }
        .blog-content {
        white-space: pre-wrap;
        }
        .custom-card{
            height: 350px;
            border: 1px solid #b2bec3;
            margin-bottom: 30px;
        }
</style>
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
    <div class="container-fluid p-3 " style="background-color: #38B6FF; height: 225px;">   
            <div class="row mt-0">
                <div class="col">
                <h5 class="text-center mb-2 font-weight-bold text-light notice_txt"><i class="bi bi-caret-right-fill"></i> People of CSE</h5>
                <h5 class="text-center mb-0 font-weight-semibold text-light " style=" margin-left:73px;"> LAB Assistant of CSE Dept.</h5>
                </div>
                <div class="col text-center mb-5">
                    <img src="../image/students_09.png" alt="Notice Image" height="200px" width="240px" >
                </div>
            </div>  
    </div>

    <!-- Main content -->
    <div class="container mt-4">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link text-dark" href="faculty.php">Faculty Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="lab_assistent.php" style="color:#38B6FF; font-weight:500;">Lab Assistant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="it_officers.php">IT officers</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
              
            <div class="row mt-4 flex-fill">
                <?php
                    $conn = mysqli_connect("localhost","root","","bubt_project");
                    $stmt = $conn->prepare("SELECT * FROM people WHERE catagory='assistant'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()):
                ?>
            <div class="col-md-3">
                <div class="card flex-fill custom-card">
                <div class="card-body  d-flex flex-column">
                    <img src="../people_image/<?php echo $row["image"]; ?>" class="card-img mb-0 " width="100px" height="160px" alt="">  
                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                    <p class="card-text  flex-grow-1 " style="font-size:12px;"><?php echo $row["designation"]; ?></p>
                    <p class="card-text text-muted" style="font-size:12px;"><?php echo $row["department"]; ?></p>
                    <a href="people_view.php?id=<?php echo $row['pnum'];?>" class="btn-sm btn-danger">View Details</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
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