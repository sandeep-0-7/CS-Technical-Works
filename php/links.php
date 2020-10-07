<?php
$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}
if(isset($_COOKIE['admin']))
{
    $link = $_POST["link"];
    $linkname = $_POST["name"];
    $q1 = "insert into links (Link,linkname) values('$link','$linkname')";
    if(mysqli_query($con,$q1))
        echo "suc";
    else
        echo "notsuc";
}

?>