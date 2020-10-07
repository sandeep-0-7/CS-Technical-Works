<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}

		$email = $_POST["email"];
		$q1="SELECT * from users where email='$email'";
		$res = $con->query($q1);
		if(mysqli_num_rows($res)>=1)
	    {
	        setcookie("usermail",$email,time() + (100 * 365 * 24 * 60 * 60));
	        echo "success";   
	    }
	    else
	    {
	        echo "failed"; 
	    }
$con->close();
?>