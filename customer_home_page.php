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
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/slider.js" type="text/javascript"></script>





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

                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <table class="table table-striped">
                                        <tbody><tr>
                                                <td class="text-center">
                                                    <a href="single-product.html"><img src="images/img1.jpg" width="60"/></a>
                                                </td>
                                                <td class="text-left"><a href="single-product.html">Painting</a>
                                                </td>
                                                <td class="text-right">x 0</td>
                                                <td class="text-right"></td>
                                                <td class="text-center"><button class="btn btn-primary btn-xs" type="button"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                        </tbody></table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody><tr>
                                                    <td class="text-center"><strong>Sub-Total</strong></td>
                                                    <td class="text-center">₹500.00</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-center">Coupon Code:</td>
                                                    <td class="text-center">₹0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Gift Voucher:</td>
                                                    <td class="text-center">₹0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Eco Tax (-2.00):</td>
                                                    <td class="text-center">₹2.00</td>
                                                </tr>
                                                <tr>
                                                    < td class="text-center">VAT (20%):</td>
                                                    <td class="text-center">₹100.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><strong>Order Total</strong></td>
                                                    <td class="text-center">₹602.00</td>
                                                </tr>
                                            </tbody></table>
                                        <p class="text-center">
                                            <a href="cart.php" class="btn btn-primary"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;

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

                                            <?php


                                              require 'db_connect.php';

                                                $sql="SELECT DISTINCT theme FROM painting";
                                                $result=$con->query($sql);

                                                while($row=$result->fetch_array())
                                                {

                                                echo '<li><a href="" class="dropdown">'.$row['theme'].'</a></li>';

                                              }

                                             ?>


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
                                            <li><a href="gallery.php">Visit to gallery</a></li>

                                        <li><a>Contact</a></li>
                                          <li><a href="customer_auction.php">View auctions</a></li>
                                          <li><a href="Return_painting.php">Return Painting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!---end navbar--->
        </header>

        <!--middle content--->
        <!--slider--->
        <div class="container slidder">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/banner1.jpg" alt="banner1" style="width: 100%; height: 400px">
                    </div>

                    <div class="item">
                        <img src="images/banner2.jpg" alt="banner2" style="width: 100%; height: 400px">
                    </div>

                    <div class="item">
                        <img src="images/banner3.jpg" alt="banner3" style="width: 100%; height: 400px">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>

                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>

                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <!---end-->

        <!---top-block1-->
        <div class="container">
            <div class="top-block-one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <div class="fa-icon"><i class="fa fa-paper-plane-o"></i></div>
                            <div class="offer">
                                <h3>Free Shipping</h3>
                                <h5></h5>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fa-icon"><i class="fa fa-check"></i></div>
                            <div class="offer">
                                <h3>Money back guarantee</h3>
                                <h5>We offer 14 day easy return</h5>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fa-icon"><i class="fa fa-commenting-o"></i></div>
                            <div class="offer">
                                <h3>Online support 24/7</h3>
                                <h5>Our operators are available 24/7</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---end-->

        <!---latest product-->
        <div class="container">
            <div class="box latest-product-heading">
                <div class="box-heading">
                    <h3>Latest Paintings</h3>
                </div>
                <div class="box-content">
                    <div class="row">



                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "student");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM painting ORDER BY paintingid ";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                        // output data of each row


                        while($row = $result->fetch_assoc() ) {

                              if($row['flag']==0)
                              {


                                        echo '
                                        <div class="product-layout col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <div class="image" style="position: relative"><a href="single-product.html"><img src="'.$row["imageurl"].'" class="img-responsive"></a>
                                                <div class="quickview">';
                                        ?>

                                                    <a class="line" href="cart.php">

                                                      <i class="fa fa-shopping-cart "></i></a>
                                                    <a class="line"> <i class="fa fa-heart-o "></i></a>
                                                    <a class="line"> <i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.html"><?php echo $row["pname"]; ?></a></div>
                                                <div class="price">
                                                    <span class="price-new">₹<?php echo $row["cost"]; ?></span><br>
                                                      <span class="price-new">Painting Id:<?php echo $row["paintingid"]; ?></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                      }


}
}
else { echo "0 results"; }

?>





                    </div>
                </div>
            </div>


        </div>
        <!--end--->






        <div class="clearfix"></div>
        <!---end-->
        <div class="container">
          <div class="trending">
              <h3>What's Trending</h3>
        </div>
        </div>

              <div class="container">
                <div class="wrapper">
                 <div class="slider" id="trend-content">
                   <div class="slide1">
                   <img src="images/pro1.jpg"></img>
                   <img src="images/pro2.jpg"></img>
                   <img src="images/pro3.jpg"></img>
                   <img src="images/pro4.jpg"></img>
                   <img src="images/pro5.jpg"></img>
                   <img src="images/pro6.jpg"></img>
                   </div>

                   <div class="slide1">
                   <img src="images/pro1.jpg"></img>
                   <img src="images/pro2.jpg"></img>
                   <img src="images/pro3.jpg"></img>
                   <img src="images/pro4.jpg"></img>
                   <img src="images/pro5.jpg"></img>
                   <img src="images/pro6.jpg"></img>
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









    </body>
</html>
