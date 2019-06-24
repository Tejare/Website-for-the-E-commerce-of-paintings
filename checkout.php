<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PortrayStore</title>
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

                    <div class="rightside">
                        <ul class="top-menu-list">

                            <li><a id="wishlist-total"><i class="fa fa-heart-o fa-hover-hidden fa-fw"></i><i class="fa fa-heart fa-hover-show fa-fw"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>


                            <li><?php




                                                       require 'db_connect.php';


                                                       $customer_name=mysqli_real_escape_string($con,$_SESSION['user']);
                                                       $sql="SELECT * FROM customer where cust_name='$customer_name'";

                                                       $result=$con->query($sql);
                                                       $row=$result->fetch_assoc();


                                                       if($row['cust_name']==$_SESSION['user'])
                                                       {

                                                         echo '


                                                         <div class="dropdown">
                                                             <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><p><i class="fa fa-user"></i>'.$_SESSION['user'].
                                                             '<span class="caret"></span></button>
                                                             <ul class="dropdown-menu">

                                                             <li><a href="manage_account.php">My Account</a></li>
                                                             <li><a>Order History</a></li>
                                                             <li><a>Wish List</a></li>
                                                               <li><a href="home.php">Logout</a></li>




                                                             </ul>
                                                             </div>
                                                           </div>';
                                                      }
                                                      else {
                                                        header("Location:home.php?Login");
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
                            <a href="customer_home_page.php" class="logo-text">
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
                                            <li><a href="product.html" class="dropdown">Antic images</a></li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="product.html">Drawing</a>
                                                <i class="fa fa-plus"></i>
                                                <ul>
                                                    <li><a href="product.html">Aliquam eget</a></li>
                                                    <li><a href="product.html">Lorem ipsum</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product.html" class="dropdown">New Media</a></li>
                                            <li><a href="product.html" class="dropdown">painting</a></li>
                                            <li><a href="product.html" class="dropdown">Fine art</a></li>
                                            <li><a href="product.html" class="dropdown">Photography</a></li>
                                            <li><a href="product.html" class="dropdown">Decorative art</a></li>
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
                                        <li><a href="customer_home_page.php"><i class="fa fa-home"></i></a></li>
                                        <li><a>About</a></li>

                                        <li><a>Contact</a></li>
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
                    <li><a href="customer_home_page.php"><i class="fa fa-home"></i></a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
                <div class="row">
                    <div class="col-sm-12" id="content">
                        <h1>Checkout</h1>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">





                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a aria-expanded="true" href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle"> Confirm Order <i class="fa fa-caret-down"></i></a></h4>
                                </div>

                              <?php

                              $subtotal=$_SESSION['cost'];

                              $vat=$_SESSION['vat'];
                              $total=$_SESSION['total'];
                              $eco=$_SESSION['eco'];
                              $discount_price=$_SESSION['discount_price'];


                                echo '
                                  <form action="confirm_order.php" method="post">
                                <div style="" aria-expanded="true" class="panel-collapse collapse" id="collapse-checkout-confirm">
                                    <div class="panel-body"><div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="text-left">Product Name</td>
                                                        <td class="text-left">THEME</td>
                                                        <td class="text-right">Quantity</td>
                                                        <td class="text-right">Unit Price</td>
                                                        <td class="text-right">Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><a href=""></a>
                                                        </td>
                                                        <td class="text-left"></td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right"></td>
                                                        <td class="text-right"></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
                                                        <td class="text-right">'.$subtotal.'</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                                                        <td class="text-right">'.$eco.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>VAT (20%):</strong></td>
                                                        <td class="text-right">'.$vat.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Discount:</strong></td>
                                                        <td class="text-right">'.  $discount_price.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                                        <td class="text-right">'.$total.'</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="buttons">

                                            <div class="pull-right">
                                                <input type="submit" value="Confirm Order" id="button-confirm" class="btn btn-primary">
                                            </div>
                                          </form>
                                        </div>

                                    </div>
                                </div>';



                                ?>
                            </div>
                        </div>
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
