<?php
$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}
if(isset($_COOKIE["admin"]))
{
$tit = $_REQUEST["q"];
$q1 = "select * from tech where Tit='$tit'";
$res = $con->query($q1);
$row = $res->fetch_assoc();
$ret = array("title"=>$row["Tit"],
            "des"=>$row["Des"],
            "links"=>$row["Links"],
            "des2"=>$row["Des2"],
            "img"=>$row["Img"]
            );
    echo json_encode($ret);
}
?>

