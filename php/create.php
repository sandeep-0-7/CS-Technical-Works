<?php
$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}
if(isset($_COOKIE['admin']))
{
    $title = $_POST["title"];
    $des = $_POST["des"];
    $des2 = $_POST["des2"];
    $links = $_POST["links"];
    $img = $_FILES['file']['name'];
    $location = "img/".$img;
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location))
    {
        $q1 = "insert into tech (Tit,Des,Des2,Links,Img) values('$title','$des','$des2','$links','$img')";
        if(mysqli_query($con,$q1))
            echo "suc";
        else
            echo "notsuc";
    }
}

?>