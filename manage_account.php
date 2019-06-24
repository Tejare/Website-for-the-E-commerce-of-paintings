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
                                                    <td class="text-center">VAT (20%):</td>
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
                  <li><a>My account</a></li>
              </ul>

              <aside class="col-sm-3 hidden-xs" id="column-left">
                  <div class="list-group">

                      <a class="list-group-item" href="#" data-toggle="popover">My Membership</a>



                        <?php

                          require 'db_connect.php';
                          $cname=mysqli_real_escape_string($con,$_SESSION['user']);
                        $result=mysqli_query($con,"SELECT num_of_paintings from customer where cust_name='$cname'");
                        $data=mysqli_fetch_assoc($result);



                        $num=$data['num_of_paintings'];
                        if($num<=5)
                        {

                          ?>

                        <script>
                        $(document).ready(function(){
                            $('[data-toggle="popover"]').popover(
                              {
                                placement:'left',
                                trigger:'hover',
                                html:true,
                                content:'<img src="images/bronze.jpg">Bronze</img>'

                            });
                        });
                        </script>

                          <?php

                            }
                            else if($num>5 && $num<=10)
                            {

                           ?>
                           <script>
                           $(document).ready(function(){
                               $('[data-toggle="popover"]').popover(
                                 {
                                   placement:'left',
                                   trigger:'hover',
                                   html:true,
                                   content:'<img src="images/Silver-medal.png">Silver</img>'

                               });
                           });
                           </script>


                           <?php
                            }
                            else if($num>10 && $num<=15)
                            {


                            ?>

                            <script>
                            $(document).ready(function(){
                                $('[data-toggle="popover"]').popover(
                                  {
                                    placement:'left',
                                    trigger:'hover',
                                    html:true,
                                    content:'<img src="images/Gold-medal.png">Gold</img>'

                                });
                            });
                            </script>

                            <?php

                          }
                          else if($num>15)
                          {


                             ?>

                             <script>
                             $(document).ready(function(){
                                 $('[data-toggle="popover"]').popover(
                                   {
                                     placement:'left',
                                     trigger:'hover',
                                     html:true,
                                     content:'<img src="images/diamond.jpg">Diamond</img>'

                                 });
                             });
                             </script>

                        <?php


                        }
                         ?>





      <div class="dropdown">
      <button class="list-group-item dropdown-toggle" type="button" data-toggle="dropdown">My orders
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <?php

        require 'db_connect.php';
        $custid=mysqli_real_escape_string($con,$_SESSION['userid']);


          $sql2="SELECT * from painting where custId=$custid";
          $presult=$con->query($sql2);

          if($presult->num_rows > 0)
          {


                  while($p_row=$presult->fetch_assoc())
                  {

                        if($p_row['paintingid']!=NULL)
                        {

                        echo  '<li><a href="#">'. $p_row["pname"].'  <img src="'.$p_row["imageurl"].'"  height="75" width="100"></img></a></li><br>';

                        }

                        else {
                          echo '<li><a href="#">No Orders</a></li>';
                        }
                  }
          }
          else {
            // code...
              echo '<li><a href="#">No Orders</a></li>';
          }

       ?>

      </ul>
    </div>










                  
                      <a class="list-group-item">Forgot Password</a>


                  </div>

              </aside>


              <div class="col-sm-9" id="content">
                  <div class="row">

                      <div class="col-sm-12">
                          <div class="well">
                              <div class="heading-text">


                                <div class="media">
                                  <div class="media-left">
                                    <img src="images/img_avatar3.png" class="media-object" style="width:160px">
                                  </div>
                                  <div class="media-body" >
                                    <h4 class="media-heading"><?php echo $_SESSION['user'] ?></h4>
                                  </div>
                                  <ul class="media">

                                    <?php
                                    require 'db_connect.php';
                                    $cname=mysqli_real_escape_string($con,$_SESSION['user']);
                                    $sql = "SELECT * FROM customer where cust_name='$cname'";
                                    $result = $con->query($sql);

                                    if(!$result)
                                    {

                                      echo $con->error;

                                    }
                                    else {




                                    $row=$result->fetch_array();

                                              echo ' <li>My Email:'.$row['cust_email'].'</li>
                                              <li>Contact No. '.$row['telephone'].'</li>
                                              <li>Address :-'.$row['cust_address'].'</li>
                                              <li>Number of paintings hired:-'.$row['num_of_paintings'].'</li>';


                                                }





                                     ?>

                                  </ul>
                                </div>




                              </div>

                          </div>
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
