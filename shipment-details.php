<?php
include("connect.php");
if(isset($_POST['track'])){
$shipment_mode = $_POST['shipment_mode'];
$tracking_id = $_POST['tracking_id'];

$trace = mysqli_query($myConn, "SELECT * FROM shipments WHERE shipment_mode = '{$shipment_mode}' AND tracking_id = '{$tracking_id}'");

if (mysqli_num_rows($trace) > 0) {
  while($row = mysqli_fetch_array($trace)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="DHLL Courier Services">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Shipment Details || DHLL Courier Services</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="header__top-right d-none d-lg-block">
            <ul class="list-unstyled d-flex justify-content-end align-items-center">
              <!--<li><i class="icon-phone"></i><span>+1 (323) 315-0171</span></li>-->
              <li><a href="track-shipment.php" class="btn btn__white"><i class="icon-list"></i><span>Track Shipment</span></a></li>
            </ul>
          </div><!-- /.header-top-right -->
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="index.php" class="dropdown-toggle nav__item-link">Home</a>
                <i class="fa fa-angle-right" ></i>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="services.php" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
              </li><!-- /.nav-item -->
              <li class="nav__item"><a href="about-us.php" class="nav__item-link">About Us</a></li>
              <li class="nav__item">
                <a href="track-shipment.php" class="nav__item-link">Track</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.php" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->

            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shipment Details</a></li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Shipment Details</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       Request Quote
    ========================= -->
    <section id="requestQuote" class="request-quote">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-12">
            <form class="request-quote-form">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <!-- <div class="alert alert-primary text-center mb-45">
                    Your form has been successfully submitted.
                  </div> -->
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row mb-30">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="form__title">Shipper Information</h5>
                  <div class="divider__line divider__theme divider__sm mb-30"></div>
                  <p>Name:</p>
                  <p><?php echo $row['shi_info_name']; ?></p>
                  <p>Email: </p>
                  <p><?php echo $row['shi_info_email']; ?></p>
                  <p>Phone: </p>
                  <p><?php echo $row['shi_info_phone']; ?></p>
                  <p>Address</p>
                  <p><?php echo $row['shi_info_address']; ?></p>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-6 col-md-6 col-lg-6 form-group">
                  <h5 class="form__title">Receiver Information</h5>
                  <div class="divider__line divider__theme divider__sm mb-30"></div>
                  <p>Name:</p>
                  <p><?php echo $row['rec_info_name']; ?></p>
                  <p>Email:</p>
                  <p><?php echo $row['rec_info_email']; ?></p>
                  <p>Phone:</p>
                  <p><?php echo $row['rec_info_phone']; ?></p>
                  <p>Address:</p>
                  <p><?php echo $row['rec_info_address']; ?></p>
                </div><!-- /.col-lg-12 -->
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <p class="btn btn__secondary btn__block" style="">TRACKING ID: <?php echo $row['tracking_id']; ?></p>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <br>
              <div class="row mb-30">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <h5 class="form__title">Shipment Information</h5>
                  <div class="divider__line divider__theme divider__sm mb-30"></div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-4 col-md-4 col-lg-4 form-group">
                  <p>Origin:</p>
                  <p><?php echo $row['origin']; ?></p>
                  <p>Destination:</p>
                  <p><?php echo $row['destination']; ?></p>
                  <p>Weight:</p>
                  <p><?php echo $row['total_weight']; ?></p>
                  <p>Product:</p>
                  <p><?php echo $row['product']; ?></p>
                  <p>Pick-up Date</p>
                  <p><?php echo date("jS F, Y", strtotime($row['pick_up_date']));?></p>
                </div><!-- /.col-lg-12 -->

                <div class="col-sm-4 col-md-4 col-lg-4 form-group">
                  <p>Package:</p>
                  <p><?php echo $row['package']; ?></p>
                  <p>Carrier:</p>
                  <p><?php echo $row['carrier']; ?></p>
                  <p>Shipment Mode:</p>
                  <p><?php echo $row['shipment_mode']; ?></p>
                  <p>Qty:</p>
                  <p><?php echo $row['Qty']; ?></p>
                  <p>Pick-up Time:</p>
                  <p><?php echo $row['pick_up_time']; ?></p>
                </div><!-- /.col-lg-12 -->

                <div class="clasbcol-sm-4 col-md-4 col-lg-4 form-group">
                  <p>Status:</p>
                  <p><?php echo $row['statu']; ?></p>
                  <p>Type of Shipment:</p>
                  <p><?php echo $row['type_of_shipment']; ?></p>
                  <p>Payment Mode:</p>
                  <p><?php echo $row['payment_mode']; ?></p>
                  <p>Depature Time:</p>
                  <p><?php echo $row['departure_time']; ?></p>
                  <p>Expected Delivery Date</p>
                  <p><?php echo date("jS F, Y", strtotime($row['expected_delivery_date']));?></p>
                </div><!-- /.col-lg-12 -->
                <div class="clasbcol-sm-12 col-md-12 col-lg-12 form-group">
                <p>Comments:</p>
            <p><?php echo $row['comments']; ?></p></div>
              </div>
            </form>
            <h5 class="form__title">Shipment History</h5>
            <div class="divider__line divider__theme divider__sm mb-30"></div>
            <div class="container row col-sm-12 col-md-12 col-lg-12">
            <table class="table table-striped table-responsive">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Location</th>
      <th scope="col">Status</th>
      <th scope="col">Remark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   <?php
    $trackking_id = $row['tracking_id'];
    $history = mysqli_query($myConn,"SELECT * FROM shipments_history WHERE tracking_id = '$trackking_id' order by created_at");

while ($row1 =  mysqli_fetch_array($history)){
  ?>
      <td><?php echo date("jS F, Y", strtotime($row1['history_date'])); ?></td>
      <td><?php echo $row1['history_time']; ?></td>
      <td><?php echo $row1['history_location']; ?></td>
      <td><?php echo $row1['statu']; ?></td>
      <td><?php echo $row1['remark']; ?></td>
    </tr>
    <?php
}?>
  </tbody>

</table>
</div>
</div>
<?php
  }
  }
else{?>
<script>
alert ("No result found");
window.location.href = "track-shipment.php";
</script>
<?php
}
}
?>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Request Quote -->

    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-1">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="assets/images/logo/logo-dark.png" alt="logo" class="mb-30">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Are</h6>
              <div class="footer__widget-content">
                <p class="text-justify">DHLL Courier Services is a worldwide Logistics operator providing full
                  range of service in the sphere of customs clearance and transportation worldwide for any type of
                  cargo.</p>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Our Services</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Warehousing</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Quick Links</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Track</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="container">
        <div class="footer-bottom">
          <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
              <div class="footer__copyright">
                <span>&copy; <?php echo date("Y");?> DHLL Courier Services</span>
              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.Footer-bottom -->
      </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Search Here">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>