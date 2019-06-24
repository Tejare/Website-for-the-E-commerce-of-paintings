<?php

    $con = new mysqli('127.0.0.1','root', '');

    if(!$con)
    {
        echo 'not connected to server';
    }

    if(!mysqli_select_db($con,'student'))
    {
        echo 'database not selected';
    }
?>
