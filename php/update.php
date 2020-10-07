<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}
if(isset($_COOKIE["admin"]))
{
$title = $_POST["title"];//$_REQUEST["t"];
$des = $_POST["des"];//$_REQUEST["de"];
$des2 = $_POST["des2"];//$_REQUEST["de2"];
$links = $_POST["links"];//$_REQUEST["li"];
//$img = $_POST["img"];//$_REQUEST["im"];

$q1 = "update tech set Des='$des',Des2='$des2',Links='$links' where Tit='$title'";
if($con->query($q1))
    echo "successfully updated";
else
    echo "not updated";
}

?>