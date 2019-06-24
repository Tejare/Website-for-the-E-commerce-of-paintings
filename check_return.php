<?php

session_start();
 require 'db_connect.php';

    if(isset($_POST["pname"]) && ($_POST["paintid"]))

    {




                      $pname=$_POST["pname"];
                      $paintid=$_POST["paintid"];


                      $user=mysqli_real_escape_string($con,$_SESSION['userid']);

                      $sql1="SELECT * FROM customer where custId=$user";

                      $result1=$con->query($sql1);

                      if(!$result1)
                      {
                        echo 'connection_error/sqlerror'.$sql1;
                      }
                      else {

                            $row1=$result1->fetch_assoc();



                            $paintid=mysqli_real_escape_string($con,$paintid);
                            $sql2="SELECT * FROM painting where paintingid=$paintid";
                            $result2=$con->query($sql2);

                              if(!$result2)
                              {
                                  echo 'connection_error/sqlerror2';
                              }
                              else {

                                  $row2=$result2->fetch_assoc();

                                    if($row2['custId']==$row1['custId'])
                                    {


                                        if($row2['flag']!=0)
                                        {
                                          $sql3="UPDATE painting set flag=0,custID=NULL where paintingid=$paintid";

                                          $result3=$con->query($sql3);
                                              if(!$result3)
                                              {
                                                header("Location:customer_home_page.php?cannot return painting");
                                                exit();
                                              }
                                              else {
                                                echo 'successfully returned';
                                              header("refresh:2; url=customer_home_page.php");
                                                exit();
                                              }






                                        }
                                        else {
                                          echo'it is not for returning';
                                        }

                                    }
                                    else {
                                      echo 'custid is not same';
                                    }


                              }



                          }





    }
    else {
      echo 'empty fields';
    }




 ?>
