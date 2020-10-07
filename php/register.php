<?php 
    $con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
    if(mysqli_connect_errno())
    {
	    echo "database not connected";
    }
    $user = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $pass = crypt($password,'$5$cstech010=0000$id10176131_cstech');
    $ff = "SELECT * FROM users WHERE username='$user' OR email='$email'";
    $res = $con->query($ff);
    if(mysqli_num_rows($res)!=0)
    {
	    echo "failed";
    }
    else
    {
        if(empty($_FILES['file']['name']))
        {
                $ins = "insert into users (username,email,pass,userimg) values('$user','$email','$pass','none')";
		        if(mysqli_query($con,$ins))
		        {
		    	    echo "success";
		        }
		        else
		        {
		        	echo "notinsert";
		        }
        }
        else
        {
            $img = $_FILES['file']['name'];
            $location = "img/".$img;
            if(move_uploaded_file($_FILES['file']['tmp_name'],$location))
            {
                $ins = "insert into users (username,email,pass,userimg) values('$user','$email','$pass','$img')";
		        if(mysqli_query($con,$ins))
		        {
		    	    echo "success";
		        }
		        else
		        {
		        	echo "notinsert";
		        }
            }
            else
            {
                echo "notinsert";
            }
        }
	    
    }
	
$con->close();
?>