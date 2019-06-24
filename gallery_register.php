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

                    <div class="rightside">
                        <ul class="top-menu-list">


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

                        </div>
                    </div>
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




          <div class="container">
            <div class="col-sm-12 " id="content">
                  <form class="form-horizontal" action="" method="post">
                    <fieldset id="account">
                        <legend> Details</legend>
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
                            <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
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





          <?php
          require 'db_connect.php';
          if(isset($_POST['firstname']) && isset($_POST['telephone']) && isset($_POST['address']))
          {
                    $fname=$_POST['firstname'];
                      $Err="";
                    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                      $Err = "Only letters and white space allowed";
                        }

                        $telephone=$_POST['telephone'];
                        if (empty($telephone)) {
                        $Err = "Telephone number is required";
                        }
                        $address=$_POST['address'];
                        if($Err=="")
                        {

                    $sql = "INSERT INTO gallery(phone_no,address,gname) VALUES ($telephone,'$address','$fname')";
                    if ($con->query($sql) === TRUE)
                    {
                        echo '<div class="container">New record created successfully</div>';

                    }
                    else
                    {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }

                  }
                  else
                  {
                      echo $Err;
                  }
              }
              else {
                echo '';
              }


           ?>


            <!---end navbar--->
        </header>
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
