<?php


session_start();

require 'db_connect.php';



  if(!empty($_SESSION))
  {

                $pid=mysqli_real_escape_string($con,$_SESSION['pid']);


                            $sql= "SELECT * FROM painting where paintingid=$pid";
                              $result=$con->query($sql);
                        if(!$result)
                        {
                          header("Location:customer_home_page.php?error=sqlerror");
                          exit();
                        }
                        else
                        {




                          $row=$result->fetch_assoc();





                                        if($row['flag']==0)     //it will check if the painting is ready to hire
                                        {
                                          $cname=mysqli_real_escape_string($con,$_SESSION['user']);
                                          $in_custid= "SELECT * FROM customer where cust_name='$cname'";
                                          $result2 = $con->query($in_custid);

                                          $row2=$result2->fetch_assoc();

                                          $cust=$row2['custId'];




                                                    //functions used to use the data for query
                                              $pid=mysqli_real_escape_string($con,$_SESSION['pid']);

                                                $up_query="UPDATE painting SET flag=1,custId=$cust where paintingid=$pid";
                                                $up_query2="UPDATE customer set num_of_paintings=num_of_paintings+1 where custId=$cust";

                                                if(mysqli_query($con,$up_query) && mysqli_query($con,$up_query2))
                                                {
                                                  header("Location:customer_home_page.php?flag=1");
                                                exit();
                                              }
                                              else {

                                                header("Location:customer_home_page.php?flag=1");
                                              exit();
                                              }
                                               //checking session user and customer name

                                        } //checking if flag is zero
                                        else {
                                          header("Location:customer_home_page?flag=0cannotchange");
                                          exit();
                                              }


                                echo $row['paintingid'];




                      }


}
else {
  header("customer_home_page.php?valid_login");
}
$con->close();

?>
