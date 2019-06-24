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
                                                    <td class="text-center"><strong>Order Total</strong></td>
                                                    <td class="text-center">$602.00</td>
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
                            <li><a><i class="fa fa-retweet visible-xs"></i> <span class="hidden-xs">Compare</span></a></li>
                            <li><a href="register.html">Register</a></li>
                              <li><?php


                                // code...
                                echo '


                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><p><i class="fa fa-user"></i>'.$_SESSION['user'].
                                    '<span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                    <li><a href="manage_account.php">My Account</a></li>
                                    <li><a>Order History</a></li>
                                    <li><a>Wish List</a></li>
                                      <li><a href="home.php">Logout</a></li>';


                                echo'</ul>
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

                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                    <li><a>Shopping Cart</a></li>
                </ul>
                <form class="form-horizontal" action="" method="post">
                    <fieldset id="account">
                        <legend>Select Painting </legend>
                        <div style="display: none;" class="form-group required">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">

                            </div>
                        </div>

                        <div class="form-group required">
                            <label for="pname" class="col-sm-2 control-label">Painting Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pname">
                                  <option value="" selected disabled hidden>Choose here</option>


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


                                while($row = $result->fetch_assoc() ) {

                                        if($row['flag']==0)
                                        {
                                          echo '  <option class="form-control"  value"'.$row["pname"].'">'.$row["pname"].'</option>';
                                        }


                                }
                              }

                                 ?>
                               </select>

                            </div>
                        </div>


                        <div class="form-group required">
                            <label for="pid" class="col-sm-2 control-label">Painting id</label>
                            <div class="col-sm-10">

                              <select class="form-control" name="paintid">
                                <option value="" selected disabled hidden>Choose here</option>


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


                              while($row = $result->fetch_assoc()) {
                                  if(row['flag']==0)
                                  {

                                echo '  <option class="form-control"  value"'.$row["paintingid"].'">'.$row["paintingid"].'</option>';
                                  }
                              }
                            }

                               ?>
                             </select>

                            </div>
                        </div>
                            <input type="submit" class="btn btn-primary" value="submit">
                    </fieldset>
                </form>
                <div class="row">
                    <div class="col-sm-12" id="content">
                        <h1>Shopping Cart</h1>
                        <form method="post">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="text-center"></td>
                                            <td class="text-left">PRODUCT NAME</td>
                                            <td class="text-left">THEME</td>
                                            <td class="text-left">QUANTITY</td>
                                            <td class="text-right">UNIT PRICE</td>
                                            <td class="text-right">TOTAL</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php

                                        require 'db_connect.php';


                                            $sql1="SELECT * from painting";
                                            $stmt=mysqli_stmt_init($con);

                                            if(!mysqli_stmt_prepare($stmt,$sql1))
                                            {
                                              header("Location:customer_home_page.php?error=sqlerror");
                                              exit();
                                            }
                                            else
                                            {

                                              mysqli_stmt_execute($stmt);
                                              $result=mysqli_stmt_get_result($stmt);




                                              while($row=mysqli_fetch_assoc($result))
                                              {





                                              if ($result->num_rows>0)
                                                {

                                                    if(isset($_POST["pname"]) && isset($_POST["paintid"]))
                                                    {
                                                      $pain_name=$_POST["pname"];
                                                      $pain_id=$_POST["paintid"];
                                                            if($pain_name==$row['pname'] && $pain_id==$row['paintingid'])
                                                            {
                                                              echo '<tr>
                                                              <td class="text-center">
                                                                  <a href=""><img src="'.$row["imageurl"].'" width="100"/></a>
                                                              </td>
                                                              <td class="text-left">'.$row["pname"].'<a href="#"></a>
                                                              </td>
                                                              <td class="text-left">'.$row["theme"].'</td>
                                                              <td class="text-center"><div style="max-width: 200px;" class="input-group btn-block">
                                                                      <p class="clearfix">
                                                                          <p>1</p>
                                                                      </p>
                                                                      <div>
                                                                          <button class="btn btn-primary" type="submit"><i class="fa fa-refresh"></i></button>
                                                                          <button class="btn btn-primary" type="button"><i class="fa fa-times-circle"></i></button>
                                                                      </div>
                                                                  </div></td>
                                                              <td class="text-right">'.$row["cost"].'</td>
                                                              <td class="text-right">'.$row["cost"].'</td>
                                                          </tr>';
                                                          $userid=$_SESSION['userid'];
                                                            $discount="SELECT * from customer where custId=$userid";
                                                            $disct_result=$con->query($discount);
                                                            $drow=$disct_result->fetch_assoc();

                                                          $subtotal=$row['cost'];
                                                            $vat=$row['cost']*0.2;
                                                            $eco=$row['cost']+2;
                                                            $total=0;
                                                            $disct_Amt=0;
                                                            if($drow['num_of_paintings']<=5)
                                                            {
                                                            $total=$vat+$eco;
                                                          }
                                                          else if($drow['num_of_paintings']>5 && $drow['num_of_paintings']<=15)
                                                          {
                                                              $disct_Amt=0.05*($vat+$eco);
                                                            $total=$vat+$eco-$disct_Amt;
                                                          }
                                                          else if($drow['num_of_paintings']>15 && $drow['num_of_paintings']<=30)
                                                          {
                                                            $disct_Amt=0.1*($vat+$eco);
                                                          $total=$vat+$eco-$disct_Amt;
                                                          }
                                                          else if($drow['num_of_paintings']>30 && $drow['num_of_paintings']<=50)
                                                          {
                                                            $disct_Amt=0.15*($vat+$eco);
                                                          $total=$vat+$eco-$disct_Amt;
                                                          }
                                                          else if($drow['num_of_paintings']>50)
                                                          {
                                                            $disct_Amt=0.3*($vat+$eco);
                                                          $total=$vat+$eco-$disct_Amt;
                                                          }

                                                          echo '                </tbody>
                                                                      </table>
                                                                  </div>
                                                              </form>

                                                              <br class="hidden-xs">
                                                              <div class="row">

                                                                <div class="col-sm-4 col-sm-offset-8 col-xs-12">
                                                                      <table class="table table-bordered">
                                                                          <h3><strong style="float: right">Pricing list</strong></h3>
                                                                          <tbody><tr>
                                                                                  <td class="text-right"><strong>Sub-Total:</strong></td>
                                                                                  <td class="text-right">'.$subtotal.'</td>
                                                                              </tr>

                                                                              <tr>
                                                                                  <td class="text-right">Eco Tax (-2.00):</td>
                                                                                  <td class="text-right">'.$eco.'</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td class="text-right">VAT (20%):</td>
                                                                                  <td class="text-right">'.$vat.'</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td class="text-right">Discount:</td>
                                                                                  <td class="text-right">'.$disct_Amt.'</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td class="text-right"><strong>Order Total:</strong></td>
                                                                                  <td class="text-right">'.$total.'</td>
                                                                              </tr>
                                                                          </tbody></table>
                                                                  </div>;

                                                              </div>
                                                              <div class="buttons clearfix">
                                                                  <div class="pull-left"><a class="btn btn-default" href="product.html">Continue Shopping</a></div>
                                                                  <div class="pull-right"><a class="btn btn-primary" href="checkout.php">Checkout</a></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>';
                                          $_SESSION['cost']=$subtotal;

                                              $_SESSION['vat']=$vat;
                                            $_SESSION['total'] =$total;
                                              $_SESSION['eco']=$eco;
                                              $_SESSION['discount_price']=$disct_Amt;
                                                  $_SESSION['pid']=$row['paintingid'];



                                                            }
                                                        else {
                                                          echo "";

                                                        }
                                                  }
                                                  else {
                                                      echo '';

                                                       }

                                              }
                                              else {
                                                echo 'no records';

                                              }

                                        }


}


                                      ?>

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
