<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>
    
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
        .txt{
            font-size: 25px;
            font-weight: 600;
            margin-top: 40px;
            margin-left: 30px;
            color: #007FFF;
        }
        .notice_txt{
            font-size: 45px;
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
        .square-image{
            height: 100px;
            width: 100px;
        }
        .card:hover {
            background-color: #f8f9fa;
        }
        .custom-border {
            border: 1px solid #38B6FF;
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
        .table-small {
            width: 600px;
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
    
    <!-- Alumni head -->
    <div class="container-fluid" style="height: 350px; background-color: #DBF3FA;">
        <div class="row ">
            <div class="col-6">
                <h5 class="text-center mb-2 font-weight-bold notice_txt">
                    <i class="bi bi-caret-right-fill"></i> CSE Alumni Association
                </h5>
                
                <button class="btn btn-primary button_al" data-toggle="modal" data-target="#noticemodal">Alumni Details</button>
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: right; align-items: right;">
                    <img src="../image/unnamed.jpg" alt="Bubt Image" style="max-height: 350px; width: 500px;">
                </div>
            </div>
        </div>
    </div>

    <!--aLUMNI Modal -->
    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="noticemodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color:#38B6FF;">Alumni Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                         <h4 class="font-weight-bold"> CONSTITUTION OF THE BUBT CSE ALUMNI ASSOCIATION</h4>
                         <h6 class="text-muted">The BUBT CSE Alumni Association fosters a lifelong sprint of belonging and pride by connecting alumni,  students and friends of BUBT and each other. 
                                The subsequent section describes its formation, membership and operating process. </h6> <br>
                        <h6 style="color:#38B6FF;">Article-I: Name </h6>
                        <h6 class="text-muted">The name of the organization shall be “BUBT CSE Alumni Association” (BUBTCSEAA). </h6> <br>
                        <h6 style="color:#38B6FF;">Article-II: Location </h6>
                        <h6 class="text-muted">The principal office of the BUBT CSE Alumni Association shall be located at the campus of Bangladesh  University of Business and Technology (BUBT). </h6> <br>
                        <h6 style="color:#38B6FF;">Article-III: Vision, Mission and Objectives </h6>
                        <h6 class="text-muted">• Vision: </h6>
                        <h6 class="text-muted" style="font-size: 13px;">To engage BUBT CSE Alumni community in the support and advance cause of BUBT • Mission: BUBT CSE Alumni Association will act as a credible, independent and collaborative  voice.  </h6>
                        <h6 class="text-muted">• Objectives:</h6>
                        <h6 class="text-muted" style="font-size: 13px;">1.To establish a market driven approach to support BUBT CSE Alumni Association in all  possible ways throughout their lives.</h6>
                        <h6 class="text-muted" style="font-size: 13px;">2.To maintain the university and community partnerships through an integrated approach  for building relationship with the university and each other. </h6>
                        <h6 class="text-muted" style="font-size: 13px;">3.To build and promote the “Next Generation” of advocacy, which is aligned and integrated  with BUBTs mission and policy. </h6>
                        <h6 class="text-muted" style="font-size: 13px;">4.To build a unique, industry based innovation team that positions the Alumni Association  at the forefront of technology and alumni programming. </h6>
                        <h6 class="text-muted" style="font-size: 13px;">5.To develop a culture that attracts and retains the best talent and make BUBT CSE Alumni  Association at the “Best Place” to work. </h6>
                        <br>
                        <h6 style="color:#38B6FF;">Article-IV: Purpose</h6>
                        <h6 class="text-muted">The general purpose of this Association shall be to promote the general welfare and effectiveness of CSE  graduates of BUBT, throug</h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Strengthening the ties among former CSE graduates of Bangladesh University of Business and  Technology (BUBT) </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Stimulating the interest and activity of the BUBT CSE Alumni  </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Stimulating the interest and activity of the BUBT CSE Alumni  </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Encouraging alumni to contribute their time talent & financial support to the Alumni Association  for the betterment of the graduates of CSE and BUBT at large.</h6>
                        <br>
                        <h6 style="color:#38B6FF;">Article-V: Core Values</h6>
                        <h6 class="text-muted">BUBT CSE Alumni Association is committed to excellence in all its activities and is dedicated to the  following core values: </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Loyalty: Pride in and commitment to the future that we are building together as a university,  department and an alumni community, while honoring our history, culture, traditions and achievements. </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Integrity: Transparency and ethical behavior in all of our activities  </h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Diversity: Recognizing and valuing differences and seeking alternative perspectives and  inclusiveness in all that we do.</h6>
                        <h6 class="text-muted" style="font-size: 13px;">• Innovation: Striving to be an industrious leader in alumni relations through a creative and  transformational business model</h6>
                        <br>
                        <h6 style="color:#38B6FF;">Article-VII: Executive Committee and Officers</h6>
                        <h6 class="text-muted">The Executive Committee of the Alumni Association will consist of</h6>
                        <table class="table table-small">
                            <thead>
                                <tr>
                                <th>Sl. No</th>
                                <th>Name of the Post </th>
                                <th>Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>President</td>
                                <td>1</td>
                                
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>vice President </td>
                                <td>2</td>
                               
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>General Secretary </td>
                                <td>1</td>
                                </tr>

                                </tr>
                                <tr>
                                <td>4</td>
                                <td>Joint Secretary  </td>
                                <td>1</td>
                                </tr>

                                </tr>
                                <tr>
                                <td>5</td>
                                <td>Treasurer </td>
                                <td>1</td>
                                </tr>

                                </tr>
                                <tr>
                                <td>6</td>
                                <td>General Secretary </td>
                                <td>1</td>
                                </tr>
                            </tbody>
                            </table>
                    </div>


                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AD HOC Committee Card-->
    <h5 class="text-center mb-2 font-weight-bold txt">
        AD HOC Committee
    </h5>

    <div class="container mt-4">
            <div class="card text-center mb-5">
                <div class="card-body">
                    
                    <div class="row mt-4 flex-fill">
                        <?php
                            $conn = mysqli_connect("localhost","root","","bubt_project");
                            $stmt = $conn->prepare("SELECT * FROM alumni");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()):
                        ?>
                    <div class="col-md-3">
                        <div class="card flex-fill custom-card custom-border " style="margin-bottom: 20px;">
                        <div class="card-body  d-flex flex-column">
                            <img src="../people_image/<?php echo $row["image"]; ?>" class="card-img " width="100px" height="160px" alt="">  
                            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                            <p class="card-text  flex-grow-1 mb-0" style="font-size:12px;"><?php echo $row["designation"]; ?></p>
                            <p class="card-text text-muted" style="font-size:12px;"><?php echo $row["email"]; ?></p>
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