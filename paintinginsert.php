<?php
session_start();



    $con = new mysqli('127.0.0.1','root', '');

    if(!$con)
    {
        echo 'not connected to server';
    }

    if(!mysqli_select_db($con,'student'))
    {
        echo 'database not selected';
    }

    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $theme=$_POST['theme'];
    $imgurl=$_POST['url'];
    $flag=0;
    $password=$_POST['password'];
    $current_date = date("Y-m-d H:i:s");





    $sql1="SELECT * from artist";
    $stmt=$con->query($sql1);

    if(!$stmt)
    {
      header("Location:paintingform.php?error=sqlerror");
      exit();
    }
    else
    {

      while($row=$stmt->fetch_assoc())
      {

        if($stmt->num_rows>0)
        {
                      $user_id=$row['artst_id'];

                      if($password!=$row['password'])
                      {
                        //header("Location:paintingform.php?error=wrongpwd");
                        echo $password."\n";
                          echo $row['password']."\n ";
                      }
                      else if($password==$row['password'])
                      {

                              $sql = "INSERT INTO painting(pname,theme,cost,flag,timeofupload,imageurl,artst_id) VALUES ('$name', '$theme','$cost' ,'$flag','$current_date','$imgurl',$user_id)";
                              $sql2="UPDATE artist set num_of_paintings=num_of_paintings+1 where artst_id=$user_id";
                              if ($con->query($sql) === TRUE && $con->query($sql2)) {
                                header("Location:paintingform.php?Upload=success");
                              } else {

                              header("Location:paintingform.php?error=$con->error");
                              exit();
                            }

                      }
                            else {
                              header("Location:login.html?error=wrongpwdforsomereasons");
                              exit();
                            }


          }
          else {
            echo 'no user';
          }

      }
    }





//header("Location:register.php");
$con->close();
?>
