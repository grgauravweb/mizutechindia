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
  <title>Waste Water Treatment project</title>
  <link rel="icon" href="./images/logo/logo.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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
      <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php">About Us </a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Turnkey Projects
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#084298c7">
            <li><a class="dropdown-item" style="color:white" href="mineral-water-plant.php">Mineral water Plant </a></li>
            <li><a class="dropdown-item" style="color:white" href="pulp-juice-plant.php">Pulp Juice Plant</a></li>
            <li><a class="dropdown-item" style="color:white" href="carbonated-soft-drink.php">Carbonated Soft Drink</a></li>
            <li><a class="dropdown-item" style="color:white" href="water-treatment-projects.php">Water Treatment Projects</a></li>
            <li><a class="dropdown-item" style="color:white" href="waste-water-treatment.php">Waste Water Treatment project
</a></li>
            <li><a class="dropdown-item active" style="color:white" href="water-harvesting-system.php">Water Harvesting System</a></li>
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
<img src="./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg" width="100%" height="100%" alt="">
  <div class="row vision-value-section">
  <div class="col-lg-5 col-md-6 col-sm-6 my-5">
  <img src="./images/turnkey-projects/2 (1).jpg" width="100%" alt="">
  </div>
  <div class="col-lg-7 col-md-6 col-sm-6 my-5" style="color:white;background-color:#0f314f">
  <h1 style="margin-top:50px">Water Harvesting System</h1><br>
  <h2>Rain Water Harvesting System</h2>
  <p>
  Owing to our wide industrial expertise, we are capable of developing finest grade Modular Rainwater Harvesting Service. With help of the innovative approach of our team members we are offering the most viable designs for collecting and storing rain water for potable applications. We are leveraging the sophisticated manufacturing technologies and utilizing the best suited inventory of raw materials to develop surface runoff harvesting and roof top rainwater harvesting systems. Designed and developed as per the set industry standards, the harvesting systems are available at a nominal price.
  </p>
  <p style="margin-top:30px"><b>Rain water Harvesting</b> can be a definite tool to win over present issue of Water scarcity.</p>
  <p><b>RAIN WATER HARVESTING</b> is a process involving collection and storage of rain water (with the help of artificially designed system) that runs off natural or man-made catchment areas e.g. roof top, compounds, rock surface or hill slopes or artificially repaired impervious/semi-pervious land surface.</p>
    </div></div>
    <div class="container" style="font-size:20px">
<p style="margin-top:30px"><b>RAIN WATER HARVESTING,</b> certainly depends various factors which contribute to the amount of rain water harvested e.g. the frequency and the quantity of rainfall, catchments characteristics, water demands and the quantum of runoff, and very importantly the volume & economics of artificial Rain water storage tanks and also underground soil strata for ground water recharge of Rain water.</p>
<h2 style="margin-top:30px">RAIN WATER HARVESTING, broadly classified as</h2>
<p><b>ROOF TOP RAIN WATER HRVESTING :</b> Which harvest the rain water fallen on the roof.</p>
<p><b>SURFACE RAIN WATER HARVESTING :</b> Which harvest the Rain water fallen on the surrounding ground surface.</p>
<p><b>FEATURES :</b> Rust proof tank, Easy to assemble, inbuilt filters for debris</p>
<p><b>APPLICATIONS :</b> Ideal for domestic and agricultural uses Owing to our vast experience in this domain, we are engaged in offering superior quality Rainwater Harvesting Systems.</p>
<b>BENEFITS :</b>
<ul>
<li>It mitigates the problems of the farmers of lowering the tube well bore again and again where ground water level frequently goes down.</li>
<li>It helps in utilizing the primary source of water and prevents the runoff from going waste.</li>
<li>It reduces flooding in urban states.</li>
<li>It improves the vegetation cover.</li>
</ul>
<div style="margin-top:30px"><b>Typical Roof Top Rainwater Harvesting System Comprises Of :</b></div>
<ul>
<li>Roof catchment</li>
<li>Gutters/Rain water conveying piping system</li>
<li>Downpipes</li>
<li>Rain water Filtration system</li>
<li>Harvested Rain water storage /recharge system such as Tanks, Tube wells, Wells, etc</li>
</ul>
<p style="margin-top:30px"><b>Roof Top Rain Water Harvesting</b></p>
<b>RAIN WATER AVAILABILITY DUE TO RAIN WATER HARVESTING</b>
<div class="table-responsive">
<table class="table" border="1px">
<thead>
<tr>
<th scope="col">Type Building</th>
<th scope="col">Terrace /Ground area</th>
<th scope="col">Average Annual Rain fall</th>
<th scope="col">Rain water availability /year (approx...)</th>
<th scope="col">Equivalent water tankers</th>
</tr>
</thead>
<tbody>
<tr>
<td>Individual House roof top</td>
<td>1000 Sq. Ft</td>
<td>700 mm</td>
<td>60 m<sup>3</sup></td>
<td>10</td>
</tr>
<tr>
<td>Multi storied Building roof top</td>
<td>5000 Sq.Ft</td>
<td>700 mm</td>
<td>300 m<sup>3</sup></td>
<td>30</td>
</tr>
<tr>
<td>Industrial Shed</td>
<td>20000 Sq.Ft</td>
<td>700 mm</td>
<td>1260 m<sup>3</sup></td>
<td>120</td>
</tr>
</tbody>
</table>
</div>
<b>( Volume of Water tanker considered is 10000 Litres )</b>
<div style="margin-top:30px"><b>BENEFICIARIES OF RAIN WATER HARVESTING :</b></div>
<ul>
<li>Individual Houses</li>
<li>Residential Townships</li>
<li>Industries</li>
<li>School & Educational Institutes</li>
<li>Commercial Establishments, IT parks, Offices</li>
<li>Practically all places where Rain is falling on Roof or ground</li>
</ul>
<div style="margin-top:30px"><b>RAIN WATER HARVESTING FILTERS & SYSTEMS</b></div>
<p>We,being an expert in Water treatment, understand the importance of Water filtration. We have engineered & developed various standalone Filtration units for domestic & Industrial applications with First Flush arrangements.</p>
<div class="table-responsive">
<table style="margin-top:30px" class="table" border="1px">
<thead>
<th>Rain water Filter Models</th>
<th>Application</th>
<th>Approx. Terrace area caters</th>
</thead>
<tbody>
<tr>
<td>RainWortH - RF</td>
<td>Roof top application</td>
<td>500-1000 SQ.FT</td>
</tr>
<tr>
<td>RainWortH - OBO</td>
<td>Roof top application</td>
<td>8000-10000 SQ.FT</td>
</tr>
<tr>
<td>Rain TAP</td>
<td>Roof top application</td>
<td>500-1000 SQ.FT</td>
</tr>
<tr>
<td>RainWortH – GRD</td>
<td>Surface RWH application</td>
<td>8000-10000 SQ.FT</td>
</tr>
</tbody>
</table>
</div>
<b>Note : Quantities of RAIN WATER HARVESTING FILTERS will depend upon Rainfall data. Please consult us before ordering.</b><br>
<b>To make this noble concept of RAIN WATER HARVESTING successful we offer our expert services of :</b>
<ul>
<li>Detailed site survey, consultancy, planning and preparation of project feasibility report.</li>
<li>Turnkey project implementation for existing buildings.</li>
<li>Supply of Rain water harvesting filters as per your requirements.</li>
</ul>
</div>
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
          <p>Head office<br> C-240 MU-1 Greater Noida, Uttar Pradesh 201310  <br>
            Mobile: <a href="tel:+917599545497" style="text-decoration:none">7599545497</a><br>
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
          <a href="https://wa.link/wa6q97" target="blank"><i style="background-color: #25d366; color: white;" class="fa fa-whatsapp"></i></a>
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
      <a href="www.mizutechindia.com" style="text-decoration:none"> mizutechindia.com</a><br>
      Developed and maintained By <a href="https://www.github.com/grgauravweb" style="text-decoration:none" target="blank">Gaurav Rai</a>
    </div>
    <!-- Copyright -->
              </div>

  </footer>
  <!-- Footer -->
</body>

</html>