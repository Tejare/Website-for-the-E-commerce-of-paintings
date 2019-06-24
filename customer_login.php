

<html>
<title>Welcome</title>
<head>






		<?php




		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="student";

					$username=$_POST['email'];
					$password=$_POST['password'];

		if(empty($username) || empty($password))
		{

		header("Location: login.html?error=emptyfields");
			exit();


		}
		else
		{
			//connection for sql

						$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);



							if (!$conn) {
							die("Connection failed: " . $conn->connect_error());
							}


							$selected_val=$_POST['Color'];

							$sql;
							if($selected_val=='customer')
							{
									$sql="SELECT * from customer where cust_email=?";





									$stmt=mysqli_stmt_init($conn);

												if(!mysqli_stmt_prepare($stmt,$sql))
												{
												header("Location:login.html?error=sqlerror");
												exit();
												}
												else
												{
												mysqli_stmt_bind_param($stmt,"s",$username);
												mysqli_stmt_execute($stmt);
												$result=mysqli_stmt_get_result($stmt);
												$row=mysqli_fetch_assoc($result);
													if($row['cust_email']==$username)
													{


															if($password!=$row['password'])
															{
																header("Location:login.html?error=wrongpwd");



															}
															else if($password==$row['password'])
															{


																session_start();
																	$_SESSION["user"]=$row['cust_name'];
																	$_SESSION["userid"]=$row["custId"];
																header("Location:customer_home_page.php?login=success");

															}
															else {
																header("Location:login.html?error=wrongpwddusra_else_wala");
																exit();
															}
													}
													else
													{
														header('Location:register.php?error=nouser');
														exit();
													}
											}
										}//selected ka if





											//------------------------------------------artist login






									else {

													$sql="SELECT * from artist where artst_email=?";


													$stmt=mysqli_stmt_init($conn);

													if(!mysqli_stmt_prepare($stmt,$sql))
													{
													header("Location:login.html?error=sqlerror");
													exit();
													}
													else
													{
													mysqli_stmt_bind_param($stmt,"s",$username);
													mysqli_stmt_execute($stmt);
													$result=mysqli_stmt_get_result($stmt);
													$row=mysqli_fetch_assoc($result);
														if($row['artst_email']==$username)
														{


																if($password!=$row['password'])
																{
																	header("Location: login.html?error=wrongpwd");



																}
																else if($password==$row['password'])
																{


																	session_start();
																		$_SESSION["user"]=$row['artst_name'];
																		$_SESSION["userid"]=$row['artst_id'];
																	header("Location: confirmed_home_login.php?login=success");

																}
																else {
																	header("Location:login.html?error=wrongpwddusra_else_wala");
																	exit();
																}
														}
														else
														{
															header('Location:register.php?error=nouser');
															exit();
														}
												}


									}







		}


$stmt->close();
$conn->close();

//$2y$10$hKX/sSmbRCyne8jRZZj.W.7lXUFDQ5xuJ

?>









</div>
<link rel="stylesheet" type="text/css" href="sign_up.css">


</body>
</html>
