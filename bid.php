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

    $id=$_POST['auctionid'];
    $highest=$_POST['highest'];
    $password=$_POST['password'];
    $s="select highest from auction where auctionid='$id'";

$result = mysqli_query($con,$s);
$value = mysqli_fetch_object($result);
$name = $value->highest;

$username=$_SESSION['user'];
    $res=mysqli_query($con,"select password from customer where cust_name='$username'");
    $val= mysqli_fetch_object($res);
    $originalpass=$val->password;

$resu=mysqli_query($con,"select custId from customer where cust_name='$username'");
    $valu= mysqli_fetch_object($resu);
    $custom=$valu->custId;

    $resu1=mysqli_query($con,"select paintingid from auction where auctionid='$id'");
    $valu1= mysqli_fetch_object($resu1);
    $custom1=$valu1->paintingid;

    if($password==$originalpass && $highest>$name)
    {
        $sql = "UPDATE `auction` SET `custId` = '$custom',`highest`='$highest' WHERE `auction`.`auctionid` = '$id'";
        $sqli="update painting set flag='$custom' where paintingid=(select paintingid from auction where auctionid='$id')";
        if ($con->query($sql) === TRUE && $con->query($sqli)===TRUE)
        {
            echo "Record updated successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    else
    {
        echo 'Sorry';
        header("refresh:2; url=customer_home_page.php");
    }


header("refresh:2; url=customer_home_page.php");
$con->close();
?>
