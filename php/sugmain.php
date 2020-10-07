<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}

		$email =  $_COOKIE['usermail'];
		
		if(strcmp($email,"no")==0)
		{
			echo " ";
		}
		else
		{
		    $q1="SELECT * FROM suggest where Email='$email'";
		    $res = $con->query($q1);
		    if(mysqli_num_rows($res)==0)
	        {
	            echo "<script>nosuggg();</script>";
	        }
	        else
	        {
	            echo"<script>suggg();</script>";
	            
	            while($rows = $res->fetch_assoc()) {
	                $date=$rows["Date"];
	                $msg=$rows["Sugg"];
	                $id=$rows["id"];
	                echo"<div class=sug id=msg$id >
	                        <center>
	                            <h6>$date <i onclick=deletemsg($id)  class=fa-trash id=delete$id ></i></h6>
	                            <p id=t>$msg</p>
	                        </center>
	                     </div>";
	            }
	        }
		}
$con->close();
?>