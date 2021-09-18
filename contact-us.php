<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="DHLL Courier Services ">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Contact Us || DHLL Courier Services</title>
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
              <li><i class="icon-phone"></i><span>+1 (323) 315-0171</span></li>
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
                <a href="contact-us.php" class="nav__item-link active">Contact Us</a>
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
      <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $errorMessage = "Mail Successfully Sent!";

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'https://dhllcourier.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@dhllcourier.com';                     //SMTP username
    $mail->Password   = 'dhllcourier1234';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('support@dhllcourier.com', 'Support Team');     //Add a recipient
    $mail->addReplyTo($email, $name);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo "";
} catch (Exception $e) {
    echo "";
}}
?>


    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact1" class="contact text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Get In Touch</span>
              <h2 class="heading__title">Contact Us</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
              <p class="heading__desc">We understand the importance of approaching each work integrally and believe in
                the power of simple and easy communication.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form action="contact-us.php" method="post">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" name="subject" class="form-control" placeholder="Subject"></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Request Details"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" name="send" class="btn btn__secondary btn__hover3">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->

    <!-- ==========================
       Contact panels
    ============================ -->

    <!-- =========================
      Mailer
    ============================ -->
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