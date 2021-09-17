<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Appris Express Courier Services">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Track Shipment || Appris Express Courier Services</title>
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
              <li><a href="track-shipment.php" class="btn btn__white"><i class="icon-list"></i><span>Track Shipment</span></a></li>
            </ul>
          </div><!-- /.header-top-right -->
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="index.php" class="nav__item-link">Home</a>
                <i class="fa fa-angle-right" ></i>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="services.php" class="nav__item-link">Services</a>
                <i class="fa fa-angle-right"></i>
              </li><!-- /.nav-item -->
              <li class="nav__item"><a href="about-us.php" class="nav__item-link">About Us</a></li>
              <li class="nav__item">
                <a href="track-shipment.php" class="nav__item-link active">Track</a>
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
      <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Track & Trace</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Track & Trace</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       Track Shipmeent
    ========================= -->
    <section id="trackShipmeent" class="track-shipmeent">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-layout2 mb-30">
              <div class="widget widget-categories widget-categories-2">
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Supply Chain</a></li>
                    <li><a href="#">Packaging</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->

              <div class="widget widget-help bg-theme">
                <div class="widget__content">
                  <h5>How Can <br> We Help You!</h5>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple
                    and easy communication.</p>
                  <a href="contact-us.php" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>
                </div><!-- /.widget-download -->
              </div><!-- /.widget-help -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="request-quote-form" method="post" action="shipment-details.php">
              <div class="row mb-30">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <p class="fz-16 mb-45">Want to get updates on your shipment?
                    Track your Shipment here.</p>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group mb-40">
                    <label>Shipment Mode</label>
                    <div class="form-group form-group-select">
                      <select class="form-control" name="shipment_mode">
                        <option value="Air Freight">Air Freight</option>
                        <option value="Ocean Freight">Ocean Freight</option>
                        <option value="Road Freight">Road Freight</option>
                      </select>
                    </div>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label>Tracking ID</label>
                    <div class="form-group">
                      <textarea class="form-control"
                        placeholder="Enter tracking ID." name="tracking_id"></textarea>
                    </div>
                  </div>
                </div><!-- /.col-lg-12 -->

              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" name="track" class="btn btn__secondary btn__block">Track & Trace</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Track Shipmeent -->

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
                <p class="text-justify">Appris Express Courier Services is a worldwide Logistics operator providing full
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
                <span>&copy; <?php echo date("Y");?> Appris Express Courier Services</span>
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