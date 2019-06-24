<?php


                            require 'db_connect.php';
                            $cust_name=mysqli_real_escape_string($con,$_SESSION['user']);
                            $sql1="SELECT * from customer where cust_name='$cust_name'";
                            $cresult=$con->query($sql1);
                            $c_row=$cresult->fetch_assoc();
                            $custid=$c_row['custId'];

                              $sql2="SELECT * from painting where custId=$custid";
                              $presult=$con->query($sql2);
                              $p_row=$cresult->fetch_assoc();






  ?>
