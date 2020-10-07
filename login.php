<?php 
    $con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
    if(mysqli_connect_errno())
    {
	    echo "database not connected";
    }
    $user = $_POST["user"];
    $password = $_POST["pass"];
    $pass = crypt($password,'$5$cstech010=0000$id10176131_cstech');
    if($_POST["admin"]=="yes")
	{
	    $temppass=crypt("cstech321",'$5$cstech010=0000$id10176131_cstech');
	    if($user == "cstech123" && $pass == $temppass)
	    {
	        setcookie("admin","admin",time() + (100 * 365 * 24 * 60 * 60));
	        echo "admin";
	    }
	    else
	    {
	        echo "yesmsg--admin var set but credentials wrong";
	    }
	}
	else
	{
	    $q1 = "SELECT username,email,userimg FROM users WHERE username='$user' AND pass='$pass' OR email='$user' AND pass='$pass'";
	    $res = $con->query($q1);
	    if(mysqli_num_rows($res)==1)
	    {
		    $usermail = "usermail";
		    $userimg = "userimg";
		    $r = $res->fetch_assoc();
		    setcookie($usermail,$r["email"],time() + (100 * 365 * 24 * 60 * 60));
		    setcookie($userimg,$r["userimg"],time() + (100 * 365 * 24 * 60 * 60));
		    setcookie("uname",$r["username"],time() + (100 * 365 * 24 * 60 * 60));
		    if(isset($_COOKIE["uname"]))
		    {
		        
		        echo "home";
		    }
		    else
		    {
		        echo "yesmsg--uname cookie not set--";
		    }
	    }
	    else
	    {
	        echo "yesmsg--user not--found--";
	    }
	}
	
$con->close();
?>