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
  <title>Mineral Water Plant</title>
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
            <li><a class="dropdown-item active" style="color:white" href="mineral-water-plant.php">Mineral water Plant </a></li>
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
<img src="./images/about/WhatsApp Image 2020-12-30 at 12.24.55 PM.jpeg" width="100%" height="100%" alt="">
  <div class="row vision-value-section">
  <div class="col-lg-5 col-md-6  col-sm-6 my-5">
  <img src="./images/turnkey-projects/Mineral water plant.jpg" width="100%" alt="" class="">
  </div>
  <div class="col-lg-7 col-md-6  col-sm-6 my-5" style="background-color:#1b1e43;color:white">
  <h1 style="margin-top:50px">Mineral Water Plant</h1>
  <p>
  With systems from Mizutech India for filling non-sparkling water, you can rely on our high quality and ideal hygienic conditions combined with maximum cost and energy efficiency. Whichever container shape you prefer - we will find the best solution for your requirements. All of our lines are equipped with technologically sophisticated single machines that cover each phase of the production process: from Water Treatment, Blower, filling, labeling, packing, and palletizing up to including inspection and complete sanitizing. These machines are available in a wide variety of capacities to optimally meet your individual needs.
  </p>
    <p>With a constant endeavor to improve the water being supplied across different regions, we also help set up turnkey mineral water projects. Great attention is paid at every stage of the project and to every component required while setting up mineral water plants for clients.
    </p>
    <p>As people become more health conscious, the demand for bottled water is increasing at a rapid rate. Bottled water provides easy transportability and assured water quality.</p>
    <p>With our several years of experience in the Water Treatment Field, we have developed comprehensive, economically viable packages, such that the capital outlay is optimized. Our packages are offered in modules so that they can be upgraded at a later date as the demand increases.</p>
    <p>Water as it occurs in nature is very “pure”, and whatever may be the source, always contains impurities either in solution or in suspension. The determination of these impurities makes analysis of water necessary and removal and control of these impurities make water treatment essential.</p>
    </div></div>
    <div class="container" style="font-size:20px">
    <h2>The major impurities of waters can be classified in three main groups:</h2>
    <ul style="font-size:20px">
    <li>Non-ionic & undissolved physical impurities. [Turbidity, Odour, Colour etc]</li>
    <li>Ionic and dissolved impurities [Ca, Mg, Na, So4, Cl, iron etc]</li>
    <li>Microbiological impurities [ Bacteria, Virus, Pathogens etc]</li>
    </ul>
    <p style="margin-top:30px; font-size:20px">There are various processes employed to purify the water and various combinations of the processes are incorporated to ensure that final composition of the product confirms to the most stringent norms.</p>
    <h2 style="margin-top:30px;">Typically a Mineral water Plant may consist of:</h2>
    <ul>
    <li>Water Treatment Plant</li>
    <li>Packaging Plant</li>
    </ul>
    <p style="margin-top:20px">The Water Treatment Plant consists of One or All oft the below mentioned pocess:</p>
    <h2 style="margin-top:30px">Chlorine/Hypochlorite Dosing System</h2>
    <p>Chlorine/Hypo chlorite dosing system is done in the raw water for disinfection / oxidation of iron and manganese (if present) in the water before filtration. About 3-4 ppm of sodium hypo chlorite solution is dosed in raw water storage tank, which reacts with water to form hypo chlorite acids which acts as disinfecting agent. A LDPE chemical preparation tank with an electronic diaphragm type dosing pump is provided for this</p>
    <h2 style="margin-top:30px">Raw Water Storage Tank</h2>
    Raw water, after chlorination is required to be stored to achieve a detention time as <br>
    per process <br>
    Pressure Sand Filter <br>
    Activated Carbon Filter <br>
    <h2 style="margin-top:30px">Antiscalant Dosing System</h2>
    <p>The hardness salts of calcium & magnesium are likely to be precipitated if concentration exceeds its solubility limit & it may scale the membranes resulting in poor treated water quality from RO System. To prevent this Antiscalant dosing (scale inhibitor) system is provided. The dosage rate is 4-5 ppm. A LDPE chemical preparation tank with an electronic diaphragm type dosing pump is provided for this</p>
    <h2 style="margin-top:30px">Micron Filters</h2>
    Micron Filtration is achieved by a series of filtration with the 20/10 Micron, 5 Micron, and 1 Micron Cartridge Filters. This is a Consumable item and should replaced periodically <br>
    Reverse Osmosis System <br>
    Ultra Violet Sterilizer
    <h2 style="margin-top:30px">OZONE GENERATOR</h2>
    <p>Though RO System rejects all the micro – organisms like bacteria & virus; it may redevelop in packed bottles over a period of time. Hence, it is necessary to disinfect RO Product water prior to bottling. In the Ozone Generator, Ozone is formed by energetic excitation of molecular oxygen, causing some of it to disassociate into oxygen atoms, which can recombine with oxygen. The most practical way to do this in an ozone generator is via a method called "silent-arc" or "corona" or "brush" discharge. The discharge occurs when charged electrons flow through a gas containing oxygen.</p>
    <p>Ozone is used in water treatment for its oxidative qualities. Ozone oxidizes both organic and inorganic substances; removes unwanted taste, odor and color; and provide effective disinfection. Ozone is extremely efficient as a bactericide, fungicide and virucide, killing even chlorine-resistant Cryptosporidium. Another benefit is that ozone does not lead to the formation of trihalomethanes (THMs), which are formed when chlorine is added to raw water containing humic materials. Once a THM is formed, it is difficult to oxidize, even with ozone.</p>
    <h2 style="margin-top:30px">Ozone Contact/ Recirculating Tank</h2>
    <p>By industry standards, tall-tower diffusion is the most widely used contacting method. It introduces the ozone into the bottom of a column of water, or contact tank. The incoming (raw) water enters the top of the contact tank and leaves by the bottom.</p>
    <p>The gas is mixed in the incoming water by Venturi injection process, which uses an ejector where the Water is channeled through a short tube with a constriction in the middle which causes an increase in the velocity of the water flow and a corresponding decrease in the fluid pressure. The resulting suction draws ozone into the flow stream.</p>
    <p>The Packaging unit consists of One or All oft the below mentioned process:</p>
    <p><b>Bottle Manufacturing by PET Blowing Machine: -</b>For manufacturing of PET Bottles for Different sizes and available in Semi and Automatic Operation up to 3600 Bottles per hour.
</p>
<p><b>Rinsing - Filling – Capping – Sealing Machine:- </b>The bottles are fed into the machine which automatically rinses, fills and screws the cap on it. Caps are stamped with the date of manufacture and expiry before being put into the hopper for screwing on to the bottle.
</p>
<p><b>Labeling: </b>In this section the labels and the neck sleeve are to be manually put on the bottles which will then pass through the shrink tunnels and onto packing conveyer.
</p>
<p><b>Final Packing: </b>This could be in cartons - done manually - and no machines have been provided for it.</p>
<p>These Packing Machines come in both versions: Fully Automatic as well as Semi Automatic.</p>
<p>Fully Automatic Machines are with in feed Air Conveyor which gives higher production rate with no change parts for different sizes of bottles. Such machines are Mechanical operated with Cam Drive and pneumatic operation for accuracy of Washing and Filling. </p>
    <p>Semi Automatic Machines are with Manual washing with Turn Tables and rest activity of Filling and Capping are fully automatic operation. Both options have Shrink Tunnel for labeling application.</p>
    <p>Mizutech offers Complete Turnkey Plants as per the Customer's Requirements. We have Affiliations with leading Machinery manufacturers and have executed such Projects worldwide. Right from piping and valves to pumps and other necessary components, we supply every single thing while setting up of mineral water projects. Our technical team fully educates the client about the operations of the project down to every detail. We extend complete assistance in setting up the mineral water plant and training the manpower to ensure hassle-free running of the project. From designing to engineering, manufacturing till trial production, we stand by our clients as a strong pillar.</p>
    <p>From technical support for construction of factory space to complete support and guidance for licensing and documentation, we take complete responsibility for installation of the mineral water plants and successful running of the mineral water project.</p>
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