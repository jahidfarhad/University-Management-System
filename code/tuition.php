<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuition Fees & Waiver</title>
    
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

    <!-- TUITION head -->
    <div class="container-fluid" style="height: 250px; background-color: #38B6FF;">
        <div class="row ">
            <div class="col-6 mt-4">
                <h5 class="text-center mb-2 font-weight-bold notice_txt" style=" color: #FFFFFF;">
                    <i class="bi bi-caret-right-fill"></i> Tuition Fee & Waiver
                </h5>
                
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: right; align-items: right;">
                    <img src="../image/333.jpg" alt="Bubt Image" style="max-height: 250px; width: 500px;">
                </div>
            </div>
        </div>
    </div>
        
    <div class="container mt-5">
            <h5 class="text-center mb-3 font-weight-bold txt" style="color:#38B6FF;">
                Tuition Fees of B.Sc. in CSE
            </h5>
        <div class="row">
            <div class="col">
                <table style="border: 1px solid #38B6FF; font-weight: 500; width: 100%; height: 50px;">
                    <thead style="background-color: #38B6FF; color: #fff;">
                        <tr>
                        <th colspan="3">Regular Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td colspan="2">Total Credits</td>
                        <td>150</td>
                        </tr>
                        <tr>
                        <td colspan="2">Costs Per Credit</td>
                        <td>Tk. 3,050</td>
                        </tr>
                        <tr>
                        <td colspan="2">Total Tuition fees including Admission fee</td>
                        <td>Tk. 5,68,340</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table style="border: 1px solid #38B6FF; font-weight: 500; width: 100%; height: 50px;">
                    <thead style="background-color: #38B6FF; color: #fff;">
                        <tr>
                        <th colspan="3">Diploma Holder's Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td colspan="2">Total Credits</td>
                        <td>135</td>
                        </tr>
                        <tr>
                        <td colspan="2">Costs Per Credit</td>
                        <td>Tk. 1,400</td>
                        </tr>
                        <tr>
                        <td colspan="2">Total Tuition fees including Admission fee</td>
                        <td>Tk. 2,94,840</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <div class="container mt-5">
        <h5 class="text-left mb-3 font-weight-bold txt" style="color:#38B6FF;">
            Waiver Distribution
        </h5>
        <div class="row text-center">
            <div class="col">
                <table style="border: 1px solid #38B6FF; font-weight: 500; width: 100%; height: 50px;">
                    <thead style="background-color: #38B6FF; color: #fff;">
                        <tr>
                        <th colspan="3">Waiver (SSC + HSC) (First 3 semester)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td colspan="3">9.00-9.49 = 25%</td>
                        
                        </tr>
                        <tr>
                        <td colspan="3">9.50-9.99 = 50%</td>
                        
                        </tr>
                        <tr>
                        <td colspan="3">10.00 = 100%</td>
                        
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="border: 1px solid #38B6FF; font-weight: 500; width: 100%; height: 50px;">
                    <thead style="background-color: #38B6FF; color: #fff;">
                        <tr>
                        <th colspan="3">Waiver on CGPA (previous semester)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td colspan="3">3.70-3.80 = 10%</td>
                        </tr>
                        <tr>
                        <td colspan="3">3.81-3.90 = 25%</td>
                        
                        </tr>
                        <tr>
                        <td colspan="3">3.91-3.99 = 50%</td>
                        </tr>
                        <tr>
                        <td colspan="3">4.00 = 100%</td>
                        </tr>
                    </tbody>
                </table>

                <div class="row mt-5">
                    <div class="col d-flex justify-content-center align-items-center" style="width:100%;">
                        <button type="button" class="btn btn-danger text-light font-weight-bold"style="width:100%; height:80px;" data-toggle="modal" data-target="#paymentmodal">
                        Payment Procedure
                        </button>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center" style="width:100%;">
                        <button type="button" class="btn btn-success text-light font-weight-bold" style="width:100%; height:80px;" data-toggle="modal" data-target="#waivermodal">
                        Other Waiver & Scholarship
                        </button>
                    </div>
                </div>


            </div>

            <div class="col d-flex justify-content-center align-items-center">
                <div class="card text-center" style="width: 100%;">
                    <div class="card-body" style="color: #38B6FF; border: 1px solid #38B6FF;">
                        <h5 class="card-title font-weight-bold text-danger">Waiver Calculator</h5>
                        <form>
                            <div class="form-group">
                                <label for="totalSemesterFee">Total Semester Fee</label>
                                <input type="number" class="form-control" id="totalSemesterFee" placeholder="Enter total semester fee">
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control" id="semester">
                                    <option value="firstThree">First Three Semesters</option>
                                    <option value="afterThree">After Three Semesters</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="cgpa">CGPA (Previous Semester)</label>
                                    <input type="number" step="0.01" class="form-control" id="cgpa" placeholder="Enter CGPA">
                                </div>
                                <div class="col-6">
                                    <label for="sscHscGrade">SSC/HSC Grade (out of 10)</label>
                                    <input type="number" step="0.01" class="form-control" id="sscHscGrade" placeholder="Enter SSC/HSC Grade">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block text-light font-weight-semibold" onclick="calculateWaiver()">Calculate</button>
                        </form>
                        <div id="result" class="mt-3 font-weight-bold"></div>
                    </div>
                </div>
            </div>
            <script> 
                function calculateWaiver() {
                const totalSemesterFee = document.getElementById("totalSemesterFee").value;
                const semester = document.getElementById("semester").value;
                const cgpa = document.getElementById("cgpa").value;
                const sscHscGrade = document.getElementById("sscHscGrade").value;

                const semesterFee = 6000;
                const tuitionFee = totalSemesterFee - semesterFee;
                let waiverPercent = 0;

                if (semester === "firstThree") {
                    if (sscHscGrade >= 9.00) {
                        if (sscHscGrade >= 9.00 && sscHscGrade <= 9.49) {
                            waiverPercent = 25;
                        } else if (sscHscGrade >= 9.50 && sscHscGrade <= 9.99) {
                            waiverPercent = 50;
                        } else if (sscHscGrade == 10) {
                            waiverPercent = 100;
                        }
                    } else if (cgpa >= 3.70) {
                        if (cgpa >= 3.70 && cgpa <= 3.80) {
                            waiverPercent = 10;
                        } else if (cgpa >= 3.81 && cgpa <= 3.90) {
                            waiverPercent = 25;
                        } else if (cgpa >= 3.91 && cgpa <= 3.99) {
                            waiverPercent = 50;
                        } else if (cgpa == 4.00) {
                            waiverPercent = 100;
                        }
                    }
                } else if (semester === "afterThree" && cgpa >= 3.70) {
                    if (cgpa >= 3.70 && cgpa <= 3.80) {
                        waiverPercent = 10;
                    } else if (cgpa >= 3.81 && cgpa <= 3.90) {
                        waiverPercent = 25;
                    } else if (cgpa >= 3.91 && cgpa <= 3.99) {
                        waiverPercent = 50;
                    } else if (cgpa == 4.00 && sscHscGrade == 10) {
                        waiverPercent = 100;
                    }
                }

                const waiverAmount = (waiverPercent / 100) * tuitionFee;
                const resultElement = document.getElementById("result");

                resultElement.innerHTML = `Waiver Percentage: ${waiverPercent}%<br>Waiver Amount: ${waiverAmount}`;
            }
            </script>

            </div>

    </div>

    <!--payment Modal -->
    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="paymentmodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color:#38B6FF;">Fee Payment Procedure</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-dark">1. Tuition fees and semester fees are to be paid on semester basis.</h6> <br>
                        <h6 class="text-dark">2. Caution money for undergraduate programs is Tk. 3,000 (refundable) and for that of graduate programs is Tk. 2,000 (refundable).</h6> <br>
                        <h6 class="text-dark">3. All payments should be made to the designated Bank by pay order /cash in the prescribed Money Receipt taken from the Accounts section of BUBT.</h6> <br>
                        <h6 class="text-dark">4. Fees are payable as per following schedule:</h6>

                        <h6 class="text-muted text-justify" style="font-size: 13px; margin-left:55px;"> 1. New student: Total fees of the 1st semester to be paid at the time of admission.</h6>
                        <h6 class="text-muted text-justify" style="font-size: 13px; margin-left:55px;"> 2. Existing student: 50% of the total semester fees is to be paid at the time of registration and the rest 50% is payable within 30 days from the date of start of the classes of that semester or as decided and notified by the university administration from time to time.</h6>
                        <h6 class="text-muted text-justify" style="font-size: 13px; margin-left:55px;"> 3. A specific amount of fine shall be payable for failure to pay the fees within the schedule date. Students will not be allowed to sit for the Semester Final Examination without clearance of all their dues before the start of the Examination</h6>
                    </div>
                    
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--waiver Modal -->
    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="waivermodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color:#38B6FF;">There are provisions for scholarship, stipend and tuition fee waiver for the students in BUBT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-dark">1. Scholarships, stipends and fee waivers are awarded to a minimum of 6% students of the University on the basis of need and merit.</h6>
                        <h6 class="text-dark">2. 20% Waiver on Admission Fee for newly admitted students (Special Waiver).</h6> 
                        <h6 class="text-dark">3. 10%-100% Tuition fee waiver/scholarship for poor and meritorious students.</h6> 
                        <h6 class="text-dark">4. 25%-100% Tuition fee waiver based on the results of the SSC and HSC Examinations.</h6>
                        <h6 class="text-dark">5. 25%-100% Tuition fee waiver based on the semester results at BUBT.</h6>
                        <h6 class="text-dark">6. Special tuition fee waiver for siblings (25% each)..</h6>
                        <h6 class="text-dark">7. 100% Waiver on Tuition Fee for Children of the Freedom Fighters.</h6>
                        <h6 class="text-dark">8. 25% waiver will be enjoyed by the students of Dhaka Commerce College (DCC) and 25% for Principal Kazi Faruky School & College.</h6>
                        <h6 class="text-dark">9. 20% waiver on Tuition fee for BUBT Students admitted in Master’s Program.</h6>
                    </div>
                    
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
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