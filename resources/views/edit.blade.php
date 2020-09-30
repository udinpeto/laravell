<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="assets2/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets2/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets2/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets2/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets2/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="assets2/index.html">
                            <img src="assets2/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="admin">Home</a>
                                </li>
                                <li>
                                    <a href="input">Input</a>
                                </li>
                                <li>
                                    <a href="edit">Edit</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="assets2/login.html">Login</a>
                                </li>
                                <li>
                                    <a href="assets2/register.html">Register</a>
                                </li>
                                <li>
                                    <a href="assets2/forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="assets2/button.html">Button</a>
                                </li>
                                <li>
                                    <a href="assets2/badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="assets2/tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="assets2/card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="assets2/alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="assets2/progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="assets2/modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="assets2/switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="assets2/grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="assets2/fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="assets2/typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="assets2/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="home">Home</a>
                                </li>
                                <li>
                                    <a href="input">Input</a>
                                </li>
                                <li>
                                    <a href="edit">Edit</a>
                                </li>
                               
                            </ul>
                        </li>
                       
                        
                                
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="assets2/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="assets2/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="assets2/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="assets2/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="assets2/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="assets2/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="assets2/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>Input Data</h2>
                        <div class="form-group">
                            <label for="sel1">Nama Fasilitas Kesehatan*</label>
                            <select class="form-control" id="sel1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="comment">Deskripsi*</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                          
                          <div class="form-group"><label for="">Jenis Fasilitas Kesehatan*</label></div>
                            <div class="radio">
                            <label><input type="radio" name="optradio" checked>Rumah Sakit</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Klinik</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio" >Puskesmas</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio" >Lab.</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Lainnya</label>
                          </div>
                          </div>

                          
                          <div class="col pb-5">
                            <div class="form-group"><label for="">Jenis Tes Kesehatan*</label></div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
                              <label class="custom-control-label" for="ContohRadio1">Rapid Test</label>
                          </div>
                          <div class="custom-control custom-radio">
                              <input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
                              <label class="custom-control-label" for="ContohRadio2">SWAB Test</label>
                            </div>
                            </div>
                        
                            <div class="container t-0">
                        <div class="col">
                          <div class="form-group">
                            <label for="harga"></label>
                            <input type="text" class="form-control" id="harga">
                          </div>
                          </div>
                            </div>

                          <div class="container mt-0">
                        <div class="col ">
                            <div class="form-group ">
                              <label for="no.hp"></label>
                              <input type="text" class="form-control" id="no.hp">
                            </div>
                            </div>
                          </div>

                          <div class="container my-0">
                        <div class="col ">
                            <div class="form-group">
                                  <label for="alamat"></label>
                                  <input type="text" class="form-control" id="alamat">
                                </div>
                                </div>
                                </div>

                                <div class="col text-center">
                                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                      style="border:0" allowfullscreen></iframe>
                                
                            <div class="image-upload">
                                <label for="file-input">
                                    <img src="assets/img/4.png"/>
                                </label>
                                 <input id="file-input" type="file"/>
                                 <button type="submit" class="btn btn-outline-danger">Save Edit</button>
                                 <input id="file-input" type="file"/>
                                 <button type="button" class="btn btn-outline-danger">Delete</button>
                            </div>

                           </div>
                                        
                                    </div>
                              
                                                   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p class="text-right">Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets2/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets2/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets2/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets2/vendor/slick/slick.min.js">
    </script>
    <script src="assets2/vendor/wow/wow.min.js"></script>
    <script src="assets2/vendor/animsition/animsition.min.js"></script>
    <script src="assets2/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets2/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets2/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets2/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets2/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets2/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets2/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets2/js/main.js"></script>

</body>

</html>
<!-- end document-->
