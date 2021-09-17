<?php
session_start();
include("connect.php");
//error_reporting(0);
if (isset($_SESSION['email'])) {
  // header("location:make-shipment");
} else {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="DHLL Courier Services">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>View All Shipment || DHLL Courier Services</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&display=swap">
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
          <a class="navbar-brand" href="login.php">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logod">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="header__top-right d-none d-lg-block">
            <ul class="list-unstyled d-flex justify-content-end align-items-center">
              <li><i class="icon-phone"></i><span>+1 (323) 315-0171</span></li>
              <li><a href="track-shipment.php" class="btn btn__white"><i class="icon-list"></i><span>Track Shipment</span></a></li>
            </ul>
          </div><!-- /.header-top-right -->
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="login.php" class="dropdown-toggle nav__item-link">Home</a>
                <i class="fa fa-angle-right"></i>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="make-shipment.php" class="nav__item-link">Make Shipment</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
              </li><!-- /.nav-item -->
              <li class="nav__item"><a href="view-all.php" class="nav__item-link">View All Shipment</a></li>
              <li class="nav__item">
                <a href="add-shipment-history.php" class="nav__item-link">Add History</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="track-shipment.php" class="nav__item-link">Track</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="log-out.php" class="nav__item-link">Log Out</a>
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
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item"><a href="#">View All Shipment</a></li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">View All Shipment</h1>
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

            <table class="table table-striped table-responsive ">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tracking ID</th>
                  <th scope="col">Status</th>
                  <th scope="col">Package</th>
                  <th scope="col">Carrier</th>
                  <th scope="col">Comments</th>
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <?php $trace = mysqli_query($myConn, "SELECT * FROM shipments order by created_at");
                  while ($row =  mysqli_fetch_array($trace, MYSQLI_ASSOC)) {
                    $tracking_id = $row['tracking_id'];
                    global $tracking_id;
                  ?>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['tracking_id']; ?></td>
                    <td><?php echo $row['statu']; ?></td>
                    <td><?php echo $row['package']; ?></td>
                    <td><?php echo $row['carrier']; ?></td>
                    <td><?php echo $row['comments']; ?></td>

                    <form method="POST" action="editSingleShipment.php">
                      <input type="hidden" name="tracking_id" value=<?php echo $row['tracking_id']; ?>>
                      <td><button type="submit" class="btn btn__primary" data-toggle="modal" data-target="#exampleModal" name="edit">Edit</button></td>
                    </form>

                    <!-- ================= -->

                    <td><button class="btn btn__primary" data-toggle="modal" data-target="#exampleModa">Delete</button></td>

                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Shipment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Confirm you want to delete this shipment?</p>
                          </div>
                          <div class="modal-footer">
                            <form method="POST" action="edit-shipment.php">
                              <input type="hidden" name="tracking_id" value=<?php echo $row['tracking_id']; ?>>
                              <button tpe="button" class="btn btn__secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn__primary" name="delete">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </tr>
              <?php

                  }
              ?>
              </tbody>
            </table>


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
                <span>&copy; <?php echo date("Y"); ?> DHLL Courier Services</span>
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