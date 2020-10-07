<?php 
    $con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
    if(mysqli_connect_errno())
    {
	    echo "database not connected";
    }
    $email = $_COOKIE["usermail"];
    $password = $_POST["pass"];
    $pass = crypt($password,'$5$cstech010=0000$id10176131_cstech');

	$q1 = "UPDATE users SET pass='$pass' where email='$email'";
	if($con->query($q1) === TRUE)
	{
	    echo"success";
	}
	else{
	    echo"failed";
	}
	
$con->close();
?>