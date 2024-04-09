<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
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
            font-size: 35px;
            font-weight: 600;
            margin-top: 100px;
            margin-left: 123px;
            color: #FFFFFF;
        }
        .button_al{
            margin-top: 15px;
            margin-left: 123px;
            width: 83%;
            height: 55px;
            color: #38B6FF;
            background-color: #f8f9fa;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
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
        .custom-card {
        height: 350px; 
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
        
        <a href="index.php">
            <img src="../image/bubtwebsitelogo.png" height="75px" width="280px"alt="BUBT Logo" />
        </a>
        
        <ul class="navbar-nav me-auto ml-auto font-weight-bold align-items-right justify-content-end"> 
            <li class="nav-item">
            <a class="nav-link" style="color: #38B6FF;" href="index.php">Home</a>
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
    <!-- 1st section -->

    <div class="container-fluid" style="height: 500px; background-color: #38B6FF;">
        <div class="row ">
            <div class="col-6">
                <h5 class="text-left font-weight-bold notice_txt">
                    Welcome To the
                </h5>
                <h5 class="text-left mb-2 font-weight-bold" style="font-size: 55px; font-weight: 600; margin-top: 5px; margin-left: 52px; color: #FFFFFF;">
                    <i class="bi bi-caret-right-fill"></i> Department Of CSE
                </h5>
                
                <h6 class="text-dark text-justify font-weight-semibold" style="margin-left:123px; font-size:18px; margin-top:30px;"> The B.Sc. Engg. in Computer Science and Engineering program offers a comprehensive education to prepare students 
                    for the rapidly evolving computer industry. The program equips students with the strength and skills needed 
                    for success in computer engineering</h6>
                <a href="about.php" class="btn btn-primary button_al text-center">More About CSE</a>

            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: center; align-items: center; margin-left:80px; margin-top:50px;">
                    <img src="../image/unnamed.jpg" alt="Bubt Image" style="max-height: 350px; width: 400px;">
                </div>
            </div>
        </div>
    </div>
    <!--  buttons -->
    <h5 class="text-center mb-4 mt-3font-weight-bold txt" style="font-size: 30px; font-weight: 500; color:#38B6FF;">
        Programs Offering
    </h5>
    <div class="row mt-5 mb-5 justify-content-center align-items-center">
        <div class="col-3 d-flex justify-content-center align-items-center" style="width:100%;">
            <button type="button" class="btn btn-primary text-light font-weight-bold" style="width:100%; height:80px;">B.Sc in CSE (Day)</button>
        </div>
        <div class="col-3  d-flex justify-content-center align-items-center" style="width:100%;">
            <button type="button" class="btn btn-info text-light font-weight-bold " style="width:100%; height:80px;">B.Sc in CSE (Evening)</button>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center" style="width:100%;">
            <button type="button" class="btn btn-danger text-light font-weight-bold" style="width:100%; height:80px;">Diploma in CSE</button>
        </div>
    </div>
    <!-- Take admission -->
    <div class="container-fluid mt-2 bg-light" style="height: 350px; background-color: #FFFFFF;">
        <div class="row ">
            <div class="col-6 mt-5">
                <h5 class="text-left mb-2 font-weight-bold" style="font-size: 50px; font-weight: 600; margin-top: 5px; margin-left: 52px; color:#38b8ff;">
                    <i class="bi bi-caret-right-fill"></i> Take Admission in BUBT
                </h5>
                
                <h6 class="text-dark text-justify font-weight-semibold" style="margin-left:123px; font-size:18px; margin-top:30px;"> The B.Sc. Engg. in Computer Science and Engineering program offers a comprehensive education to prepare students 
                    for the rapidly evolving computer industry. The program equips students with the strength and skills needed 
                    for success in computer engineering</h6>
                <a href="admission.php" class="btn btn-danger button_al text-center" style="color: #FF2E2E; background-color: #FFFFFF;">Apply</a>
            </div>
            <div class="col-6 ">
                <div class="image-container" style=" height: 100%; display: flex; justify-content: right; align-items: right;">
                    <img src="../image/IMG_1904-scaled-1.jpg" alt="Bubt Image" style="height: 350px; width: 500px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Blog show -->
    <h5 class="text-center mb-5 mt-5 font-weight-bold txt" style="font-size: 30px; font-weight: 500; color:#38B6FF;">
        Read Latest Events or write a Blogs
    </h5>
    <div class="col-9 mx-auto">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
                $conn = mysqli_connect("localhost", "root", "", "bubt_project");
                $stmt = $conn->prepare('SELECT * FROM blog ORDER BY date DESC');
                $stmt->execute();
                $result = $stmt->get_result();
                $count = 0;
                $active = 'active';
                while ($row = $result->fetch_assoc()):
                if ($count % 3 === 0) {
                    echo '<div class="carousel-item ' . $active . '">';
                    echo '<div class="row">';
                    $active = '';
                }
            ?>
                <div class="col-md-4">
                    <div class="card flex-fill custom-border" style="height: 300px;">
                    <img src="../blog_image/<?php echo $row["image"]; ?>" class="card-img-top img-fluid" alt="">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h6 class="font-weight-semibold mb-2">
                        <a href="blog_view.php?id=<?php echo $row['bno'];?>" class="text-dark mb-2" data-abc="true"><?php echo $row["blog_title"]; ?></a>
                        </h6>
                    </div>
                    </div>
                </div>
            <?php
                $count++;
                if ($count % 3 === 0) {
                    echo '</div>';
                    echo '</div>';
                }
                endwhile;

                if ($count % 3 !== 0) {
                echo '</div>';
                echo '</div>';
                }
            ?>
            </div>
            <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--  -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5 mb-5" data-ride="carousel" style="max-height: 500px; overflow: hidden;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="../image/1.jpg" alt="First slide">
            <div class="carousel-caption-overlay">
                <p>Welcome to the</p>  
                <h5>Department Of CSE</h5>  
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="../image/3.jpg" alt="Second slide">
            <div class="carousel-caption ">
                <h5>...</h5>
                <p>...</p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="../image/4.jpg" alt="Third slide">
            <div class="carousel-caption ">
                <h5>...</h5>
                <p>...</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        
        <!-- People section -->
        <h5 class="text-center mb-4 mt-3font-weight-bold txt" style="font-size: 30px; font-weight: 500; color:#38B8FF;">
            People of CSE
        </h5>
        <div class="container mt-4">
            <div class="card text-center">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    <a class="nav-link active" href="faculty.php" style="color:#38B6FF; font-weight:500;">Faculty Members</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="lab_assistent.php">Lab Assistants</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="it_officers.php">IT Officers</a>
                    </li>
                </ul>
                </div>
                <div class="card-body">
                <div id="peopleCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                        $conn = mysqli_connect("localhost","root","","bubt_project");
                        $stmt = $conn->prepare("SELECT * FROM people WHERE catagory='faculty'");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row_count = $result->num_rows;
                        $item_count = ceil($row_count / 4);
                        $counter = 0;
                        while ($row = $result->fetch_assoc()):
                        if ($counter % 4 == 0) {
                            $active = ($counter === 0) ? 'active' : '';
                            echo "<div class='carousel-item $active'>";
                            echo "<div class='row mt-4'>";
                        }
                    ?>
                    <div class="col-md-3">
                        <div class="card flex-fill custom-card">
                        <div class="card-body d-flex flex-column">
                            <img src="../people_image/<?php echo $row["image"]; ?>" class="card-img" width="100px" height="160px" alt="">
                            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                            <p class="card-text flex-grow-1 mb-0" style="font-size:12px;"><?php echo $row["designation"]; ?></p>
                            <p class="card-text text-muted" style="font-size:12px;"><?php echo $row["department"]; ?></p>
                            <a href="people_view.php?id=<?php echo $row['pnum'];?>" class="btn-sm btn-danger">View Details</a>
                        </div>
                        </div>
                    </div>
                    <?php
                        $counter++;
                        if ($counter % 4 == 0 || $counter === $row_count) {
                            echo "</div>";
                            echo "</div>";
                        }
                        endwhile;
                    ?>
                    </div>
                    <a class="carousel-control-prev" href="#peopleCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#peopleCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
        </div>

        <!-- last section -->
        <div class="container mt-5 mb-2">
  <div class="row">
    <div class="col-md-6">
      <h3 class="font-weight-bold" style="color: #38B6FF;">All Recent Notices:</h3><br>
      <?php
      $conn = mysqli_connect("localhost", "root", "", "bubt_project");
      $stmt = $conn->prepare('SELECT * FROM notice');
      $stmt->execute();
      $result = $stmt->get_result();
      $notice_counter = 0;
      while ($row = $result->fetch_assoc()):
        if ($notice_counter < 4):
      ?>
        <div class="card bg-transparent custom-border rounded mb-4" style="max-height: 18%;">
            <div class="card-body d-flex flex-column align-items-start justify-content-between">
                <h5 class="card-title mb-0" style="font-size: 18px;"><?php echo $row["content_title"]; ?></h5>
                <button class="btn btn-danger btn-sm noticebtn mt-2" style="height: 25px; font-size: 12px;" data-id="<?php echo $row['num']; ?>" data-toggle="modal" data-target="#noticemodal">
                View PDF <i class="bi bi-eye-fill"></i>
                </button>
            </div>
        </div>

      <?php
        endif;
        $notice_counter++;
      endwhile;
      ?>
      <script type='text/javascript'>
            $(document).ready(function(){
                $('.noticebtn').click(function(){
                    var nid = $(this).data('id');
                    $.ajax({
                        url: 'notice_view.php',
                        type: 'post',
                        data: {nid: nid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#noticemodal').modal('show'); 
                        }
                    });
                });
            });
    </script>
    <!--Notice Modal -->
    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="noticemodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Viewing Full Notice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                         <div id="modalContent"></div>
                        
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-6 justify-content-center align-items-center" style="width: 100%; ">
    <div class="d-flex flex-column align-items-center">
        <h3 class="font-weight-bold" style="color: #38B6FF;">Get all documents</h3><br>
            <div class="card mb-4" style="width: 22rem;">
            <img class="card-img-top" src="../image/2538.jpg" alt="Card image cap" style="height: 200px;">
            <div class="card-body">
                <a href="routine.php" class="btn btn-warning text-dark font-weight-bold mb-3 shadow-none" style="width: 100%; height: 40px; display: flex; align-items: center; justify-content: center;">
                 Class Routine</a>
                
            </div>
            </div>

            <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="../image/8899732.jpg" alt="Card image cap" style="height: 200px;">
            <div class="card-body">
                <a href="results.php" class="btn btn-warning text-dark font-weight-bold mb-3 shadow-none" style="width: 100%; height: 40px; display: flex; align-items: center; justify-content: center;">
                 Exam Results</a>
                
            </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </div>


<script type='text/javascript'>
  $(document).ready(function() {
    $('.noticebtn').click(function() {
      var nid = $(this).data('id');
      $.ajax({
        url: 'notice_view.php',
        type: 'post',
        data: {
          nid: nid
        },
        success: function(response) {
          $('.modal-body').html(response);
          $('#noticemodal').modal('show');
        }
      });
    });
  });
</script>


    <!-- ---------------- -->
    
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