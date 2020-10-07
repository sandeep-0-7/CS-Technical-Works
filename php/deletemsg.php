<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");

if(mysqli_connect_errno())
{
	echo "database not connected";
}

$id = $_POST["id"];
$q2 = "DELETE FROM suggest WHERE id=$id";

if($con->query($q2) === TRUE)
{
    echo"success";
}
else
{
    echo"failed";
}

$con->close();
?>