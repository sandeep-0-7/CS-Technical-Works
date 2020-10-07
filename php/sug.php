<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}


session_start();


    $_SESSION['val']="";
	$text = $_POST['text'];
	$day = date("Y/m/d");
	if($_SESSION['val'] != $text)
	{

		$email =  $_COOKIE['usermail'];
		$q2 = "INSERT INTO suggest (Email,Date,Sugg) values('$email','$day','$text')";
		if($con->query($q2) === TRUE)
		{
		    $_SESSION['usermsg']=$email;
			$_SESSION['val']=$text;
			$q3="SELECT * FROM suggest where Email='$email'";
			$res = $con->query($q3);
	        echo"<script>suggg();</script>";
	            
	       while($rows = $res->fetch_assoc()) 
	       {
	                $date=$rows["Date"];
	                $msg=$rows["Sugg"];
	                $id =$rows["id"];
	                echo"<div class=sug id=msg$id >
	                        <center>
	                            <h6>$date <i onclick=deletemsg($id)  class=fa-trash id=delete$id ></i></h6>
	                            <p id=t>$msg</p>
	                        </center>
	                     </div>";
	       }
		}
	}
	else
	{
	    echo"repeat";
	}

$con->close();
?>