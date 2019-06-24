<?php
session_start();
?>

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
                                            <a href="cart.html" class="btn btn-primary"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;
                                            <a href="checkout.html" class="btn btn-primary"><strong><i class="fa fa-share"></i> Checkout</strong></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rightside">
                        <ul class="top-menu-list">

                            <li><a id="wishlist-total"><i class="fa fa-heart-o fa-hover-hidden fa-fw"></i><i class="fa fa-heart fa-hover-show fa-fw"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>

                            <li>


                              <?php

                             require 'db_connect.php';


                             $artst_name=mysqli_real_escape_string($con,$_SESSION['user']);
                             $sql="SELECT * FROM artist where artst_name='$artst_name'";

                             $result=$con->query($sql);
                             $row=$result->fetch_assoc();


                             if($row['artst_name']==$_SESSION['user'])
                             {

                							echo '


                							<div class="dropdown">
                									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><p><i class="fa fa-user"></i>'.$_SESSION['user'].
                									'<span class="caret"></span></button>
                									<ul class="dropdown-menu">
                									  <li><a href="home.php">Logout</a></li>

                									</ul>
                								  </div>
                								</div>';
                            }
                            else {
                              header("Location:home.php");
                            }


                							?>




                            </li>
                          </ul>
                    </div>
                </div>
            </div>
            <!---logo--->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="logo">
                            <a href="confirmed_home_login.php" class="logo-text">
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


                </div>
            </div>
            <!---end navbar--->
        </header>
        <!--end of header block-->

        <!--middle content-->
        <div class="main-content">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="confirmed_home_login.php"><i class="fa fa-home"></i></a></li>
                    <li><a>auction</a></li>
                </ul>
                <div class="row">

                    <div class="col-sm-9" id="content">
                        <h3><strong>CREATE AN AUCTION</strong></h3>

                        <form class="form-horizontal" action="auctioninsert.php" method="post">

                            <fieldset id="account">
                                <legend>Auction details</legend>
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







                              <?php

                                ?>
                                <div class="form-group required">
                                    <label for="input-firstname" class="col-sm-2 control-label">Painting Id</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="input-firstname" placeholder="Id"  name="paintingid" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="col-sm-2 control-label">From When</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" class="form-control" id="input-date" placeholder="eg. 2019-04-01 00:00:00" value="" name="starttime" required>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="col-sm-2 control-label">Till When</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" class="form-control" id="input-date" placeholder="eg. 2019-04-03 00:00:00" value="" name="endtime" required>
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
                        <div class="footer-block"><h4>Contact Us<i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>Email :</a>MoeArt@gmail.com</li>
                                <li><a>Phone No :</a>9561652137</li>
                                <li><a>Office :</a>S.P.I.T</li>

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
