<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Netmatters Home Page</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Magic Line of Code ------------------------------------>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Slick CSS --------------------------------->
    <link rel="stylesheet" href="js/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="js/slick-1.8.1/slick/slick-theme.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

    <!-- Favicon ------------------------------------>
    <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">

    <!-- Font Awsome ------------------------------------>
    <script src="https://kit.fontawesome.com/c8712841cc.js" crossorigin="anonymous"></script>

    <!-- Bootstrap ------------------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Google Fonts ------------------------------------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>

    <?php
      include("cookie-pop-up.php");
      include("pop-up-menu.php");
    ?>

    <div class="page-container">
      <div class="pop-up-overlay"></div>

      <header>
        <!-- Navigation Top Row ------------------------------------>
        <div class="nav-top">
          <a href="index.php" class="logo"><img src="imgs/logo.png" alt="Netmatters Logo"></a>
          <i class="fas fa-phone-alt fa-lg phone" id="phone"></i>
          <button type="button" name="support" class="read-more support"><i class="fas fa-mouse"></i>support</button>
          <a href="contact.php" class="contact"><button type="button" name="contact" class="read-more"><i class="fas fa-paper-plane"></i>contact</button></a>
          <div class="tab-search">
            <input type="text" name="tablet-search-bar" placeholder="Search...">
            <button type="button" name="teblet-search-button"><i class="fas fa-search fa-lg search"></i></button>
          </div>
          <div class="menu-but">
            <div class="hamburger" id="line-1"></div>
            <div class="hamburger" id="line-2"></div>
            <div class="hamburger" id="line-3"></div>
            <p>MENU</p>
            <div class="page-cover"></div>
          </div>
        </div>


        <!-- Navigation Bottom Row ------------------------------------>
        <div class="nav-bot">
          <input type="text" name="search" placeholder="Search...">
          <i class="fas fa-search fa-lg"></i>
        </div>


        <!-- Large Navigation Menu ------------------------------------>
        <!-- Item 1 ----------->
        <div class="nav-large-container">
          <div class="nav-large">
            <div class="item-container web-container">
              <a href="#" class="nav-web menu-item">
                <i class="fas fa-code fa-lg"></i>
                <h6>web</h6>
                <h3>design</h3>
              </a>

              <div class="sub-web sub-menu">
                <div class="sub-menu-container">
                  <a href="#">stylish websites</a>
                  <p>-</p>
                  <a href="#">ecommerce stores</a>
                  <p>-</p>
                  <a href="#">branding</a>
                  <p>-</p>
                  <a href="#">apps</a>
                  <p>-</p>
                  <a href="#">web hosting</a>
                  <p>-</p>
                  <a href="#">pay monthly websites</a>
                </div>
              </div>
            </div>


            <!-- Item 2 ----------->
            <div class="item-container it-container">
              <a href="#" class="nav-it menu-item">
                <i class="fas fa-desktop fa-lg"></i>
                <h6>it</h6>
                <h3>services</h3>
              </a>

              <div class="sub-it sub-menu">
                <div class="sub-menu-container">
                  <a href="#">managed it</a>
                  <p>-</p>
                  <a href="#">business it</a>
                  <p>-</p>
                  <a href="#">office 365</a>
                  <p>-</p>
                  <a href="#">consultancy</a>
                  <p>-</p>
                  <a href="#">cloud provider</a>
                  <p>-</p>
                  <a href="#">data backup</a>
                </div>
              </div>
            </div>


            <!-- Item 3 ----------->
            <div class="item-container telecoms-container">
              <a href="#" class="nav-telecoms menu-item">
                <i class="fas fa-phone-alt fa-lg"></i>
                <h6>telecoms</h6>
                <h3>services</h3>
              </a>

              <div class="sub-telecoms sub-menu">
                <div class="sub-menu-container">
                  <a href="#">gigabit voucher</a>
                  <p>-</p>
                  <a href="#">hosted voip</a>
                  <p>-</p>
                  <a href="#">business voip</a>
                  <p>-</p>
                  <a href="#">business broadband</a>
                  <p>-</p>
                  <a href="#">leased line</a>
                  <p>-</p>
                  <a href="#">3cx systems</a>
                </div>
              </div>
            </div>


            <!-- Item 4 ----------->
            <div class="item-container software-container">
              <a href="#" class="nav-software menu-item">
                <i class="fas fa-th fa-lg"></i>
                <h6>bespoke</h6>
                <h3>software</h3>
              </a>

              <div class="sub-software sub-menu">
                <div class="sub-menu-container">
                  <a href="#">workflow</a>
                  <p> - </p>
                  <a href="#">automation</a>
                  <p>-</p>
                  <a href="#">integration</a>
                  <p>-</p>
                  <a href="#">database</a>
                  <p>-</p>
                  <a href="#">sharepoint</a>
                  <p>-</p>
                  <a href="#">business management</a>
                </div>
              </div>
            </div>


            <!-- Item 5 ----------->
            <div class="item-container marketing-container">
              <a href="#" class="nav-marketing menu-item">
                <i class="fas fa-chart-bar fa-lg"></i>
                <h6>digital</h6>
                <h3>marketing</h3>
              </a>

              <div class="sub-marketing sub-menu">
                <div class="sub-menu-container">
                  <a href="#">search (seo)</a>
                  <p>-</p>
                  <a href="#">paid (ppc)</a>
                  <p>-</p>
                  <a href="#">conversion (cro)</a>
                  <p>-</p>
                  <a href="#">email</a>
                  <p>-</p>
                  <a href="#">social media</a>
                  <p>-</p>
                  <a href="#">content</a>
                </div>
              </div>
            </div>


            <!-- Item 6 ----------->
            <div class="item-container security-container">
              <a href="#" class="nav-security menu-item">
                <i class="fas fa-shield-alt fa-lg"></i>
                <h6>cyber</h6>
                <h3>security</h3>
              </a>

              <div class="sub-security sub-menu">
                <div class="sub-menu-container">
                  <a href="#">assessment</a>
                  <p>-</p>
                  <a href="#">management</a>
                  <p>-</p>
                  <a href="#">penetration testing</a>
                  <p>-</p>
                  <a href="#">cyber essentials</a>
                  <p>-</p>
                  <a href="#">pci/dss</a>
                  <p>-</p>
                  <a href="#">hacker prevention</a>
                </div>
              </div>
            </div>
          </div>
        </div>


      </header>
