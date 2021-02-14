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
  <title>about</title>
  <link rel="icon" href="./images/logo/logo.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="./js/nav.js"></script>
  <link rel="stylesheet" href="./css/style.css">
    <style>
    body{
    font-family: 'Baloo Bhai 2', cursive;
  }
  .fixed-top{
    background-color: white;
  }
  .phone{
      color:white;
      font-weight: 600;
    }
    .mail{
      color:white;
      font-weight: 600;
    }
    .fa {
  padding: 20px;
  font-size: 36px;
  width: 72px;
  text-align: center;
  text-decoration: none;
}
footer{
  background-image: url("./images/istockphoto-181987625-612x612.jpg");
  background-repeat: no-repeat;
      background-size: cover;
}
.footer{
  background-color:rgb(232 255 234 / 91%);
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.row{
  margin-right: 0px;
}
header{
  background-image: url("./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg");
  background-repeat: no-repeat;
      background-size: cover;
      background-color:#000d1785;
}
.head1{
  background-color:#000d1785;
}
    </style>
</head>

<body>
<header class="fixed-top">
<div id="head1" class="head1" style="">
    <div id="header">
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
              <i class="fa fa-facebook" style="width:50px;font-size:24px;color:white; background-color:#3b599800"></i></a>
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
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="about.php">About Us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Quick Enquiry</a>
          </li>
        </ul>
      </div>
    </nav>
    </div>
    </div>
  </header>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quick Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<img src="./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg" width="100%" height="100%" alt="">
  <div class="row vision-value-section">
  <div class="col-lg-5 col-md-6 col-sm-6 my-5">
  <img src="./images/about/about us.jpg" width="100%" alt="">
  </div>
  <div class="col-lg-7 col-md-6  col-sm-6 my-5" style="background-color:#35718e; color:white">
  <p><br><br>
  MIZUTECH is dedicated towards the customer satisfaction and emphasize on providing the best water and waste water management solutions and services. We are counted as the most reliable and significant manufacturer, distributor, exporter and service provider in the arena of Mineral Water Plant, Carbonated Soft Drink Plant, Pulp juice line apart from this turnkey projects we are also in the solution of water and waste water treatment project with advance technology . 
  </p>
    <p>All the products are developed by the well-trained experts and professionals at our firm using premium quality raw materials and the latest technologies. The quality team at our organization always keeps a check on all the output products so as to ensure that these products follow the industrial norms and standards. Customer satisfaction is our first motive and we make consistent efforts in order to ensure that our customers are satisfied with all our products and services. Our products are guaranteed to serve for a long span of time and capable for resolving your water related issues. Our products are highly appreciated for their reliable performance and efficient services. We also provide customization for the specific client requirements.
  </p></div></div>
<br><br>
  <div class="row vision-value-section">
  <div class="col-lg-6 col-md-6  col-sm-6 my-2" style="background-color:#3b430a; font-size:22px; color:white">
  <br><br>
  <h2 class="mx-5">Industry Partnership</h2>
  <p class=" my-2 mx-5">We have dedicated our focus on building key relationships and proudly offer full support through our vast network of water and waste water management professionals. Our network is reliable and a strong contributing factor that separates us from other. We have strived hard to build relationships in every area so that we can offer you guidance and support in any area of the Water and waste water management </p><br><br>
  </div>
  <div class="col-lg-6 col-md-6  col-sm-6 my-2">
  <img src="./images/about/industrial parternership.jpg" width="100%" alt="">
  </div>
  <div class="row vision-value-section my-5 mx-4">
  <div class="col-lg-5 col-md-6  col-sm-6 black-section side-space">
  <img src="./images/about/Mission.jpg" width="100%" alt="">
  </div>
  <div class="col-lg-7 col-md-6  col-sm-6 black-section side-space" style="background-color: #2d2d2d; color: #fff">
  <h2 class="container">Our Mission</h2>
  <p class="container my-2">To provide water and waste water solution to our client by using advance technology.
  </p>
  <p class="container my-2">Our mission is to provide solutions for water and waste water management along with packaged beverages solutions by using advance technology and at the time we value the money of our client.
  </p><br>
  <h2 class="container">Our Vision</h2>
  <p class="container">To become one of the of the world’s leading companies, bringing innovation and advance technology to improve the way for water management 
</p></div>
</div>
<div class="row vision-value-section mx-4">
<div class="col-lg-7 col-md-6  col-sm-6 grey-section side-space" style="background-color: #f2f2f2">
<h2 class="container">Our Core Values</h2>
<p class="container my-2"><b>Value People:</b>  We will treat all people with courtesy, dignity and respect.</p>
<p class="container my-2"><b>Customer Focus:</b> The customer is the BOSS, if we don’t support the customer directly, we serve those that do. Customer service trumps everything!</p>
<p class="container my-2"><b>Integrity:</b> We will ensure honesty and fairness in all our actions; we will always do the right things.</p>
<p class="container my-2"><b>Constant Improvement:</b> Good enough never is. We drive change with vigor. We celebrate our successes but are relentless dissatisfied. We have a very strong work ethic.</p>
<p class="container my-2"><b>Professionalism:</b> We conduct our self appropriately at all times, we keep ourself competent, skilled and prepared, remain calm when situation is escalate & communicate consistently in the proper tone.</p>
</div>
<div class="col-lg-5 col-md-6  col-sm-6 black-section side-space">
<img src="./images/about/Core Value.jpg" width="100%" alt="">
</div>
</div><br><br>

<div class="row vision-value-section">
  <div class="col-lg-6 col-md-6  col-sm-6 my-5">
  <img src="./images/about/Our Team.jpg" width="100%" alt="">
  </div>
  <div class="col-lg-6 col-md-6  col-sm-6 my-5" style="background-color:#202030; color:white">
  <br><br>
  <h2 class="container" style="margin-left:15px">Our Team</h2>
<p class="mx-5">We can undoubtedly claim our employees to be the core components for the success of this organization. They are a skillful and diligent team who work hard to meet the set target and fulfill complete customer satisfaction. This team comprises of Chemical engineers, Mechanical engineer Quality inspectors, Research & Development personnel, Sales & Marketing executive and other skilled workers.</p>
<p class="mx-5">In order to provide accurate solutions, the management encourage periodical meeting with the customer to understand their exact requirements. Having come from exceptional background and good qualifications, the team has a complete comprehension of the changes and advancements in today’s market trends</p></div></div>

  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark" style="color: #ad7900; width:100%">
  <div class="footer">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Content -->
          <img src="./images/logo/logo.png" height="100" width="100" alt="">
          <p>Head office<br> C-240 MU-1 Greater Noida, Uttar Pradesh 201310  <br>
            Mobile: <a href="tel:+917599545497">7599545497</a><br>
            Email: info@mizutechindia.com 
              akhilesh@mizutechindia.com
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
          <a href="https://wa.link/wa6q97" target="blank"><i style="background-color: #25d366; margin-left:37px; color: white;" class="fa fa-whatsapp"></i></a>
          </li>
          </ul>
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

          <ul class="list-unstyled">
            <li>
            <a href="https://www.facebook.com/MizutechEngineersIndia" target="blank"><i class="fa fa-facebook"></i></a>
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
      <a href="#"> mizutechindia.com</a><br>
      Developed and maintained By <a href="https://www.github.com/grgauravweb" target="blank">Gaurav Rai</a>
    </div>
    <!-- Copyright -->
              </div>

  </footer>
  <!-- Footer -->
</body>

</html>