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
  <title>Water Treatment Projects </title>
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
            <li><a class="dropdown-item active" style="color:white" href="water-treatment-projects.php">Water Treatment Projects</a></li>
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
<img src="./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg" width="100%" height="100%" alt="">
  <div class="row vision-value-section">
  <div class="col-lg-5 col-md-6 col-sm-6 my-5">
  <img src="./images/turnkey-projects/4.png" width="100%" alt="">
  </div>
  <div class="col-lg-7 col-md-6 col-sm-6 my-5" style="color:white;background-color:#0f314f">
  <h1 style="margin-top:50px">Water Treatment Projects</h1>
  <p>
  Water treatment is any process that improves the quality of water to make it appropriate for a specific end-use. The end use may be drinking, industrial water supply, irrigation, river flow maintenance, water recreation or many other uses, including being safely returned to the environment. Water treatment removes contaminants and undesirable components, or reduces their concentration so that the water becomes fit for its desired end-use.
  </p>
      </div></div>
    <div class="container" style="font-size:20px">
     
Some Major Treatment use for water treatment is:
<ul>
<li>Ion Exchange Method</li>
<li>Filtration Method</li>
<li>Membrane Technology</li>
</ul>
<h2 style="margin-top:30px">Ion Exchange Methods</h2>
<p>All natural waters contain, in various concentrations, dissolved salts which dissociate in water to form charged ions. Positively charged ions are called cations; negatively charged ions are called anions. Ionic impurities can seriously affect the reliability and operating efficiency of a boiler or process system. Overheating caused by the buildup of scale or deposits formed by these impurities can lead to catastrophic tube failures, costly production losses, and unscheduled downtime. Hardness ions, such as calcium and magnesium, must be removed from the water supply before it can be used as boiler feedwater. For high-pressure boiler feedwater systems and many process systems, nearly complete removal of all ions, including carbon dioxide and silica, is required. Ion exchange systems are used for efficient removal of dissolved ions from water.</p>
    <p>Ion exchangers exchange one ion for another, hold it temporarily, and then release it to a regenerant solution. In an ion exchange system, undesirable ions in the water supply are replaced with more acceptable ions. For example, in a sodium zeolite softener, scale-forming calcium and magnesium ions are replaced with sodium ions.</p>
    <h2 style="margin-top:30px">Equipment for water treatment using Ion-Exchange Method</h2>
    <ul>
    <li>Softener</li>
    <li>Demineralization</li>
    <li>Dealikalization</li>
    <li>Deionization</li>
    <li>Iron Removal</li>
    </ul>
    <h2 style="margin-top:30px">Filtration Method</h2>
    <p>Filtration is a process that removes particles from suspension in water. Removal takes place by a number of mechanisms that include straining, flocculation, sedimentation and surface capture. Filters can be categorised by the main method of capture, i.e. exclusion of particles at the surface of the filter media i.e. straining, or deposition within the media i.e. in-depth filtration.</p>
    <p>Filters, as commonly understood in water treatment generally consist of a medium within which it is intended most of the particles in the water will be captured. Such filters might be manufactured as disposable cartridge filters, which can be suitable for domestic (i.e. point-of-use treatment) and small-scale industrial applications. Larger forms of cartridge filters exist which can be cleaned. One version is precoat filtration in which a porous support surface is given a sacrificial coating of diatomaceous earth, or other suitable material, each time the filter has been cleaned. Additionally, a small amount of the diatomaceous earth is applied continuously during filtration. However, in most cases, filters used in municipal water treatment contain sand or another appropriate granular material (e.g. anthracite, crushed glass or other ceramic material, or another relatively inert mineral) as the filter medium. Filtration using such filters is often referred to as in-depth granular media filtration.</p>
    <p>Granular media filters are used in either of two distinct ways which are commonly called slow-sand filtration and rapid gravity or pressure filtration. When the filters are used as the final means of particle removal from the water, then the filters may need to be preceded by another stage of solid-liquid separation (clarification) such as sedimentation (Sedimentation Processes), dissolved-air flotation  (Flotation Processes) or possibly a preliminary stage of filtration.</p>
    <p>Other processes take place in vessels similar to those used for granular media filtration, and in some respects the processes do have similarities with filtration but filtration is not their sole or primary purpose. Therefore, such processes are not considered further in this article. Examples include vessels filled with granular activated carbon for removal of dissolved organic substances, and vessels filled with ion exchange resin for removal of inorganic and organic ions. There are applications of filters that whilst filtration (removal of particles) does take place a secondary process is intended to also occur, e.g. iron and manganese removal, and arsenic removal</p>
    <h2 style="margin-top:30px">Equipment Using Filtration Method</h2>
<li>Multi Grade Filter</li>
<li>Activated Carbon Filter</li> 
<li>Side Stream Filter </li>
And many more …………………..
<h2 style="margin-top:30px">Membrane Technology</h2>
<p>Historically cloth has been used to filter water. In microstraining the  water is filtered through fabric made from finely woven wire. In both these cases the cloth or fabric is a kind of membrane, albeit a coarse one. Modern technology allows manufacture of membranes from synthetic materials, to be less than about 1mm thick and be semi-permeable.  Being semi-permeable means that the membrane is selective in what submicron-size particles can and cannot pass through it that is in the feed stream. During operation, permeable components in the water pass through the membrane with the water whilst impermeable submicron-size components are retained on the feed side. Consequently, the product stream is relatively free of the impermeable components and the waste stream is rich in impermeable components. Flow of water through such a semi-permeable membrane is achieved by pressure, usually produced by pumping.</p>
<p>There are four categories of membranes loosely defined by the types of materials rejected, operating pressure and nominal pore size. The categorisation of pore size is approximate since, for example a high-end UF membrane can have similar permeability to a low-end NF membrane:</p>    
<ul>
<li><b>Microfiltration (MF)</b>  - approx 0.1 µm pores: impermeable to particles, algae, animalcules and bacteria</li>
<li><b>Ultrafiltration (UF)</b> – approx 0.01 µm pores: impermeable to small colloids and viruses</li>
<li><b>Nanofiltration (NF)</b> – approx 0.001 µm pores: impermeable to dissolved organic matter (DOM) and divalent ions</li>
<li><b>Reverse osmosis (RO)</b> – effectively non-porous: impermeable to monovalent ions</li>
</ul>
<p>The predominant mechanism in MF and UF is straining, or simple size exclusion. In NF and RO separation of dissolved species involves mass transfer, a process of diffusion that depends on concentration, pressure and rate of flow through the membrane (flux).  Consequently, membrane filtration usually refers to MF and UF but not NF and RO, whilst NF is usually considered to be a form of RO.</p>
<p>The thickness of membranes means that they have to be formatted in a way that provides structural strength, so they will not collapse because of the pressure difference across them, provide a large area for filtration but are compact and can be cleaned effectively. They are generally structured as thin tubes (hollow fibres) or as a coiled sheet. A coil is a sandwich of the semi-permeable membrane, a separating mesh, a thin sheet of impermeable material and a second layer of thin mesh. The layers of mesh provide the channels for flow to the inlet and from the outlet side of the membrane.</p>
<p>It is usual to include a preliminary stage of treatment before membrane filtration to protect the membrane from being fouled too rapidly by excluded material, although there are also ways to operate membrane filters to slow the rate of fouling of the membrane before having to apply a cleaning process. The routine, and frequent, cleaning process is flushing to remove the accumulated detritus on the feed side. However, over time there is a slow loss in membrane performance that can only be recovered by chemical cleaning.</p>
<p>Membrane filtration (MF, UF and low end NF) have become relatively common in potable water treatment, such as for removal of colour from otherwise relatively good quality water so avoiding complexities associated with coagulation, and for reliable exclusion of Cryptosporidium.</p>
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