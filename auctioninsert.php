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

    $fname=$_POST['paintingid'];
    $s="select pname from painting where paintingid=$fname";


$result = mysqli_query($con,$s);

if(!$result)
{
  header("Location:auction.php?error=paintingdoesnotexit");
}
else {



            $value = mysqli_fetch_object($result);
            $name = $value->pname;
                $starttime=$_POST['starttime'];


                $endtime=$_POST['endtime'];
                $password=$_POST['password'];
                $username=mysqli_real_escape_string($con,$_SESSION['user']);

                $res=mysqli_query($con,"select password from artist where artst_name='$username'");
                $val= mysqli_fetch_object($res);
                $originalpass=$val->password;
                $resu=mysqli_query($con,"select imageurl from painting where pname='$name'");
                $valu= mysqli_fetch_object($resu);
                $url=$valu->imageurl;
                $str1="";
                $str2="";
                $str1=$name;
                $str2=$originalpass;
                if($password==$str2)
                {
                  $checkdate1=date('Y-m-d H:i:s',strtotime($endtime));
                  $checkdate2=date('Y-m-d H:i:s',strtotime($starttime));
                  if(    $checkdate1==$endtime &&  $checkdate2==$starttime)
                  {
                    $sql = "INSERT INTO auction (name,starttime,endtime,paintingid,highest,custId,imgurl) VALUES ('$str1','$starttime', '$endtime','$fname' , 0,0,'$url')";
                      if ($con->query($sql) === TRUE)
                      {
                          echo "New record created successfully";
                          header("refresh:2; url=confirmed_home_login.php");
                      }
                      else
                      {
                          echo "Error: " . $sql . "<br>" . $con->error;
                      }
                  }
                  else {
                    header("Location:auction.php?datetime_is_invalid");
                      }
                }
                else
                {
                    echo 'wrong password.';
                    header("refresh:2; url=confirmed_home_login.php");
                    $con->close();
                }
}


?>
