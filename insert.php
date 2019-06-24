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
    $selected_val = $_POST['Color'];
    $Err="";
    $fname=$_POST['firstname'];

    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $Err = "Only letters and white space allowed";
    }

    $em=$_POST['email'];
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-zA-Z]{2,}$/",$em))
    {
        $Err = "Email is required";
    }

    $telephone=$_POST['telephone'];
    if (strlen($telephone)<=10) {
    $Err = "Telephone number is required";
    }
    $address=$_POST['address'];
    $password=$_POST['password'];

    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
    $Err='Password must contain 6 characters of letters, numbers and
    at least one special character.';
	}
    $confirm=$_POST['confirm'];
    $pass2 = test_input($_POST["confirm"]);

	if($_POST['password'] != $_POST['confirm'])
    {
	   $Err="Passwords do not match Enter above password!";
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($Err=="")
    {

            if($selected_val=="customer")
            {
                $sql = "INSERT INTO customer(cust_name,telephone,cust_address,cust_email,password) VALUES('$fname',$telephone, '$address','$em','$password')";
            }
            else if($selected_val=="artist")
            {
                $sql = "INSERT INTO artist(artst_name,artst_email,telephone,artst_address,password,num_of_paintings) VALUES('$fname', '$em',$telephone, '$address','$password',0)";
            }
            else
            {
                $sql = "INSERT INTO gallery(phone_no,address,gname) VALUES ($telephone,'$address','$fname')";
            }
            if ($con->query($sql) === TRUE)
            {
                echo "New record created successfully";

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
//header("refresh:2; url=register.php");
$con->close();
?>
