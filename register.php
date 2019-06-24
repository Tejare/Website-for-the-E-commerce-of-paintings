<!DOCTYPE html>

<html>
    <head>
        <title>MoeArt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png">
        <!--custom css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <!--js --->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <!--headerblock-->
        <!--headerblock-->
        <header>
            <div class="top-line">
                <div class="container top-box">
                    <div class="leftside">
                        <div class="social-icon-block">
                            <ul class="social-list">
                                <li><a><i class="fa fa-facebook"></i></a></li>
                                <li><a><i class="fa fa-twitter"></i> </a></li>
                                <li><a><i aria-hidden="true" class="fa fa-google "></i></a></li>
                                <li><a><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 visible-xs">
                        <div class="btn-group btn-block box-cart" id="cart">
                            <button style="cursor: pointer;" data-toggle="dropdown" class="dropdown-toggle btn btn-block">
                                <img src="images/shopping-cart.png">
                                <span id="cart-total">1 item(s) - $602.00</span>
                                <i class="fa fa-caret-down"></i>
                            </button>

                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <table class="table table-striped">
                                        <tbody><tr>
                                                <td class="text-center">
                                                    <a href="single-product.html"><img src="images/img1.jpg" width="60"/></a>
                                                </td>
                                                <td class="text-left"><a href="single-product.html">Painting</a>
                                                </td>
                                                <td class="text-right">x 1</td>
                                                <td class="text-right">$602.00</td>
                                                <td class="text-center"><button class="btn btn-primary btn-xs" type="button"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                        </tbody></table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody><tr>
                                                    <td class="text-center"><strong>Sub-Total</strong></td>
                                                    <td class="text-center">$500.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Coupon Code:</td>
                                                    <td class="text-center">$0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Gift Voucher:</td>
                                                    <td class="text-center">$0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Eco Tax (-2.00):</td>
                                                    <td class="text-center">$2.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">VAT (20%):</td>
                                                    <td class="text-center">$100.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><strong>Order Total:</strong></td>
                                                    <td class="text-center">$602.00</td>
                                                </tr>
                                            </tbody></table>
                                        <p class="text-center">
                                            <a href="cart.php" class="btn btn-primary"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;
                                            <a href="checkout.html" class="btn btn-primary"><strong><i class="fa fa-share"></i> Checkout</strong></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rightside">
                        <ul class="top-menu-list">

                            <li><a id="wishlist-total"><i class="fa fa-heart-o fa-hover-hidden fa-fw"></i><i class="fa fa-heart fa-hover-show fa-fw"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>


                            <li><a href="login.html">Login</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!---logo--->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="logo">
                            <a href="home.php" class="logo-text">
                                Moe<span style="color:#7cb342; font-size:40px">Art</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12"></div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="col-sm-12 rmv-right-padding col-xs-6 pull-right">

                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 margin-top">
                                <div class="input-group" id="search">
                                    <input type="text" class="form-control search-box" placeholder="Search" value="" name="search">
                                    <span class="input-group-btn">
                                        <button class="btn search-button" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---navbar--->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 rightside-remove-space rightside-add-space">
                        <div class="categoty-heading">
                            <div class="dropdown">
                                <h3 data-toggle="dropdown" class="toggle">CATEGORY
                                    <span>
                                        <i style="font-size: 30px; vertical-align: sub; float: right" class="fa fa-bars"></i>
                                    </span>
                                </h3>
                                <div class="dropdown-menu btn-block box-content test">
                                    <div class="box-category">
                                        <ul class="menu">
                                            <li><a  class="dropdown">Antic images</a></li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle" >Drawing</a>
                                                <i class="fa fa-plus"></i>
                                                <ul>
                                                    <li><a >Aliquam eget</a></li>
                                                    <li><a >Lorem ipsum</a></li>
                                                </ul>
                                            </li>
                                            <li><a  class="dropdown">New Media</a></li>
                                            <li><a  class="dropdown">painting</a></li>
                                            <li><a  class="dropdown">Fine art</a></li>
                                            <li><a  class="dropdown">Photography</a></li>
                                            <li><a  class="dropdown">Decorative art</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <nav class="navbar navbar-inverse menu-bar">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <!--                                    <span class="">Menu</span>-->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <!--                                    <a class="navbar-brand" href="#">WebSiteName</a>-->
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="home.php"><i class="fa fa-home"></i></a></li>
                                        <li><a>About</a></li>

                                        <li><a>contact</a></li>
                                        <li><a href="gallery_register.php">Register As gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!---end navbar--->
        </header>
        <!--end of header block-->

        <!--middle content-->
        <div class="main-content">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="home.php"><i class="fa fa-home"></i></a></li>

                </ul>
                <div class="row">
                    <aside class="col-sm-3 hidden-xs" id="column-left">
                        <div class="list-group">
                            <a class="list-group-item" href="login.html">Login</a>


                            <a class="list-group-item">My Account</a>

                            <a class="list-group-item">Wish List</a>
                            <a class="list-group-item">Order History</a>


                            <a class="list-group-item">Reward Points</a>

                        </div>
                    </aside>
                    <div class="col-sm-9" id="content">
                        <h3><strong>CREATE AN ACCOUNT</strong></h3>
                        <p>If you already have an account with us, please login at the <a href="login.html">login page</a>.</p><br>
                        <form class="form-horizontal" action="insert.php" method="post">
                              <select name="Color">
                                    <option value="customer">I am a Customer</option>
                                    <option value="artist">I am an Artist</option>

                            </select>
                            <fieldset id="account">
                                <legend>Your Personal Details</legend>
                                <div style="display: none;" class="form-group required">
                                    <label class="col-sm-2 control-label">Customer Group</label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                Default</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group required">
                                    <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname" required>
                                    </div>
                                </div>

                                <div class="form-group required">
                                    <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-telephone" class="col-sm-2 control-label">Telephone/Mob No.</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-telephone" value="" name="telephone" required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset id="address">
                                <legend>Your Address</legend>
                                <div class="form-group">
                                    <label for="input-company" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="input-company" placeholder="Address" value="" name="address" required>
                                    </div>
                                </div>

                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group required">
                                    <label for="input-password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm" required>
                                    </div>
                                </div>
                            </fieldset>
                            <!--<fieldset>
                                <legend>Newsletter</legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Subscribe</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="newsletter">
                                            Yes</label>
                                        <label class="radio-inline">
                                            <input type="radio" checked="checked" value="0" name="newsletter">
                                            No</label>
                                    </div>
                                </div>
                            </fieldset>

-->
                            <div class="buttons">
                                <div class="pull-right">I have read and agree to the <a class="agree"><b>Privacy Policy</b></a>
                                    <input type="checkbox" value="1" name="agree" style="vertical-align: text-bottom">
                                    &nbsp;
                                    <input type="submit" class="btn btn-primary" value="Continue">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of middle content-->


        <hr class="margin-top hidden-xs"/>
        <!--footer block--->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>Information <i class="fa fa-angle-up"></i></h4>


                            <ul class="list-unstyled">
                                <li><a>About Us</a></li>
                                <li><a>Delivery Information</a></li>
                                <li><a>Privacy Policy</a></li>
                                <li><a>Terms &amp; Conditions</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>Why Buy From Us <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>Contact Us</a></li>
                                <li><a>Returns</a></li>
                                <li><a>Site Map</a></li>
                                <li><a>Affiliates</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="footer-block"><h4>My Account <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>My Account</a></li>
                                <li><a>Order History</a></li>
                                <li><a>Wish List</a></li>
                                <li><a>Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>NewsLetter <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <p>subscribe to the mail if you want to touch with us as soon as possible if any enquiry to reach us</p>
                                </li>
                                <li>
                                    <div id="subscribe" class="input-group">
                                        <input type="text" name="subscribe" value="" class="form-control subscribe-box">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn subscribe-button">Subscribe</button>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                    © 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
                </div>
            </div>
        </footer>
        <!--end footer block--->
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-arrow-up"></i>
        </a>
    </body>
</html>
