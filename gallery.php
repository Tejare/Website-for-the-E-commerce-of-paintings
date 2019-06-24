<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to MoeArt</title>
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
                                <span id="cart-total">0 item(s)</span>
                                <i class="fa fa-caret-down"></i>
                            </button>

                        </div>
                    </div>
                    <div class="rightside">
                        <ul class="top-menu-list">

                            <li><a id="wishlist-total"><i class="fa fa-heart-o fa-hover-hidden fa-fw"></i><i class="fa fa-heart fa-hover-show fa-fw"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>



                            <li>
							<?php


							echo '


							<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><p><i class="fa fa-user"></i>'.$_SESSION['user'].
									'<span class="caret"></span></button>
									<ul class="dropdown-menu">



                  <li><a>Wish List</a></li>
									  <li><a href="home.php">Logout</a></li>




									</ul>
								  </div>
								</div>';


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
                                    <form id="form-currency" >
                                        <div class="btn-group pull-right">


                                        </div>
                                    </form>
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
            <div class="container">
              <ul class="breadcrumb">
                  <li><a href="customer_home_page.php"><i class="fa fa-home"></i></a></li>
                  <li><a>Visit to gallery</a></li>
              </ul>
            </div>


            <div class="container">
              <div class="col-sm-3">
                <?php
                  require 'db_connect.php';

                  $sql="SELECT * FROM gallery";
                  $result=$con->query($sql);
                if($result->num_rows >0)
                {

                  while($row=$result->fetch_assoc())
                    {
                        echo  '<div class="dropdown">
                          <button class="list-group-item dropdown-toggle" type="button" data-toggle="dropdown">'.$row['gname'].
                          '<span class="caret"></span></button>
                          <ul class="dropdown-menu">

                            <li><a>Address: '.$row['address'].'</a></li>

                            <li><a>Contact: '.$row['phone_no'].'</a></li>


                          </ul>
                        </div>';
                      }

            }
            else {
              echo 'there are no registered galleries';
            }
            ?>











              </div>
                <div class="box latest-product-heading col-sm-9">


                    <div class="box-heading">
                        <h3>All Paintings</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">




                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "student");
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }



                            $sql = "SELECT * FROM painting";
                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                            // output data of each row


                            while($row = $result->fetch_assoc()  ) {




                                echo '
                                <div class="product-layout col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="product-thumb transiction">
                                    <div class="image" style="position: relative"><a href="single-product.html"><img src="'.$row["imageurl"].'" class="img-responsive"></a>
                                        <div class="quickview">


                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="product-name"><a href="">'.$row["pname"].'</a></div>

                                    </div>
                                </div>
                            </div>';


                          }


    }

    else { echo "0 results"; }

    ?>





                    </div>
                </div>


            </div>

        </div>
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
