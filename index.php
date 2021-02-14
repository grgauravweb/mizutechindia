<?php
error_reporting(0);
ini_set('display_errors', 0);
include "./admin/connect.php";
if (isset($_POST['submit'])){
  $name=$_POST['name'];
  $name=str_replace("<", "lt;", $name);
  $name=str_replace(">", "gt;", $name);
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $email=str_replace("<", "lt;", $email);
  $email=str_replace(">", "gt;", $email);
  $query=$_POST['query'];
  $query=str_replace("<", "lt;", $query);
  $query=str_replace(">", "gt;", $query);
  $name=stripcslashes($name);
  $email=stripcslashes($email);
  $phone=stripcslashes($phone);
  $query=stripcslashes($query);
  $name=mysqli_real_escape_string($con, $name);
  $phone=mysqli_real_escape_string($con, $phone);
  $email=mysqli_real_escape_string($con, $email);
  $query=mysqli_real_escape_string($con, $query);
  $sql="INSERT INTO `query` (`name`, `phone`, `email`, `query`) VALUES ('$name','$phone','$email','$query')";
  $sqlquery=mysqli_query($con,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" href="./images/logo/logo.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="./js/nav.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <style>
  body{
    font-family: 'Baloo Bhai 2', cursive;
  }
    .psv {
      padding: 50px;
      /* background-color: green; */
      transition: transform .2s;
      width: 50px;
      height: 70px;
      margin: 0 auto;
    }

    .psv1 img:hover {
      -ms-transform: scale(1.5);
      /* IE 9 */
      -webkit-transform: scale(1.5);
      /* Safari 3-8 */
      transform: scale(1.5);
      border: 2px solid black;
    }
    .rounded-circle {
      border-radius: 20px !important;
    }
    .row{
        margin-right: 0px!important;
    }
      
    .step-text { 
      display: none;
    }

    .psv1:hover+.step-text {
      display: inline;
    }

    .mineralwaterplant {
      background-image: url("./images/card_bg/istockphoto-1272800955-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .pulpjuiceplant {
      background-image: url("./images/card_bg/istockphoto-1130104948-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .carbonatedsoftdrink {
      background-image: url("./images/card_bg/istockphoto-854175316-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .watertreatmentplant {
      background-image: url("./images/card_bg/istockphoto-453481431-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
    }

    .wastewaterplant {
      background-image: url("./images/card_bg/istockphoto-187108475-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .waterharvesting {
      background-image: url("./images/card_bg/istockphoto-1153091127-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
    }
    .card-body{
      height: 348px;
      background-repeat: no-repeat;
      background-size: cover;
    }
    /* .aftersales {
      background-image: url("./images/istockphoto-864255126-612x612.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    } */
    /* .card-body:hover{
      color: white;
      background:#212529;
    } */
    .phone{
      color:white;
      font-weight: 600;
    }
    .mail{
      color:white;
      font-weight: 600;
    }
    .linkedin:hover{
      background:rgba(0,0,0,0.3);
      color: white;
    }
    .linkedin{
      color: blue;
      font-weight: 600;
    }
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: white !important;
}

.frontside .card .card-title{
  color: white !important;
}
.backside .card .card-title {
    color: green !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
footer{
  background-image: url("./images/istockphoto-181987625-612x612.jpg");
  background-repeat: no-repeat;
      background-size: cover;
}
.footer{
  background-color:rgb(232 255 234 / 91%);
}
.head1{
  background-color:#000d1785;
}
  </style>
</head>

<body>
  <header class="fixed-top">
    <div id="header" class="head1">
      <div class="d-none d-sm-none d-lg-block d-xl-block d-md-none" style="margin-left:110px">
        <div class="row">
          <div class="col-5">
            <img src="./images/logo/logo.png" height="100px" width="100px" alt="" >
          </div>
          <div class="col-7 phone" style="margin-top:16px">
            <a href="tel:+917599545497"><i class="fa fa-phone" style="font-size:24px;color:white"></i></a>
            +91 75995 45497
            <a href="mailto:info.mizutechindia@gmail.com" target="blank"><i class="fa fa-envelope"
                style="font-size:24px;color:white"></i></a>
                info@mizutechindia.com
            <a href="https://www.facebook.com/MizutechEngineersIndia" target="blank">
              <i class="fa fa-facebook" style="width:50px;font-size:24px;color:white"></i></a>
              <a href="https://www.instagram.com/mizutechindia/" target="blank">
              <i class="fa fa-instagram" style="width:50px;font-size:24px;color:white"></i></a>
              <a href="https://www.linkedin.com/company/74242661/" target="blank">
              <i class="fa fa-linkedin" style="width:50px;font-size:24px;color:white"></i></a>
              <br>
          </div>
        </div>
      </div>
    </div>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark" role="navigation" id="mainNav">
      <img src="./images/logo/logo.png" class="d-xl-none d-lg-none d-md-block d-sm-block" height="100px" width="100px"
        alt="" style="display:inline">
      <!-- <a href="index.php" style="text-decoration:none"><h2 style="color:red;">Mizutech Engineers India PVT LTD</h2></a> -->
      <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
          </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Turnkey Projects
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#084298c7">
            <li><a class="dropdown-item" style="color:white" href="mineral-water-plant.php">Mineral water Plant </a></li>
            <li><a class="dropdown-item" style="color:white" href="pulp-juice-plant.php">Pulp Juice Plant</a></li>
            <li><a class="dropdown-item" style="color:white" href="carbonated-soft-drink.php">Carbonated Soft Drink</a></li>
            <li><a class="dropdown-item" style="color:white" href="water-treatment-projects.php">Water Treatment Projects</a></li>
            <li><a class="dropdown-item" style="color:white" href="waste-water-treatment.php">Waste Water Treatment project
</a></li>
            <li><a class="dropdown-item" style="color:white" href="water-harvesting-system.php">Water Harvesting System</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item d-none d-lg-block" style="position: absolute; right: 0px">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Quick Enquiry</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quick Enquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="index.php" method="post">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="form-group">
                  <label for="query">Ask your query</label>
                  <textarea rows="4" cols="50" name="query" class="form-control" placeholder="Ask your query"
                    required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <?php
                if($sqlquery){
                  ?>
                <script>alert("Your query is submitted successfully");</script>
                <?php
                }
                ?>
              </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./images/slider/Untitled design (1).jpg" height="710" class="d-block w-100" alt="">
        <div class="carousel-caption d-block">
          <font size="40">Redefining Water Solutions</font>
          <h4>Mizutech is a leading water management and service provider company; we provide solutions to build
            relationship</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider/Untitled design.jpg" style="background-repeat: no-repeat; background-size: cover" height="710" class="d-block w-100" alt="...">
        <div class="carousel-caption d-block">
          <font size="40">Build Today for Next Generation</font>
          <h4>Mizutech is a leading water management and service provider company; we provide solutions to build
            relationship</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider/Untitled design (2).jpg" height="710" class="d-block w-100" alt="">
        <div class="carousel-caption d-block">
          <font size="40">Recycling Water Through Advance Technology</font>
          <h4>Mizutech is a leading water management and service provider company; we provide solutions to build
            relationship</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider/Untitled design (3).jpg" height="710" class="d-block w-100" alt="...">
        <div class="carousel-caption d-block">
          <font size="40">Water Smarter!</font>
          <h4>Mizutech is a leading water management and service provider company; we provide solutions to build
            relationship</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider/Untitled design (4).jpg" height="710" class="d-block w-100" alt="...">
        <div class="carousel-caption d-block">
          <font size="40">Future-Ready Water Solution</font>
          <h4>Mizutech is a leading water management and service provider company; we provide solutions to build
            relationship</h4>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br>
  <div class="row my-5">
  <div class="col-lg-5 col-md-6  col-sm-6 black-section side-space">
  <h2 style="margin-top:11px; margin-left:28px">Turnkey Projects, Solutions and Service Provider for your Industry</h2>
  </div>
  <div class="col-lg-7 col-md-6  col-sm-6 black-section side-space">
  <p style="font-weight:600; font-size:18px; margin-right:11px; text-align:justify">We in the Mizutech India works as a team to provide you best Turnkey Projects for beverages and water management solution. We are leading company with the advance technologies and having a technically strong team with more than 25 years experience </p>
  </div>
  </div>
 
  <section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body mineralwaterplant text-center">
                                    
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Mineral Water Plant</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Mineral Water Plant</h4>
                                    <p class="card-text">With systems from Mizutech India  for filling non-sparkling water, you can rely on our high quality and ideal hygienic conditions combined with maximum cost and energy efficiency. Whichever container shape you prefer - we will find the best solution for your requirements.</p>
                                    <a href="mineral-water-plant.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body pulpjuiceplant text-center">
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Pulp Juice Plant</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Pulp Juice Plant</h4>
                                    <p class="card-text">We have devised an innovative solution for juice, nectar and still drinks production that combines existing technology in an entirely new configuration to drastically reduce energy, water consumption and costs. Whether you produce juice, nectar or still drinks, we have the right solution for you.</p>
                                    <a href="pulp-juice-plant.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body carbonatedsoftdrink text-center">
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Carbonated Soft Drink</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Carbonated Soft Drink</h4>
                                    <p class="card-text">Are you trying to find the right company to produce your drinks for you? We manufacture beverages in any size can or bottle, hot-fill, cold-fill, carbonated and non-carbonated. The soft drink market is characterized by frequently changing and often short-lived trends.</p>
                                    <a href="carbonated-soft-drink.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body watertreatmentplant text-center">
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Water Treatment Plant</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Water Treatment Plant</h4>
                                    <p class="card-text">Water treatment is any process that improves the quality of water to make it appropriate for a specific end-use. The end use may be drinking, industrial water supply, irrigation, river flow maintenance, water recreation or many other uses, including being safely returned to the environment.</p>
                                    <a href="water-treatment-projects.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body wastewaterplant text-center">
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Waste Water Plant</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Waste Water Plant</h4>
                                    <p class="card-text">Wastewater is water that has been used and must be treated before it is released into another body of water, so that it does not cause further pollution of water sources. Wastewater comes from a variety of sources. Everything that you flush down your toilet or rinse down the drain is wastewater. ...</p>
                                    <a href="waste-water-treatment.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body waterharvesting text-center">
                                    <h4 class="card-title" style="background:rgba(0,0,0,0.5); margin:30px">Water Harvesting</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Water Harvesting</h4>
                                    <p class="card-text">Mizutech India  have been able to provide our clients with prompt and reliable Rain Water Harvesting Service. Delivered after precise survey of the place, our Rain Water Harvesting are offered in domestic as well as industrial sector. While offering this service, our professionals follow various steps that include analysis</p>
                                    <a href="water-harvesting-system.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
  <div class="container">
    <h1 class="text-center" style="padding: 30px">How We Work </h1>
    <div class="row" style="margin-left:172px">
      <div class="col-sm-2">
        <div class="psv1">
          <img class="rounded-circle" src="./images/howwework/istockphoto-1164704318-612x612.jpg" height="100%" width="90%"
            data-holder-rendered="true"><br><br>
          <p><b>Project Planning</b></p>
        </div>
        <div class="step-text">
          <p align="justify"> Our Project management team is well planned at working with complex timelines and
            deadlines. We ensure the process flows smoothly from project inception through final delivery</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="psv1">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div><img class="rounded-circle"
            src="./images/howwework/istockphoto-636056868-612x612.jpg" height="100%" width="90%"
            data-holder-rendered="true"><br><br>
          <p><b>Project Site Visit</b></p>
        </div>
        <div class="step-text">
          <p align="justify">Our mission is to work with competence, honesty and transparency. We visit your
            project and production site and analyze your needs, starting from your goal and its sustainability. Then we
            discuss with you the possible solutions to make your business perform in the best way.</p>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="psv1">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div><img
            class="rounded-circle" src="./images/howwework/istockphoto-846843116-612x612.jpg" height="100%" width="90%"
            data-holder-rendered="true"><br><br>
          <p><b>Design and Development</b></p>
        </div>
        <div class="step-text">
          <p align="justify">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div> Our
          engineers design and develop a tailored-made solution for your production needs and objectives. It can include
          complete lines or single machines, which can be easily integrated with your habits and daily work, making it
          more efficient and automatic</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="psv1">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div><img
            class="rounded-circle" src="./images/howwework/istockphoto-811846984-612x612.jpg" height="100%" width="90%"
            data-holder-rendered="true"><br><br>
          <p><b>Testing</b></p>
        </div>
        <div class="step-text">
          <p align="justify">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div> We test
          your machines in our production sites and verify equipment functionality with your cans/bottles. Lastly, we
          deliver and install the equipment</p>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="psv1">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div><img
            class="rounded-circle" src="./images/howwework/istockphoto-1199145131-612x612.jpg" height="100%" width="90%"
            data-holder-rendered="true"><br><br>
          <p><b>Strong Knit Service Network</b></p>
        </div>
        <div class="step-text">
          <p align="justify">
          <div class="d-xs-block d-md-none d-sm-none d-lg-none d-xl-none"><br></div>You can
          rely on us also after the installation: we have pan India existence that guarantee a fast and efficient
          after-sales, spare parts & maintenance assistance with trained personnel.</p>
        </div>
      </div>

    </div>
  </div>
  <br><br><br>
  <div class="row">
    <div class="col-lg-6" style="padding-left: 50px">
      <img src="./images/istockphoto-185122747-612x612.jpg" width="100%" alt="">
    </div>
    <div class="col-lg-6" style="background-color:#202030; color:white">
      <h1>Why would you take our services !</h1><br><br>
      <ul>
        <li>Passionate toward customer satisfaction by provide value for money product and services.</li><br>
        <li>We have PAN India Presence and strong service network</li><br>
        <li>Flexible and customized solutions thank to more than 25 years of experience</li><br>
        <li>We are honest and work tirelessly to create enduring relationship.</li><br>
        <li>We are focused for after sales services</li><br>
      </ul>
    </div>
  </div>
  <br><br><br>
  <div class="container">
    <h1>After Sales Services</h1>
    <div class="row aftersales" style="font-size:20px">
    <!-- <div class="col-lg-4">
    <img src="./images/after-sales/istockphoto-864255126-612x612.jpg" width="100%" alt="">
    </div>
    <div class="col-lg-8"> -->
      <div class="col-lg-2">
        <br><img src="./images/after-sales/consulting.png" alt="" style="margin-top:25px">
      </div>
      <div class="col-lg-10">
      <br><b>Consulting & Training</b><br>
      <p align="justify">At your side, whenever you need our advice! We aim to establish long-lasting business relationships with our customers, thanks to our Customer Service Department (performance assessment, training, safety assessment, certification updates, upgrade, overhauls).</p> 
    </div>
      <div class="col-lg-2">
        <br><img src="./images/after-sales/spare.png" alt="" style="margin-top:14px">
      </div>
      <div class="col-lg-10">
      <b>Spare Parts</b><br>
      <p align="justify">Our plants and machineries are designed to ensure the highest level of reliability and performance. To guarantee an optimal lifecycle management of all the assets, our worldwide Spare Parts Service provides options for all types of equipment, as well as upgrades for older machine versions and obsolete parts with a dedicated service. All spares are provided with outstanding level of quality and carefully checked by our Quality Control Department.</p>
      </div>
      <div class="col-lg-2">
        <img src="./images/after-sales/onsite.png" alt="" style="margin-top:42px">
      </div>
      <div class="col-lg-10">
      <b>On-site and remote assistance</b><br>
      <p align="justify">Effective interventions on site, in every market worldwide! Our Server Engineers Department provides you the best support to find and fit the solution to you specific issues (diagnostic visits, maintenance programs, emergency service, supervision, predictive maintenance). We can also assure you our best effort to keep your lines and equipments always on-line. We will stay connected with your machines and operators at any time thanks to teleservice, predictive maintenance and condition-based monitoring</p>
    <br><br>  
    </div>
    </div>
    </div>
  <!-- </div> -->
  <br><br><br>
  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark" style="color: #ad7900">
  <div class="footer">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Content -->
          <img src="./images/logo/logo.png" height="100" width="100" alt="">
          <p align="justify">Head office<br> C-240 MU-1 Greater Noida, Uttar Pradesh 201310 <br>
          Work Office: A2/126, site-V Kasna, Greater Noida(U.P.) <br>
            Mobile: <a href="tel:+917599545497" style="text-decoration:none">7599545497</a><br>
            Email: info@mizutechindia.com
          </p>
          <hr>

          <!-- Call to action -->
          <!-- Call to action -->

          <hr>
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-5 mx-auto">

          <!-- Links -->
          <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow us on</h5> -->

          <ul class="list-unstyled">
            <li>
              <img src="./images/unnamed.jpg" height="100" width="100" alt="">
            <img src="./images/images.png" height="100" width="150" style="padding-left: 10px" alt="">
            </li>
          </ul>

        </div>


        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Connect with us</h5>
          <ul class="list-unstyled">
          <li>
          <a href="https://wa.link/wa6q97" target="blank"><i style="background-color: #25d366; color: white;" class="fa fa-whatsapp"></i></a>
          </li>
          </ul>
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

          <ul class="list-unstyled">
            <li>
            <a href="https://www.facebook.com/MizutechEngineersIndia" target="blank"><i class="fa fa-facebook" style="background: #3B5998;color: white"></i></a>
              <a href="https://www.instagram.com/mizutechindia/" target="blank"><i class="fa fa-instagram" style="background-color:#df435e; color:white"></i></a>
              <a href="https://www.linkedin.com/company/74242661/"><i class="fa fa-linkedin" style="color: white; background-color:blue"></i></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="www.mizutechindia.com" style="text-decoration:none"> mizutechindia.com</a><br>
      Developed and maintained By <a href="https://www.github.com/grgauravweb" style="text-decoration:none" target="blank">Gaurav Rai</a>
    </div>
    <!-- Copyright -->
              </div>

  </footer>
  <!-- Footer -->
</body>

</html>