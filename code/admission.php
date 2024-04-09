<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Admission</title>
    
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
        .input_design{
            border: 1px solid #38B6FF;
            color: #38B6FF;
            font-weight: 600;
        }
        .table thead th {
            background-color: #38B6FF;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #D9E9FF;
        }

        .table {
            border: 1px solid #38B6FF;
            font-weight: 500;
        }
        .notice_txt{
            font-size: 35px;
            font-weight: 600;
            margin-top: 100px;
            margin-left: 30px;
            color: #007FFF;
        }
        .button_al{
            margin-top: 15px;
            margin-left: 100px;
            width: 80%;
            height: 50px;
            color: #f8f9fa;
            background-color: #007FFF;
            font-size: 20px;
            font-weight: 600;
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

    <!-- Admission head -->
    <div class="container-fluid" style="height: 350px; background-color: #DBF3FA;">
        <div class="row ">
            <div class="col-6">
                <h5 class="text-center mb-2 font-weight-bold notice_txt">
                    <i class="bi bi-caret-right-fill"></i> Apply for admission in Dept. of CSE
                </h5>
                
                <button class="btn btn-primary button_al" data-toggle="modal" data-target="#applymodal">Admission Requirements</button>
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: right; align-items: right;">
                    <img src="../image/unnamed.jpg" alt="Bubt Image" style="max-height: 350px; width: 500px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="applymodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-danger" id="exampleModalLabel">Check Admission Requirements</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body" style="padding: 20px;">
                    
                        <h6 style="color:#38B6FF; font-size: 20PX;">1. For Undergraduate Prpgram: Bsc in CSE</h6> <br>
                        <h6 class="text-muted text-justify">2. Science background with Mathematics and Physics at HSC or equivalent level. </h6> 
                        <h6 class="text-muted text-justify">3. GPA at least 2.50 or 2nd Division in SSC and HSC or equivalent examinations; or </h6> 
                        <h6 class="text-muted text-justify">4. GPA at least 2.00 either in SSC or HSC examination, but the total GPA
                             in both the examinations must be at least 6.00; or</h6> 
                        <h6 class="text-muted text-justify">5. Completed at least 5 Subjects in ‘O’ Level and 2 Subjects in ‘A’ Level.
                             At least B Grade in 4 Subjects and C Grade in 3 Subjects out of 7 Subjects.</h6> 
                        <h6 class="text-muted text-justify">6. North American High School Diploma or International Baccalaureate,
                             or its equivalent. </h6> 
                        <h6 class="text-muted text-justify">7. In case of sons/daughters of Freedom Fighters a total GPA of at least 
                            5.00 in both SSC and HSC Examinations. But the proof of Father /Mother as Freedom Fighter must be submitted. </h6> <br>
                        
                        <h6 style="color:#38B6FF; font-size: 20PX;">For Undergraduate Prpgram: Diploma Holders</h6> <br>
                        <h6 class="text-muted text-justify">1. Three or four years Diploma in Engineering from Bangladesh Technical 
                            Education Board (BTEB) with a CGPA of 2.5 out of 4.00, or</h6> 
                        <h6 class="text-muted text-justify">2. A Diploma recognized by BTEB with a CGPA of 2.5 out of 4.00 in any
                             engineering discipline from any recognized institute.</h6> 
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <!-- Main section -->
    <div class="row mt-4 justify-content-center align-items-center">
        <div class="col-4 d-flex justify-content-center align-items-center" style="width:100%;">
            <button type="button" class="btn btn-primary text-light font-weight-bold" style="width:100%; height:80px;">Applying for B.Sc in CSE</button>
        </div>
        <div class="col-4  d-flex justify-content-center align-items-center" style="width:100%;">
            <button type="button" class="btn btn-secondary text-light font-weight-bold disabled" style="width:100%; height:80px;">Apply for Diploma in CSE (Coming soon)</button>
        </div>
    </div>
    <div class="container">
            <h5 class="text-center mb-5 mt-4 font-weight-bold txt" style="color:#38B6FF; font-size:35px;">
                Admission Form
            </h5>
            <form method="POST" action="save_data.php" enctype="multipart/form-data">
                <div class="row" >
                    <div class="col-md-6">
                        <h3 class="text-danger font-weight-bold">SSC Information</h3>
                        <div class="form-group">
                            <label for="sscPassingYear" style="color:#38B6FF; font-weight:500;">Passing Year</label>
                            <input type="text" class="form-control" id="sscPassingYear" name="sscPassingYear" required>
                        </div>
                        <div class="form-group">
                            <label for="sscRoll" style="color:#38B6FF; font-weight:500;">SSC Roll</label>
                            <input type="text" class="form-control" id="sscRoll" name="sscRoll" required>
                        </div>
                        <div class="form-group">
                            <label for="sscRegistration" style="color:#38B6FF; font-weight:500;">SSC Registration</label>
                            <input type="text" class="form-control" id="sscRegistration" name="sscRegistration" required>
                        </div>
                        <div class="form-group">
                            <label for="sscBoard" style="color:#38B6FF; font-weight:500;">SSC Board</label>
                            <input type="text" class="form-control" id="sscBoard" name="sscBoard" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-danger font-weight-bold">HSC Information</h3>
                        <div class="form-group">
                            <label for="hscPassingYear" style="color:#38B6FF; font-weight:500;">Passing Year</label>
                            <input type="text" class="form-control" id="hscPassingYear" name="hscPassingYear" required>
                        </div>
                        <div class="form-group">
                            <label for="hscRoll" style="color:#38B6FF; font-weight:500;">HSC Roll</label>
                            <input type="text" class="form-control" id="hscRoll" name="hscRoll" required>
                        </div>
                        <div class="form-group">
                            <label for="hscRegistration" style="color:#38B6FF; font-weight:500;">HSC Registration</label>
                            <input type="text" class="form-control" id="hscRegistration" name="hscRegistration" required>
                        </div>
                        <div class="form-group">
                            <label for="hscBoard" style="color:#38B6FF; font-weight:500;">HSC Board</label>
                            <input type="text" class="form-control" id="hscBoard" name="hscBoard" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-danger font-weight-bold">Academic Information</h3>
                        <div class="form-group">
                            <label for="degreeName" style="color:#38B6FF; font-weight:500;">Degree Name</label>
                            <input type="text" class="form-control" id="degreeName" name="degreeName" required>
                        </div>
                        <div class="form-group">
                            <label for="description" style="color:#38B6FF; font-weight:500;">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="institutionName" style="color:#38B6FF; font-weight:500;">Institution Name</label>
                            <input type="text" class="form-control" id="institutionName" name="institutionName" required>
                        </div>
                        <div class="form-group">
                            <label for="academicBoard" style="color:#38B6FF; font-weight:500;">Academic Board</label>
                            <input type="text" class="form-control" id="academicBoard" name="academicBoard" required>
                        </div>
                        <div class="form-group">
                            <label for="grade" style="color:#38B6FF; font-weight:500;">Grade</label>
                            <input type="text" class="form-control" id="grade" name="grade" required>
                        </div>
                        <div class="form-group">
                            <label for="year" style="color:#38B6FF; font-weight:500;">Year</label>
                            <input type="text" class="form-control" id="year" name="year" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-danger font-weight-bold" >Personal Information</h3>
                        <div class="form-group">
                            <label for="firstName" style="color:#38B6FF; font-weight:500;">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName" style="color:#38B6FF; font-weight:500;">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="fatherName" style="color:#38B6FF; font-weight:500;">Father's Name</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                        </div>
                        <div class="form-group">
                            <label for="motherName" style="color:#38B6FF; font-weight:500;">Mother's Name</label>
                            <input type="text" class="form-control" id="motherName" name="motherName" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" style="color:#38B6FF; font-weight:500;">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dob" style="color:#38B6FF; font-weight:500;">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="maritalStatus" style="color:#38B6FF; font-weight:500;">Marital Status</label>
                            <select class="form-control" id="maritalStatus" name="maritalStatus" required>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="religion" style="color:#38B6FF; font-weight:500;">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion" required>
                        </div>
                        <div class="form-group">
                            <label for="nationality" style="color:#38B6FF; font-weight:500;">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" style="color:#38B6FF; font-weight:500;">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="address" style="color:#38B6FF; font-weight:500;">Address</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email" style="color:#38B6FF; font-weight:500;">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="image" style="color:#38B6FF; font-weight:500;">* Upload your passport size photo *</label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger btn-block font-weight-bold" data-toggle="modal" data-target="#applymodal">Apply</button>
                
            </form>
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