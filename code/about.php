<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About CSE</title>
    
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
            margin-left: 40px;
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
    
    <!-- Main Section -->
    <div class="container-fluid" style="height: 350px; background-color: #DBF3FA;">
        <div class="row ">
            <div class="col-6">
                <h5 class="text-center mb-2 font-weight-bold notice_txt">
                    <i class="bi bi-caret-right-fill"></i> Why is our CSE best ?
                </h5> 
                <p class="text-dark text-justify" style="font-size:14px; font-weight: 600;  max-width: 80%; margin-left:150px; margin-top:15px;">The B.Sc. Engg. in Computer Science and Engineering program offers a comprehensive education to prepare students for 
                    the rapidly evolving computer industry. With highly qualified faculty, 
                    advanced curriculum, modern facilities, research-oriented labs, and industry collaborations, 
                    the program equips students with the strength and skills needed for success in computer engineering</p>
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: right; align-items: right;">
                    <img src="../image/IMG_1904-scaled-1.jpg" alt="Bubt Image" style="height: 350px; width: 500px;">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5" style="height: 350px;">
        <div class="row ">
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: left; align-items: left;  margin-left:120px;">
                    <img src="../image/111.jpg" alt="Bubt Image" style="height: 350px; width: 450px;">
                </div>
            </div>

            <div class="col-6">
                <h5 class="text-left mb-2 font-weight-bold notice_txt" style="font-size: 35px; color: #03AC13;">
                    <i class="bi bi-caret-right-fill"></i> VISION OF CSE DEPARTMENT
                </h5> 
                <p class="text-dark text-justify" style="font-size:14px; font-weight: 600;  max-width: 80%; margin-left:0px; margin-top:15px;">
                    The vision of the department of Computer Science and Engineering is to become the center of excellence for learning and innovation 
                    as well as to nurture industry-oriented IT professionals to meet the national and global challenges of the 21st century at a minimum cost.
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5" style="height: auto;">
        <div class="row ">
            <div class="col-6">
                <h5 class="text-center mb-2 font-weight-bold notice_txt" style="margin-left:75px; font-size:38px;">
                    <i class="bi bi-caret-right-fill"></i> Message from the Chairman
                </h5> 
                <h6 class="text-muted font-weight-semibold" style="margin-left:140px;"> Md. Saifur Rahman</h6>
                <h6 class="text-muted font-weight-semibold" style="margin-left:140px;"> Assistant Professor & Chairman(Acting)</h6>
                <p class="text-dark text-justify" style="font-size:14px; font-weight: 600;  max-width: 80%; margin-left:140px; margin-top:15px;">
                    Welcome to the Department of Computer Science and Engineering (CSE) at Bangladesh University of Business and Technology (BUBT).
                    BUBT is one of the top ranking and leading private universities in Bangladesh that has got a Permanent Certificate from the Ministry
                    of Education by fulfilling all the criteria set by the UGC and Education Ministry.
                </p>
                <p class="text-dark text-justify" style="font-size:14px; font-weight: 600;  max-width: 80%; margin-left:140px; margin-top:15px;">
                    The Department of Computer Science and Engineering (CSE) of BUBT started in 2005 and now it has become the largest department of BUBT.
                    It has about 3000+ students and 50+ qualified full-time faculty members. The Department facilities include state-of-the-art classrooms 
                    and lab facilities. We have twelve outstanding computer programming labs with latest configuration computers and equipment among them, 
                    one dedicated lab for final year students project or thesis work, and one industry-standard gaming lab established with the support from 
                    ICT Division of Bangladesh Government.
                </p>
                <p class="text-dark text-justify" style="font-size:14px; font-weight: 600;  max-width: 80%; margin-left:140px; margin-top:15px;">
                We are very proud of our graduates and their accomplishments; they are highly skilled IT professionals who pursue successful careers in 
                 a wide range of contexts in the competitive local and global market.

                I invite you to visit the rest of our website to find information about our programs, our students’ achievements and activities, 
                our research groups and research activities, and I hope that prospective students will be encouraged to join our Computer Science and
                Engineering Department.
                </p>
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: center; align-items: center;">
                    <img src="../image/dipu.png" alt="Bubt Image" style="height: 450px; width: 450px;">
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