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
            <li><a class="dropdown-item active" style="color:white" href="waste-water-treatment.php">Waste Water Treatment project
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
<img src="./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg" width="100%" height="100%" alt="">
  <div class="row vision-value-section">
  <div class="col-lg-5 col-md-6 col-sm-6 my-5">
  <img src="./images/turnkey-projects/4 (2).jpg" width="100%" alt="" class="mx-5">
  </div>
  <div class="col-lg-7 col-md-6 col-sm-6 my-5" style="color:white;background-color:#0f314f">
  <h1 style="margin-top:50px">Waste Water Treatment project</h1>
  <p>
  Wastewater is water that has been used and must be treated before it is released into another body of water, so that it does not cause further pollution of water sources. Wastewater comes from a variety of sources. Everything that you flush down your toilet or rinse down the drain is wastewater. Rainwater and runoff, along with various pollutants, go down street gutters and eventually end up at a wastewater treatment facility. Wastewater can also come from agricultural and industrial sources. Some wastewaters are more difficult to treat than others; for example, industrial wastewater can be difficult to treat, whereas domestic wastewater is relatively easy to treat (though it is increasingly difficult to treat domestic waste, due to increased amounts of pharmaceuticals and personal care products that are found in domestic wastewater 
  </p>
    </div></div>
    <div class="container" style="font-size:20px">
<h2 style="margin-top:30px">Sewage Treatment Plant</h2>
<p>Mizutech India provides Sewage Treatment Plants that are designed and manufactured using Activated Sludge Process (ASP) technology. The water treated using our plant can also be used for flushing and washing. We also design plants using other advanced technologies such as MBBR technology, UASB technology and Sequential Batch Reactor (SBR). These technologies are discussed below:</p>
<p style="margin-top:30px"><b>MBBR technology:</b> Better performing than ASP, it needs less space and thus saves money. This technique is perfect to use where there is space constraint. The water treated using this technology can even be used for washing and gardening.
</p>
<p><b>UASB technology:</b> It is appreciated by the clients for low power consumption as compare to any other technology available in the market. Further, the Biogas generated using this technique can be used for the high capacities plant and to the run the full plant after converting it to electricity. The treated water from this plant can even be used for gardening.</p>
<p><b>Sequential Batch Reactor (SBR):</b> It helps in treating the waste water in Batches and hence it is perfect to use where the waste water generated per day is very low. The technology also helps in saving the running cost and low sludge generation. No need of separate clarifier or settling tank.</p>
<p style="margin-top:30px">We offer a huge range of Sewage Treatment Plants, which are used in the national as well as international market. These products are manufactured using latest techniques using modern machines and we offer these products in a cost effective as well as reliable manner. Our products are easily available in different specifications and we check these on the basis of different quality parameter using various quality controller. These products are available with customized services to our clients.</p>
<h2 style="margin-top:30px">Combined Sewage Cum Effluent Treatment Plants</h2>
<p>We offer a wide range of Combined Sewage cum Effluent Treatment Plants that satisfies two purposes simultaneously. These are efficiently designed to treat and manage both sewage and effluent at the same time. This plant proficiently drains out water from sewage and effluents and hence making it usable for other application such as gardening, farming and washing. Our range of combined sewage cum effluent treatment plants is available in standard specification and can also be customized to meet the varied requirements of our clients.</p>
<b style="margin-top:30px">Features:</b>
<ul>
<li>Low cost</li>
<li>Compact in size</li>
<li>Low electrical consumption</li>
</ul>
<h2 style="margin-top:30px">Integrated Sewage Treatment Plant</h2>
<p>We offer an excellent quality range of <b>Integrated Sewage Treatment Plants</b>, which are used for the treatment of both sewage water as well as solid wet waste together. These products are used as an alternative energy source and the treat water is used for different purposes such as farming, gardening, washing and flushing. Our products are available at genuine prices to our clients and these are available on the basis of latest techniques.</p>
<b style="margin-top:30px">Uses:</b>
<ul>
<li>Corporate Industries</li>
<li>Hotels & Resorts</li>
<li>Education Institutes</li>
</ul>
<h2 style="margin-top:30px">Effluent Treatment Plant</h2>
<p>Mizutech India manufacture and supply effluent treatment Plants, Sewage Treatment Plants, Common Effluent Treatment Plants & waste water treatment Plant and associated equipment and offer sophisticated and innovative solutions to purify Waste Water</p>
<p>Used all over India, our effluent treatment plants helps in solving the environmental pollution problem created by the waste material of a company without exposing the same to the environment.</p>
<p>The effluent treatment plants are designed to treat the effluent coming from different process of the plant. The treatment of different effluents varies with the type of effluent.</p>
<p>The industrial effluent treatment plants involve different stages of treatment including physio- chemical treatment and biological treatment followed by tertiary treatment. Integrated functions with simple control make the operation much easier. Our engineers can also custom design the effluent treatment plants based on the specific application requirement of the customers. Our Industrial effluent treatment plants have a compact design and can be easily installed on the site.</p>
<h2 style="margin-top:30px">Operation</h2>
<p>Our effluent treatment plant and system are based on the aerobic respiration method; it consists mainly of three stages: primary treatment, secondary bio-treatment, and tertiary treatment. The effluent water is passed through various processes such as chemical dosing, aeration, and settling. The final treatment is of filtration cum absorption, which takes place by filters. Finally, the processed water goes for advance treatment and we get usable water which can be used further for irrigation and other purposes.</p>
<b style="margin-top:30px">Effluent Treatment Plants- Applications:</b>
<ul>
<li>Plating & coating industry</li>
<li>Coolant treatment</li>
<li>Pickling industry</li>
<li>Paint booths</li>
<li>Food Industries</li>
<li>Manufacturing industry</li>
<li>Pharmaceutical industry</li>
<li>Chemical & paint manufacturing companies</li>
<li>Textile & dyes</li>
<li>Dairy industry</li>
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