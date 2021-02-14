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
  <title>Products</title>
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
/* .fa-whatsapp{
  position:fixed;
} */
.row{
  margin-right: 0px;
}
.card-title{
  color: white!important;
  font-size:33px;
}
.fillingmachine{
  background-image: url("./images/products/fillingmachine.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.jarfillingmachine{
  background-image: url("./images/products/jarfillingmachine.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.industrialreverseosmosis{
  background-image: url("./images/products/industrialreverseosmosis.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.multigradefilter{
  background-image: url("./images/products/multigradefilter.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.activatedcarbonfilters{
  background-image: url("./images/products/activatedcarbonfilters.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.ironremovalsystem{
  background-image: url("./images/products/ironremovalsystem.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.watersoftenerplants{
  background-image: url("./images/products/watersoftenerplants.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.demineraliserplants{
  background-image: url("./images/products/demineraliserplants.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.sewagetreatmentplant{
  background-image: url("./images/products/sewagetreatmentplant.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.packagedsewagetreatmentplant{
  background-image: url("./images/products/packagedsewagetreatmentplant.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.etp{
  background-image: url("./images/products/etp.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.zld{
  background-image: url("./images/products/zld.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
}
.petblowingmachine {
      background-image: url("./images/products/petblowingmachine.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 348px;
    }
    .card-button{
      margin:111px;
      margin-top:176px;
    }
    .card-title{
      background:rgba(0,0,0,0.5);
      margin:30px;
      margin-top:5px;
    }
    ul{
      list-style-type:disc;
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
            <a class="nav-link active" href="product.php">Products</a>
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
  <div class="container">
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card petblowingmachine" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Pet Blowing Machine</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#petblowingmachine">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card fillingmachine" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Filling Machine</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#fillingmachine">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card jarfillingmachine" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Jar Filling Machines</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#jarfillingmachine">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card industrialreverseosmosis" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Industrial Reverse Osmosis</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#industrialreverseosmosis">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card multigradefilter" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Multi Grade Filter</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#multigradefilter">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card activatedcarbonfilters" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Activated Carbon Filter</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#activatedcarbonfilters">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card ironremovalsystem" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Iron Removal System</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#ironremovalsystem">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card watersoftenerplants" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Water Softener Plants</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#watersoftenerplants">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card demineraliserplants" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Demineraliser Plants</h5>
    <button type="button" class="btn btn-primary card-button" data-bs-toggle="modal" data-bs-target="#demineraliserplants">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card sewagetreatmentplant" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">Sewage Treatment Plant</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#sewagetreatmentplant">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card packagedsewagetreatmentplant" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">PACKAGED SEWAGE TREATMENT PLANT</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#packagedsewagetreatmentplant">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card etp" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">EFFLUENT TREATMENT PLANT</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#etp">
  Read Description
</button>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card zld" style="height:348px">
  <div class="card-body">
    <h5 class="card-title">ZERO LIQUID DISCHARGE</h5>
    <button type="button" class="btn btn-primary card-button" style="margin-top:137px" data-bs-toggle="modal" data-bs-target="#zld">
  Read Description
</button>
  </div>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="zld" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ZERO LIQUID DISCHARGE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Water is a scarce resource and due to Urbanization and Globalization water usage will increase in the coming years. Industries like power, oil, and gas, pharmaceuticals, and chemicals generate a large volume of wastewater which contains solid waste, organic waste, toxic and non-toxic chemicals which further affects the environment. In fact, many government and industries have come up with initiatives to reduce water waste by installing ZLD, which in turn will reduce water wastage, and help them attain a sustainable environment.</p>
      <p>The key driver for zero liquid discharge is a growing concern about the impact of wastewater discharge on the environment. Such concern is resulting in increased regulation and limitation of wastewater discharges. Organizations in India are targeting ZLD for their waste because they can sell the solids that are produced or reuse as a part of the industrial process. For example, salt is the by-product we get at the last stage of ZLD. This salt can be used in the textile process.</p>
      <p>Zero liquid discharge is an advanced water treatment process which purifies and recycles the wastewater at the end of the industrial process with zero liquid waste at the end. Zero liquid discharge at Mizutech India  is achieved in the most energy efficient method as it saves around 80% of the energy compared to the conventional ZLD techniques used by other companies. The reason why we are so efficient in this process is our patented polymeric film technology which we are using in Mechanical vapour recompression evaporator (MVRE).</p>
      <b>Features of ZLD system are</b>
      <ul>
      <li>Saves up to 80% energy compared to other ZLD technologies.</li>
      <li>Approximate 95% of liquid can be recovered out of the liquid waste fed to the system for treatment.</li>
      <li>Treat and retrieve valuable by-products from your waste (i.e. salts and brines).</li>
      <li>Produce a dry solid cake for disposal.</li>
      </ul>
      <ol>
      <li><b>Mechanical Vapour Recompression Evaporator (MVRE)</b>
      <p>MVRE is an energy recovery evaporator which compresses a low-pressure vapour and produces a low volume of vapour with high pressure and temperature. In MVRE influent is heated with steam and the vapour produced are compressed and sent to a heat exchanger where it gets condensed and we get pure water at the outlet. Generally, MVRE is used before MEE to reduce the TDS concentration of influent. This system is available in polymeric film technology. After RO effluent is fed into MVRE to remove high volatile compounds which were not removed in the previous process. In this process water recovered is approximately 80%.</p>
      <br><b>MVRE is available in polymeric film technology.</b>
      </li>
      <li><b>Multi Effect Evaporator (MEE)</b>
      <p>In MEE sequences of vessels are used. Here water is boiled in the vessels, each held at a lower pressure than the last, because the boiling temperature of the water decreases as pressure decreases the vapour boiled off in one vessel can be used to heat the next, and only the first vessel (at the highest pressure) requires an external source of heat. Effluent fed into MEE is of a kind which has very high TDS. Water recovery in this process is around 95%.</p>
      </li>
      </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="etp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EFFLUENT TREATMENT PLANT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Effluent is generated in many manufacturing industries like textile, pharmaceuticals and chemicals, tanneries etc. Contaminated water cannot be released without treatment as it contains toxic and non-toxic chemicals. Releasing it may cause contamination of the existing pure water and will affect the environment. As a result ETP’s are installed in most manufacturing industries.</p>
      <p>The Effluent treatment plants (ETP) are used for the removal of high amounts of organic compounds, debris, dirt, grit, pollution, toxic, non-toxic materials and polymers etc. from industrial effluent. The ETP plants use evaporation and drying methods and other auxiliary techniques such as centrifuging, filtration, incineration for chemical processing and effluent treatment.</p>
      <br>
      <b>ETP Plant Operation</b>
      <ol>
      <li>Screen Chamber:-</li>
      <ul>
      <li>This chamber removes relatively large solid to avoid abrasion of mechanical equipment and clogging of hydraulic system.</li>
      </ul>
      <li>Collection Tank:-</li>
      <ul>
      <li>The collection tank collects the effluent water from the screening chamber, stores and then pumps it to the equalization tank.</li>
      </ul>
      <li>Equalization Tank:-</li>
      <ul>
      <li>The effluents do not have similar concentration at all the time; the pH will vary time to time.</li>
      <li>Effluents are stored for up to 8 to 12 hours in an equalization tank resulting in the homogenous mixing of effluents and helping in neutralization.</li>
      <li>Continuous mixing also eliminates settling of solids within the equalization tank.</li>
      <li>Reduces SS, TSS.</li>
      </ul>
      <li>Flash mixer:- Coagulants are added to the effluents:</li>
      <ul>
      <li><li>Lime:(800-1000 ppm) To correct the pH upto8-9</li>
      <li>Alum: (200-300 ppm) To remove colour</li>
      <li>Poly electrolyte : ( 0.2 ppm) to settle the suspended matters and reduce SS, TSS.</li>
      </ul>
      <p>The addition of the above chemicals by efficient rapid mixing facilitates homogeneous combination of flocculates to produce micro flocs.</p>
      <li>Clarriflocculator:-</li>
      <ul>
      <li>In the clarriflocculator the water is circulated continuously by a stirrer.</li>
      <li>Flocculation provides slow mixing that leads to the formation of macro flocs, which then settles in the clarifier zone.</li>
      <li>Overflowing water goes out to the aeration tank.</li>
      <li>The solid particles settle down, and are collected separately; this reduces SS, TSS.</li>
      <li>The settled solids i.e. primary sludge is pumped into sludge drying beds.</li>
      </ul>
      <li>Aeration Tank:-</li>
      <ul>
      <li>The effluent after clarification flows to an aeration tank for aerobic treatment.</li>
      <li>This tank is equipped with air blowers or diffusers using which air is passed through the tank.</li>
      <li>This air is required to maintain the desired dissolved oxygen (DO) level required for bacteria to grow and remove BOD and COD by breaking down the matter.</li>
      <li>BOD and COD values of effluent are reduced up to 90%.</li>
      </ul>
      <li>Secondary Clarifier:-</li>
      <ul>
      <li>The overflow from aeration tank is led into the secondary clarifier where solid liquid separation takes place.</li>
      <li>The settled solids in secondary clarifier are called biological sludge, a part of which is recycled back into the aeration tank to maintain the desired MLSS level and remaining sludge is conveyed to sludge collection tank for further treatment.</li>
      <li>The outlet water quality is checked if it’s within the accepted.</li>
      <li>The treated water is disposed through pipelines.</li>
      </ul>
      <li>Sludge Thickener:-</li>
      <ul>
      <li>The inlet sludge consists of 60% water + 40% solids.</li>
      <li>The effluent is passed through a centrifuge.</li>
      <li>Due to centrifugal action, the solids and liquids are separated.</li>
      <li>The sludge thickener reduces the water content in the effluent to 40% water + 60% solids.</li>
      <li>The effluent is then reprocessed and the sludge is collected at the bottom.</li>
      </ul>
      <li>Drying Beds:-</li>
      <ul>
      <li>Primary and secondary sludge is dried on the drying beds to further reduce the water content.</li>
      </ul>
      </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="packagedsewagetreatmentplant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PACKAGED SEWAGE TREATMENT PLANT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Packaged Sewage Treatment Plant (PSTP) is housed in specially designed and highly durable FRP tank. These tanks are compact which can be utilized in a decentralized manner at any location, either it’s underground or above the ground.</p>
      <p>The Packaged STP is designed to bring the treated sewage parameters (BOD, COD, TSS, TN etc.) below the permissible limit which is stipulated by the Pollution Control Board. MBBR technology is used in this system.</p>
      <b>PROCESS DESCRIPTION OF PACKAGE STP</b>
      <ol>
      <li><b>Preliminary Treatment</b><br>The influent sewage water passes through a bar screen to remove all the large objects like cans, rags, sticks, plastic packets etc. which are carried in the sewage stream.</li>
      <li><b>Secondary Treatment</b>
      <ol type="a">
      <li><b>Anaerobic Zone-</b>
      <p>The first stage of PSTP is an oxygen-depleted anaerobic zone in which the solids in raw sewage gets settled while allowing the scum to float on the surface. It is a zone in which the settled sludge is stabilized by anaerobic digestion.</p></li>
      <li><b>Anoxic Zone-</b>
      <p>The sewage then enters the anoxic zone in which denitrification of the wastewater stream is accomplished by returning the activated sludge from the final sedimentation zone to the anoxic zone; wherein dissolved oxygen levels are maintained approximately as 0.2 to 0.5 mg/l. In the denitrification process, anoxic microbes break down to the existing nitrates, this results in the release of inert nitrogen gas into the atmosphere.</p>
      </li>
      <li><b>Aeration Zone-</b>
      <p>The sewage from solid separation zone flows into the aeration zone. Air is diffused with the help of air blowers which encourages the growth of bacteria cultures in and around the floating plastic media added in the aeration zone. The MBBR media provides the extended surface area for the growth of microorganisms.</p></li>
      <li><b>Sedimentation Zone-</b>
      <p>The next step of treatment involves the sedimentation zone where organic waste is settled. The settled waste in the bottom of the tank is pumped back to the anoxic zone as a return sludge, which is done to ensure that the quality of effluent must pass the stipulated sewage parameters.</p>
      </li>
      </ol>
      </li>
      <li><b>Tertiary Treatment System:</b>
      <p>The secondary treated sewage is then passed through the Pressure Sand Filter and Activated Carbon Filter for the removal of suspended solids (TSS), colour, and odour. The treated water is then disinfected using sodium hypochlorite before it is reused.</p>
      </li>
      </ol>
      <ol>
      <li>INFLUENT</li>
      <li>BAR SCREEN CHAMBER</li>
      <li>ANAEROBIC & ANOXIC ZONE</li>
      <li>AEROBIC MBBR ZONE</li>
      <li>FINAL SEDIMENTATION</li>
      <li>FILTER FEED TANK</li>
      <li>MBBR MEDIA</li>
      <li>AIR BLOWERS</li>
      <li>RECIRCULATION PUMP</li>
      <li> FILTER FEED PUMP</li>
      <li> PRESSURE SAND FILTER</li>
      <li> ACTIVATED CARBON FILTER</li>
      <li> DISINFECTION</li>
      <li> AIR VENT</li>
      <li> TREATED WATER TANK</li>
      </ol>
      <b>Features of PSTP</b>
      <div class="table-responsive">
      <table border="1" class="table">
      <thead>
      <tr>
      <th>Key Points</th>
      <th>MBBR FRP-PSTP</th>
      <th>MS-EP / RCC Conventional STP</th>
      </tr>
      </thead>
      <tr>
      <td>Performance</td>
      <td>Decomposition of organic waste is consistent throughout the year</td>
      <td>Seasonal variation is observed</td>
      </tr>
      <tr>
      <td>Monitoring of MLSS & F/M Ratio</td>
      <td>Required</td>
      <td>Not Required</td>
      </tr>
      <tr>
      <td>Sludge Removal</td>
      <td>Once in 18-24 months</td>
      <td>Once in a month</td>
      </tr>
      <tr>
      <td>Chemicals & Equipment for Sludge Dewatering and Treatment</td>
      <td>Required</td>
      <td>Once in a month</td>
      </tr>
      <tr>
      <td>Skilled Supervision</td>
      <td>Not Required</td>
      <td>Required</td>
      </tr>
      <tr>
      <td>O & M Cost</td>
      <td>70% reduction compared to conventional STPs</td>
      <td>Much higher</td>
      </tr>
      <tr>
      <td>Tank Maintenance</td>
      <td>Leak & rust proof. No root integration & fungal growth</td>
      <td>Prone to leak & rust, root integration & fungal growth</td>
      </tr>
      <tr>
      <td>Tank Maintenance and Durability</td>
      <td>Maintenance free and much more durable</td>
      <td>Requires frequent maintenance. Much lower durability</td>
      </tr>
      <tr>
      <td>Installation Lead Time</td>
      <td>Within 7 to 10 days</td>
      <td>Much higher</td>
      </tr>
      <tr>
      <td>Upgradation and Relocation</td>
      <td>Possible</td>
      <td>Not possible</td>
      </tr>
      </table>
      <br>
      <b>PRODUCT RANGE AVAILABLE</b>
      <div class="table-responsive">
      <table border="1" class="table">
      <thead>
      <tr>
      <th>SR. NO.</th>
      <th>PRODUCTS</th>
      <th>CAPACITY RANGE</th>
      </tr>
      </thead>
      <tr>
      <td>1</td>
      <td>FRP Package Sewage Treatment Plant (ENVI Model)</td>
      <td>2 KLD to 500 KLD</td>
      </tr>
      <tr>
      <td>2</td>
      <td>FRP Anaerobic Septic Tank (FAST Model)</td>
      <td>10 KL to 150 KL</td>
      </tr>
      <tr>
      <td>3</td>
      <td>FRP Waste Water Equalization / Collection Tank (FET Model)</td>
      <td>10 KL to 150 KL</td>
      </tr>
      <tr>
      <td>4</td>
      <td>FRP Water Storage Tank (FWST Model)</td>
      <td>10 KL to 150 KL</td>
      </tr>
      <tr>
      <td>5</td>
      <td>FRP Fir Fighting Water Storage Tank (FFST Model)</td>
      <td>10 KL to 150 KL</td>
      </tr>
      </table>
      <b>APPLICATION AND USES</b>
      <ul>
      <li>Residential and Commercial Complex</li>
      <li>Public Garden and National Park</li>
      <li>Hotel & Resorts</li>
      <li>Restaurants</li>
      <li>Industries</li>
      <li>Institutions</li>
      <li>Hospitals</li>
      <li>Temples</li>
      <li>Government Offices</li>
      <li>Labour Quarters</li>
      <li>Township</li>
      <li>Hostels</li>
      </ul>
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="sewagetreatmentplant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sewage Treatment Plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Sewage is the waste generated from residential, institutional, commercial and industrial establishments. STP plant treats the sewage to make it fit for safe disposal, agricultural use or domestic use in toilets etc. Sewage usually contains a high quantity of organic and inorganic wastes. It is essential to treat sewage before it enters into any water body. If sewage, is allowed to enter the water sources without treatment, it will contaminate them; which is why it is essential to treat sewage properly before letting it into rivers or any other sources of water.</p>
      <b>Areas in a STP Plant</b><br>
      <b><u>Primary Treatment</u></b>
      <p>In Primary treatment, wastewater is fed to a screen to remove all large objects that are suspended in the water. After this, the water gets into a Grit chamber where the grit is removed. Grit includes sand, gravel, eggshells, bone chips, seeds, and other materials. Grit removal is necessary to reduce heavy deposits in aeration tanks, digester, channels, and conduits. The next step consists of primary settling tanks. These tanks are usually large in size and the solids settle down due to gravity and are removed as sludge from the bottom. Meanwhile, the oil floats on the surface and is skimmed off. 50-60% of the suspended solids get removed and a 30-40% reduction of the five-day biological oxygen demand can be expected.</p>
      <b><u>Secondary Treatment</u></b>
      <p>Secondary treatment is the second stage of wastewater treatment. In primary treatment, suspended solids, colloidal particles, oil, and grease are removed. Then second biological treatment is done on the wastewater to remove the organic matter present.</p>
      <p>This treatment is performed by indigenous and aquatic micro-organisms like bacteria and protozoa which consume biodegradable soluble contaminants like sugar, fat, detergent, and food waste. These processes are sensitive to temperature and with an increase in temperature rate of biological reactions increases.
      <br>Secondary treatment is divided into two different treatment processes: 
      </p>
      <ol>
      <li><b>Aerobic Treatment –</b> Aerobic wastewater treatment is a biological treatment that uses oxygen to break down organic matter and remove other pollutants like nitrogen and phosphorus. Generally, in the sewage treatment, aerobic treatment is performed.</li>
      <li><b>Anaerobic Treatment –</b> Anaerobic treatment is a process where wastewater or material is broken down by micro-organisms without the aid of dissolved oxygen. However, anaerobic bacteria can and will use oxygen that is found in the oxides introduced into the system or they can obtain it from organic material within the wastewater.</li>
      </ol>
      <b><u>Tertiary Treatment</u></b>
      <p>Tertiary treatment is the third stage of the wastewater treatment and is also known as an advanced treatment. Tertiary treatment removes the load of nitrogen and phosphorus present in the water. It includes processes like filtration, ion exchange, activated carbon adsorption, electrodialysis, nitrification, and denitrification.
Treatment options in tertiary treatment depend upon the characteristics of effluent after secondary treatment and what kind of water is needed at the end of the treatment. For example, if we need potable water then filtration and disinfectionare implemented to process wastewater.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="demineraliserplants" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Demineraliser Plants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Demineralisation is the Process of removing the mineral salts from water by ion-exchange. Impurities that remains dissolved in water dissociate to form positive and negative charged particles known as ions. These impurities or compounds are called electrolytes. Generally, all natural water has electrolytes in varying concentrations. An ion-exchange vessel holds ion-exchange resin of the required type through which water is allowed to pass. The selective ions in the water are exchanged with ions or radicals loosely held by the resin. In this way, the water is passed through several vessels or a mixed bed vessel so that both positive and negative ions are removed and water is demineralised.</p>
      <b>DEMINERALISATION PLANT COMPRISES OF</b><br>
      <ul>
      <li>Pressure Sand Filter</li>
      <li>Activated Carbon Filter</li>
      <li>Cation Bed Reactor</li>
      <li>Anion Bed Reactor</li>
      <li>Mixed Bed Reactor</li>
      <li>Degasser</li>
      </ul>
      <b>PRODUCT MODEL AVAILABILITY :-</b>
      <p>Demineraliser plants are comprises of Mild Steel /SS / FRP Pressure Vessel, Frontal piping wok with manual / Automatic multi port valve butterfly valve / conventional valves for easy operation and control. Available from 100 Liters/hr. to 50000 Liters/hr.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="watersoftenerplants" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Water Softener Plants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Hard water is frequently unsuitable for many industrial and domestic purpose. When water is referred to as 'Hard' it simply means, that it contains excess of calcium (Ca) and magnesium (Mg) Ions than normal water.
Carbonate hardness is known as temporary hardness and non-carbonate hardness is known as permanent hardness. The degree of hardness of the water increases, when more calcium and magnesium ions are dissolves. These ions have their origins in limestone sediments and also from carbon dioxide which is present in all waters exposed to the atmosphere and especially in ground water. The easiest way to soft the hard water is through Ion exchange process. 
</p>
<b>HASSLES OF HARDNESS :-</b>
<ul>
<li>Hard water reacts adversely with detergents. It means even on your little (baby) ones’ Soft towels turn rough on their soft skin.</li>
<li>Soaps and shampoos do not lather and leave you feeling unwashed. Your skin gets dry. Hard water makes hair dry and rough leads to hair loss.</li>
<li>Hard water causes residual deposit and scale builds up. Damaging your appliances such as heaters, washing machines, showers, dishwashers etc. Appliances life comes down by 45%; their maintenance cost goes up by 25%. Causes deterioration and fading of fabrics. Also reduces fabric life by 15%.</li>
<li>Hard water leaves scales which clog pipes, faucets, valves and fixtures. Hard water reduces the cleaning power of detergents. Soft water reduces detergents requirements by about 70%.</li>
<li>Makes the food and water taste different. Cooking takes longer than ever before. Cooking gas consumption increases by 30%. Causes scale deposit on utensils.</li>
</ul>
<b>WATER SOFTENING PROCESS :-</b>
<p>Softening is the ion exchange process, it is done through resin, the most common and probably the easiest method of removing hardness (that is calcium and magnesium) from water and suitable for utility purpose. As the name implies ion exchange is a process in which undesirable ions are exchanged for more desirable ions. The softening process consists of passing raw water containing hardness through a bed of cation resin in sodium form. The hardness ions Ca & Mg are taken up by resin and in exchange, the sodium ions are relinquished from the resin. This is called the service cycle, where the hard water is being softened.</p>
<b>CHEMICAL REACTION DURING SOFTENING PROCESS :-</b><br>
Ca (HCO3)2 + Na2 R = RCa + NaHCO3 <br>
CaSO4 + Na2 R = RCa + Na2SO4MgCl2 + Na2 <br>
R = RMg + NaCl <br>
<b>REGENERATION PROCESS :-</b>
<p>Raw water will continue to get softened till the resin gets exhausted. Bringing back the resin to it original form is called regeneration. Softener resin is regenerated by sodium chloride- Nacl (Common salt) solution. The common salt solution is kept in the regeneration tank. During the regeneration process, salt solution is injected by the ejector tube into softener. The Nacl (salt solution) replaces ca, Mg (Hardness) from the resin, the regeneration is done every day or every few days or every week depending upon the usage and design of the water softener plant.</p>
<b>CHEMICAL REACTION DURING REGENERATION PROCESS :</b><br>
RCa + NaCl = RNa + CaCl2 <br>
RMg + NaCl = RNa + MgCl2 <br>
<b>PRODUCT MODEL :-</b>
<p>Our  water softener plants are comprises of Mild Steel /SS / FRP Pressure Vessel, regeneration tank, ejector assembly, frontal piping wok with manual / Automatic multi port valve butterfly valve / conventional valves for easy operation and control. Available from 1,000 Liters/hr. to 1,00,0000 Liters / hr.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ironremovalsystem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Iron Removal System</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Iron is an objectionable constituent of portable water. Iron in water impart a bitter characteristic, metallic taste and cause oxidized precipitate. Coloration of water which may be yellowish brown to reddish brown and renders the water objectionable or unsuitable for use. In addition Iron stain everything with which it come in contact.
Iron exists in water in two levels. One as the bi-valent, Ferrous Iron ( Fe ++) and the second one as the tri-valent, Ferric Iron (Fe+++). The Ferric Iron generally occurring in the precipitated form. Iron forms complexes of hydroxides and other in-organic complexes in solution with substantial amounts of bi-carbonate, sulphate, Phosphate, Cyanide or Halides. Presence of organic substances induces the formation of organic complexes which increase the solubility of Iron. The waters of high alkalinity have lower iron than waters of low alkalinity.
</p>
<b>CAUSES OF IRON</b>
<ul>
<li>Iron contamination causes stains on your sinks and bathroom tiles. Stains appear on your faucets and fixtures. Pipes corrode Washing machines, water heaters, dishwashers, steam irons, showers and radiators fall prey. Up to 50% of their life and efficiency gets reduced, adding up 25% in maintenance and running costs.</li>
<li>If iron water is consumed it can cause loss of apPetite, tissue damage. When used for bathing it causes skin rashes, hair loss.</li>
</ul>
<b>IRON REMOVAL PROCESS DESCRIPTION</b><br>
<b>STAGE I - CHEMICAL DOSING</b>
<p>To level the pH factor, chemical pre treatment is done in order to facilitate rapid aeration, than the chemical dosed water send in to the aeration tanks.</p>
<b>STAGE II- ONLINE AERATION TYPE</b>
<p>Chemical dosed water is send into the aeration tank consisting three chambers. The raw water is allowed to sprinkle at the first chamber through specially designed perforated pipes. The water travels from first chamber to other two chambers through accurately designed multiple vents at variable levels of the bifurcate walls, thus provides ZIG ZAG motion. When the water reaches the third chambers the dissolved iron gets oxides and become suspended iron particles.</p>
<b>8 HOURS STORAGE AERATION TYPE</b>
<p>Chemical dosed water is pumped in to aeration tank. The raw water is allowed to sprinkle (at the tank/sump) through specially designed perforated pipes and allowed to remain there for about 8 to 10 hrs to get oxidized through the natural process and the iron presence in the water becomes suspended iron.</p>
<b>STAGE III - FILTRATION</b>
<p>The suspended iron water is passed through Iron removal unit, the filter media is supported on gravel bed that consists of multiple layers of progressively larger sizes of Manganese Di oxide, Activated Carbon 900 IV, Graded quartz sand, Fine sand, Super fine white sand and Pebbles, which retain the suspended iron particles. During the filtration cycle the filter bed retains the dirt and suspended iron particles from the water and accumulates within the filter bed.</p>
<b>BACKWASH</b>
<p>As the filtration progress the filter media gets loaded with the retained particles, this results in a continuous increase of pressure drop across the filter, when a predetermined pressure drop level is achieved the filter is shut down for cleaning. After backwashing the filter is rinsed with raw water and after the quality of water is achieved the filter is put back into service.</p>
<b>PRODUCT MODEL</b>
<p>Our iron removal plants are comprises of Mild Steel /SS / FRP Pressure Vessel, Frontal piping wok with manual / Automatic multi port valve / Butterfly valve / conventional valves for easy operation and control, Iron remove plants are available from 1000 LPH to 100000 LPH.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="activatedcarbonfilters" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Activated Carbon Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Activated carbon has been historically used for removal of odor, removal of color pigments from water. Further, our expertise lies in making available both Domestic and Industrial models of Activated Caron Filter, it also used as per treatment system in RO plant (ROP) and post treatment system in Waste water treatment plants (STP & ETP).</p>
      <p>Activated Carbon filters offered by us are used for eliminating bad taste, odor as well as chlorine residue in water. This excellent filter media has carbon granules of high iodine value that helps contaminants to get adsorbed to surfaces of carbon particles</p>
      <b>PROCESS DESCRIPTION :-</b>
      <p>The water passes through the Activated carbon filter, the filter media consist of activated granular carbon. Activated carbon adsorbs onto its surface free chlorine, organic compounds, colour and odour. The activated carbon bed is supported by a multilayer graved bed. The activated carbon bed is also backwashed at fixed intervals to dislodge any accumulated dirt particles.</p>
      <b>BACK WASH :-</b>
      <p>As the filtration progress the filter media gets loaded with the retained particles, this results in a continuous increase of pressure drop across the filter, when a predetermined pressure drop level is achieved the filter is shut down for cleaning. The filter media is cleaned by backwash system. After backwashing the filter is rinsed with raw water and after the required quality of water is achieved the filter is put back into service. Depending on the filtered water quality required backwashing is either done with raw water or with filtered water.</p>
      <b>PRODUCT MODEL AVAILABILITY :-</b>
      <p>Activated Carbon filter plants are comprises of Mild Steel /SS / FRP Pressure Vessel, Frontal piping wok with manual / Automatic multi port valve butterfly valve / conventional valves for easy operation and control. Available from 1,000 Liters/hr. to 1,00,0000 Liters/hr.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="multigradefilter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Multi Grade Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Multi grade filter is a depth filter that makes use of coarse and fine media mixed together in a fixed proportion. This arrangement produces a filter bed with adequate pore dimensions for retaining both large and small suspended particles. This filter performs at a substantially higher specific flow rate than conventional filters.</p>
      <b>PROECSS</b>
      <p>Raw water passed through the Multi Grade Filter, it consists of a multi layers of filter media consisting graded sand, white sand, fine sand, activated carbon and pebbles layers, which retain the suspended particles and activated carbon adsorbs onto its surface free chlorine, organic compounds, colour and odour. During the filtration cycle the filter bed retains the dirt and suspended particles from the water and accumulates within the filter bed. As the filtration progress the filter media gets loaded with the retained particles, this results in a continuous increase of pressure drop across the filter, when a predetermined pressure drop level is achieved the filter is shut down for cleaning.</p>
      <b>BACKWASH</b>
      <p>The filter media is cleaned by backwash system. After back-washing the filter is rinsed with raw water and after the required quality of water is achieved the filter is put back into service. Depending on the filtered water quality required back-washing is either done with raw water or filtered water.</p>
      <b>RANGE OF PRODUCT MODEL AVAILABILITY</b>
      <p>Multi grade Filter is comprises of Mild Steel /SS / FRP Pressure Vessel, Frontal piping wok with manual / Automatic multi port valve butterfly valve / conventional valves for easy operation and control. Available from 1,000 Liters/hr. to 1,00,0000 Liters/hr.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="industrialreverseosmosis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Industrial Reverse Osmosis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Mizutech India are among the prominent names in the industry occupied in offering an extensive range of Reverse Osmosis Plant. Being a quality centric firm, we assure our customers that the offered plant ensures trouble free performance and long lasting life. Our experienced professionals use only best quality raw materials and latest technology while manufacturing this plant. Besides, our provided plant can be availed within the promised time period. Features: High performance long functional life Easy to operate</p>
      <p>We are a team of technologically adept professionals who implement revolutionary techniques for rendering high speed filtration and remarkable efficiency in the offering plants. We utilize the advanced quality membrane separation system and procure premium grade material from renowned sources to develop highly reliable RO plants. Designed to withstand the continuous duty operation in the industrial segment the offered plant can be ordered from us at the best price in the industry.</p>
      <b>Features:</b>
      <ul>
      <li>Low power consumption</li>
      <li>Modular design</li>
      <li>Minimal maintenance require</li>

      </ul>
      <h3>Product Details:</h3><br>
      <div class="table-responsive">
      <table class="table" border="1px">
      <tr>
      <td>RO Capacity (LPH)</td>
      <td>50 LPH to 50000LPH (or design as per customer capacity requirement )</td>
      </tr>
      <tr>
      <td>Automation Grade</td>
      <td>Semi-Automatic, Manual, Automatic</td>
      </tr>
      <tr>
      <td>Max Water Recovery Rate</td>
      <td>>75 %</td>
      </tr>
      <tr>
      <td>Installation/Civil Work</td>
      <td>Available</td>
      </tr>
      <tr>
      <td>Plant Accessories</td>
      <td>Ozonator, Chlorinator, Ultra Filtration Plant</td>
      </tr>
      <tr>
      <td>Chiller Cooling Capacity (Tons)</td>
      <td>0.5 ton, 1 ton, 1.5 ton, 2 ton</td>
      </tr>
      <tr>
      <td>Material of Construction</td>
      <td>Stainless Steel, FRP, SS Powder coating</td>
      </tr>
      <tr>
      <td>Plant Placement</td>
      <td>Skid Mounted & on Site Construction</td>
      </tr>
      </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="jarfillingmachine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Jar Filling Machines</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Mizutech India  are reckoned as major entity engaged in developing next generation 20 Liters Jar Water Filling Machine. We have conducted rigorous market research and have developed a much anticipated design for jar filling machine that is becoming the most preferred model for food processing industries. The offered model is designed and developed at our well integrated setup and trusted across the industry for its longer lifespan. Further, we are providing the highly advanced and quality tested models of jar filling machine in varied capacities</p>
      <p>We are utilizing the next generation blow molding mechanism for these machines which are designed specially to make uniformly shaped jars featuring capacity of 20 liters. The offered model is designed under strict quality supervision and developed by procuring robust grade material from recognized vendors. Further, we are providing the quality tested machine at the best price in the marketplace.</p>
      <b>Features:</b>
      <ul>
      <li>Low space requirement</li>
      <li>Consumes less energy</li>
      <li>High speed operation</li>

      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="petblowingmachine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pet Blowing Machine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Mizutech India is actively instrumental in providing a superior quality collection of Fully Automatic PET Bottle Blowing Machine & Semi-automatic pet bottle machines. We  manufacture the entire range from 900 BPH to 4500BPH. Mizutech India are well acclaimed as reliable firm offering highly demanded PET Bottle Blowing Machine. The offered machine is designed by keeping the operator convenience in mind. Featuring a fully automated mechanism for filling water bottle the offered model is widely installed at commercial and industrial areas for increasing the productivity. The offered machine is designed by utilizing premium grade material and high quality components and owing to our strict quality supervision we are providing the industry compliant model with assurance of reliable performance for a longer time.</p>
      <b>Features:</b>
      <ul>
      <li>Energy efficient</li>
      <li>Optimum performance</li>
      <li>Noise free operation</li>
      <li>Resistance to corrosion</li>
      <li>Robustness & Perfect finish</li>
      <li>Sturdy structure</li>
      <li>High speed operation</li>

      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="fillingmachine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Filling Machine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Mizutech India has attained a reputed place in the industry for providing a quality assured range of <b>Water Filling Machine, Soda Filling Machines, Juice Filling Machines.</b> We are offering you the complete range of 30BPM, 60BPM, 90BPM, 120BPM and also customized as per customer need and requirement. We offer these machines in varied dimensions and grades as per the demands and specifications of our respected clients. These machines are manufactured by the use of optimum quality raw material and innovative techniques at our upgraded manufacturing unit. Further, we are providing the quality tested machine at the best price in the marketplace.</p>
      <b>Features:</b>
      <ul>
      <li>Flawless performance</li>
<li>Highly reliable</li>
<li>Robust construction</li>

      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br><br>
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
      <a href="#"> mizutechindia.com</a><br>
      Developed and maintained By <a href="https://www.github.com/grgauravweb" target="blank">Gaurav Rai</a>
    </div>
    <!-- Copyright -->
              </div>

  </footer>
  <!-- Footer -->
</body>

</html>