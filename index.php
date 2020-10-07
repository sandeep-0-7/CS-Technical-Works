<?php

$con = mysqli_connect("localhost","id10176131_cstech","12345","id10176131_cstech");
if(mysqli_connect_errno())
{
	echo "database not connected";
}


$q1 = "SELECT * FROM tech ORDER BY Id DESC LIMIT 10";
$res = $con->query($q1);
$res2 = $con->query($q1);

if(!($res->num_rows>0))
{
	echo "no rows";
}

$q5 = "SELECT * FROM links ORDER BY Id DESC";
$r2 =$con->query($q5);

$q6 = "SELECT Url FROM videos";
$res5 = $con->query($q6);

$m = "usermail";
if(isset($_COOKIE[$m]))
{
    if($_COOKIE[$m]!="no")
    {
	    $mail2 = $_COOKIE[$m];
	    $q4 = "SELECT * FROM suggest WHERE name = '$mail2'";
	    $r = $con->query($q4);
        $q8 = "SELECT username,userimg FROM users WHERE email='$mail2'";
	    $res8 = $con->query($q8);
		$r100 = $res8->fetch_assoc();
    }
} 
else
{
	setcookie("usermail","no");
	setcookie("uname","null");
}

$con->close();

?>

<HTML>
<head>
<title> Loading... </title>
<link rel="icon" href="img/logo.png" type="image/x-icon" /> 
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width height=device-height,initial-scale=1.0" />
<meta http-equiv="X-UA-compatible" content="ie=edge" /> 

<!-- css files  -->
<link rel="stylesheet/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" />
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<!--<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">-->
<link href="css/toggleswitch.css" rel="stylesheet">

<!-- js files -->

 <script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script data-ad-client="ca-pub-8556654195967172" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/darkmode.js" ></script>
 <script type="text/javascript" src="js/smtp.js" ></script>
 
 <div class='loader' style='color:white;height:100%;width:100%;z-index:5;position:fixed;top:37%;text-align:center;display:block;'>
    <i class='fa fa-spinner fa-spin' style='font-size:100px' aria-hidden='true'></i>
</div>
<divvv>
</divvv>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body{
    scroll-behavior: smooth;
}
fieldset.scheduler-border {
    border: 2px groove #1affff !important;
    padding: 50px; !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
    width: 50%;
    border-radius:20px;
}
#mc_embed_signup{
    background:#fff;
    clear:left;
    font:14px Helvetica,Arial,sans-serif;
    display:none;
}
legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    border: none; /* Or auto */
    background-color:#00e6e6 !important;
    border-radius:5px;
    padding:0 10px; /* To give a bit of padding on the left and right */
}
divvv{
    position:fixed;
    height:100%;
    z-index:4;
    width:100%;
    background-color:rgba(0,0,0,0.75);
}
.loadingdiv {
    width: 200px;
    height: 7px;
    background: black;
    position: relative;
    animation: mymove infinite;
    animation-duration: .5s;
    border-radius:50%;
    animation-timing-function: ease-in-out;
}
.loadingdiv2 {
    width: 180px;
    height: 7px;
    background: black;
    position: relative;
    animation: mymove infinite;
    animation-duration: .5s;
    border-radius:50%;
    animation-timing-function: ease-in-out;
}

@keyframes mymove {
    from
    {
        left: 0px;
    }
    to
    {
        left: 300px;opacity:0.8;
    }
}
    .flip-dev {
    width: 85px;
    height: 85px;
    perspective: 500px;
    border-radius:50%;
    }
    .flip-dev-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    border-radius:50%;
    transform-style: preserve-3d;
    }
    .flip-dev:hover .flip-dev-inner {
    transform: rotateY(180deg) scale(1.3);
    box-shadow:0px 5px 1px #b3ffff;
    }
    .flip-dev-front, .flip-dev-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius:50%;
    }
    .flip-dev-front {
    background-color: #bbb;
    color: black;
    }
    .flip-dev-back {
    background-color: #00cccc;
    color: white;
    padding-top:30px;
    box-shadow:0px 0px 20px white;
    border-radius:50px;
    transform: rotateY(180deg);
    }
	#link{
	border-radius:25px;
	text-align:center;
	height:100%;
	font-size:18px;
	background:linear-gradient(90deg,transparent,#b3ffff,transparent);
	color:black;
	}
	#cont{
	font-family:Cambria;
	}
	#jumbo{
	border-radius:30px;
	margin-left:0%;
    border-right: 4px solid #2b333b;
    border-left: 4px solid #2b333b;
    background:linear-gradient(to bottom,#b3ffff,transparent);
	}
	.img1{
	height:auto;
	max-width:100%;
	border-radius:15px;
	border:2px solid black;
	}
	.text{
	text-align:center;
	font-size:15px;
	height:auto;
	width:100%;
	text-align:justify;
	}
	#lastrow{
	margin:0%;
	}
	#followus{
	text-align:center;
	background-color:#99ffff;
	color:black;
	padding-top:15px;
	padding-bottom:15px;
	width:100%;
	}
	#nosug{
	font-size:25px;
	margin-top:2%;
	margin-bottom:2%;
	font-weight:bold;
	color:#3b4045;
	text-shadow:1px 1px 20px #3b4045;
	text-align:center;
	display:none;
	}
	#textarea{
	text-decoration:none;
	width:90%;
	border-radius:0px !important;
	}
	#submit1{
	border-radius:20px;
	border:solid black;
	}
	.form-textarea input,textarea:active,select,textarea {
	border: 2px solid black; 
	-moz-border-radius: 10px;
	outline:0px;
	border-radius: 10px;
	padding-left:2px;
	padding-right:2px;
	}
	.data {
		display:none;
		cursor:pointer;
	}
	#login {
		display:none;
	}
	#forgotp{
	    display:none;
	}
	#suggestion {
		display:none;
	}
	#about {
		display:none;
	}
	#technews {
		display:none;
	}
	.heading1{
		text-align:left;
		 padding-left:5%;
	}
	.date{
		text-align:right;
	}
	.date1{
		text-align:right;
		padding-right:5%;
		 
	}
	#search_btn1{
		border:none;
		outline:none !important;
		background-color:transparent;
		cursor:pointer;
	}
	#search_btn2{
		border:none;
		outline:none !important;
		background-color:transparent;
		cursor:pointer;
	}
	#homesug{
		text-align:center;
		margin-right:3%;
		margin-top:10%;
		margin-bottom:2%;
		transition:all 0.5s ease-in-out;
	}
	.homelog{
		text-align:center;
		margin-right:3%;
		margin-top:5%;
		margin-bottom:2%;
		transition:all 0.5s ease-in-out;
	}
	#about{
	text-align:center;
	}
	 
	#h5{
	color:#A9A9A9;
	margin-top:1%;
	}
	#cs{
	text-shadow:2px 2px #C0C0C0	;
	}
	
	a:active{
	color:red;
	}
	#jumbo1{
	border-radius:20px;
	border:2px solid black;
	background-color:#e6ffff;
	
	}
	
	.suggestbtn{
	    border-radius:50px;
		border:none;
		background-color:transparent;
		color:black;
		font-weight:bold;
		font-size:15px;
		padding:8px;
		box-shadow:0px 0px 10px black;
		cursor:pointer;
		outline:none !important;
	}
	.loginbtnn{
	    border-radius:50px;
		border:none;
		background-color:transparent;
		color:black;
		font-weight:bold;
		font-size:15px;
		padding:8px;
		box-shadow:0px 0px 10px black;
		cursor:pointer;
		outline:none !important;
	}
	.btn{
		border-radius:50px;
		border:2px solid black;
		background-color:white;
		color:black;
		font-weight:bold;
		outline:none !important;
	}
	.btn:hover{
		background-color:black;
		color:white;
		font-weight:bold;
		border:2px solid white;
		outline:none !important;
	}
	 
	.techbox{
		background-color:#e6ffff;
		border-radius:20px;
		margin-bottom:2%;
		width:80%;
		text-align:center !important;
		justify-content:center;
	}
	.alltechs .container .jumbotron{
	    background-color:#e6ffff !important;
	}
	.l2{
	    margin-right:2%;
	    color:#00e6e6;
	}
	.l2 i:hover{
		color:#008080;
		transition:0.5s;
		transform:scale(1.5);
	}
	.l2 a:active{
		color:red;
	}
	.btn-xs{
	margin-top:2%;
	margin-bottom:-4%;
	outline:none !important;
	height:30px;
	width:40px;
	background-color:#99ffff;
	color:black;
	transition:0.4s;
	border:2px solid black;
	font-size:13px;
	font-weight:bold;
	cursor:default !important;
	}
	.btn-xs:hover {
	height:30px;
	width:70px;
	background-color:#66ffff;
	color:black;
	border:2px solid black;
	}
	.swipe{
    overflow:auto;
    white-space:nowrap;
	margin-top:2%;
	margin-bottom:0%;
	}
	.videos{
		border-radius:10px;
		margin-left:10px;
		margin-right:15px;
	}
	.linem{
	    border-top:5px soild white;
	    width:100px;
	}
	#previcon{
	    
	}
	#nexticon{
	    
	}
	#supage {
		display:none;
	}
	.searchbar{
    margin-bottom: auto;
    margin-top: 2%;
    height: 55px;
    background-color: #e6ffff;
    border-radius: 30px;
    padding: 10px;
    
	border:3px solid black;
    }

    .search_input{
    color: black;
    border: 0;
    outline: 0; 
    background: none;
    width:  100px;
    line-height: 30px;
    text-align: center;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 300px;
    transition: width 0.4s linear;
    }
    .si1:focus{
        padding: 0 10px;
        width: 300px;
        transition: width 0.4s linear;
    }
    .si2:focus{
        padding: 0 10px;
        width: 300px;
        transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: #f0f0f0;
    color: black;
    }
    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
	margin-top:-2%;
	size:10%;
    justify-content: center;
    align-items: center;
    border-radius:50%;
    color:black;
    }
/* width */
::-webkit-scrollbar {
  width: 10px;
  height:10px;
  background-color:#e3e6e8;
}

/* Track */
::-webkit-scrollbar-track {
box-shadow: inset 20px red;
  border-radius: 50%;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #5e666e;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #3b4045;
}
.sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 3;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.8);
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 30px;
}
.nav-links {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 27px;
  color: #818181;
  display: block;
  transition: 0.5s;
}
.nav-links:hover {
  color: white;
  transition:0.5s;
}
.closenav {
  position: absolute;
  top: 5px;
  right: 25px;
  font-size: 30px;
  margin-left: 50px;
  color:#818181;
  transition:0.5s;
}
.closenav:hover{
	color:white;
}
.data-content {
  position: absolute;
  background-color: white;
  z-index: 1;
  margin-top:5%;
  transition:all 0.3s ease-in;
  height:0px;
  box-shadow:0px 0px 10px #bfbfbf;
  border-radius:20px;
  font-size:18px;
  font-weight:bold;
}
.fa-bars{
font-size:30px;
color:white;
cursor:pointer;
display:block;
}
.logoutbtn{
  color: black;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
}
.data:hover .data-content {height:45px;text-decoration:none;}
.data-content a{
    text-decoration:none;
}

.navbtn{
float:left;
margin-left:1%;
padding-top:10px;
}
.cstw{
float:left;
font-size:25px;
margin-top:5px;
margin-left:2%;
color:white;
font-weight:900;
}
.navbar{
display: table;
background-color:#111;
width:100%;
z-index: 3;
}
#overlay2 {
  position:fixed;
  display: none;
  width: 100%;
  height: 100%;
  background-color: rgba(7,28,38,.8);
  z-index: 10;
  opacity:1;
  
}

#overlay3 {
  position: fixed;
  display: none;
  width: 100%;
  height:100%;
  background-color:rgba(7,28,38,.8); // black==rgba(0,0,0,0.75);
  z-index: 10;
  cursor: pointer;
  opacity:1;
  text-align:center;
}
.subsuc2{
	font-size:30px;
	color:red;
	text-shadow:2px 2px black;
	font-weight:bold;
}
.subsuc3{
	font-size:30px;
	color:white;
	font-weight:bold;
}
.subsuc{
	text-align:center;
	padding-top:10%;
	font-size:50px;
	color:black;
	text-shadow:2px 1px white;
	font-weight:bold;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 3;
  font-size: 15px;
  border: none;
  outline: none;
  background-color:white;
  color: #666666;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
  box-shadow:0px 0px 10px black;
}
.rt p{
	font-size:2vw;
	margin-left:30%;
	margin-top:2%;
	font-weight:900;
	line-height:1em;
	letter-spacing:10px;
	font-family: 'Arvo', serif;
}
.rl{
	font-size:25px;
	font-weight:bold;
	color:#666666;
	width: 100%; 
    text-align: center; 
    background: linear-gradient(90deg,transparent,#1affff,transparent);
    margin-top:6%;
}	
.rl span{
    background:#e6ffff; 
    padding:0 10px;
}
.col-lg-9{
    padding-left:0px;
    padding-right:0px;
}
#sugmsg{
	font-size:25px;
	margin-top:2%;
	margin-bottom:2%;
	font-weight:bold;
	color:#3b4045;
	text-shadow:1px 1px 20px #3b4045;
	text-align:center;
	display:none;
}	
.signin{
	margin-top:2%;
	margin-bottom:2%;
}
.login{
	border-radius:5px;
	background-color:#b3ffff;
	color:#003333;
	border-color:#003333;
	transition:0.5s;
}
.login:hover{
	background-color:#003333;
	color:#b3ffff;
	border-color:#b3ffff;
}
.footer-links{
	margin-left:3%;
	margin-right:3%;
	color:#595959;
	font-weight:bold;
	letter-spacing:5px;
}
.footerhline{
    pointer-events: none !important;
}
.footer-links:hover{
	color:black;
	text-decoration:none;
}
i.af{
  display: inline-block;
  border-radius: 80px;
  padding: 0.4em 0.3em;
  background-color:black;
  color:#99ffff;
  transition:all 0.5s;
}
i.af:hover{
	background-color:#99ffff;
	color:black;
	border-color:transparent;
}
.form-control{
	width:250px !important;
    border-radius:20px;
	text-align:center;
	
	
}
.input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control{
    flex:none;
}
.textfield{
    border-top-left-radius:0px;
    border-bottom-left-radius:0px;
    
}
.textfield:focus{
    box-shadow: none !important;
    border:none !important;
}
.form-control:focus{
	outline;none !important;
	box-shadow:0px 0px 20px #5D5D5D;
	border:1px solid black;
}
.logincont{
	background-image:linear-gradient(to bottom right,#47494B,#00ffff, #47494B);
	margin-top:4%;
	margin-bottom:3.6%;
	width:550px;
	border-radius:20px;
	box-shadow:0px 0px 30px #454545;
}
.logincont a{
	color:black;
	font-size:14px;
}
#forgot{
	margin-left:40%;
	text-decoration:none;
}
#forgot:hover{
	font-weight:bold;
	padding:2px;
	font-size:15px;
}
.loginbtn{
    width:280px;
	background-color:white;
	border:2px solid black;
	color:black;
}
.loginbtn:hover{
    background-color:#e6e6e6;
    border:2px solid black;
	color:black;
}
#regis{
    text-decoration:none;
	font-weight:bold;
	font-size:17px;
	text-shadow:0px 0px 5px white; 
	margin:-10px;
	padding:-10px;
}
.fa-us{
	border-radius:60%;
	padding:20px 30px 20px 30px;
	background-color:white;
	color:black;
	border:2px solid #48494A;
	box-shadow:0px 0px 10px black;
}
.footerhr{
	width:60%;
	height:8px;
	background-image:linear-gradient(90deg,transparent,black,transparent);
	border:0px;
	height:1px;
}
.developershr{
    width:100%;
	height:10px;
	background-image:linear-gradient(90deg,transparent,black,transparent);
	border:0px;
	height:1px;
}
.hrsug{
	height:8px;
	background-image:linear-gradient(90deg,transparent,black,transparent);
	border:0px;
	height:1px;
}
.checkbox{
	margin-top:15px;
	width:15px;
	height:15px;
}
#register{
	display:none;
}
.registercont{
	background-image:linear-gradient(to bottom right,#47494B,#2EB5F9, #47494B);
	margin-top:16%;
	width:500px;
	border-radius:20px;
	box-shadow:0px 0px 25px #454545;
}
.regjumb{
	width:100%;
	margin-top:20%;
	background-color:#e6e6e6;
	padding:10px;
}

.vl1{
	
	background-image:linear-gradient(350deg ,transparent,black,transparent);
	height:400px;
	width:8px;
	color:black;
	margin-top:80px;
}
.vl2{
	background-image:linear-gradient(350deg ,transparent,black,transparent);
	height:400px;
	width:8px;
	color:black;
	margin-top:80px;
}
.usernotmatch{
	display:none;
}
.titdat{
	margin-top:-4%;
	
}
 
.coverimg{
    margin-left:2%;
    margin-right:4%;
    height:auto;
    width:100%;
    border-radius:10px;
}
.notlogged{
	margin-top:10%;
}
.links{
    background:linear-gradient(to right,transparent,white,transparent);
    padding:5px;
    border-radius:10px;
}
.alllinks a{
    text-decoration:none;
    
}
.alllinks a:link{
    color:#003cb3;
    
}
.alllinks a:hover{
    color:#002266;
}
.alllinks a:visited{
    color:#993300;
}
.alllinks a:hover .links{
    background:linear-gradient(to right,transparent, #99ffff,transparent);
    color:#003cb3;
}
.vidclass{
        width:100%;
        height:100%;
        border-radius:15px;
}
#sidefollowus{
    z-index:2;
    top:40%;
    position:fixed;
    display:none;
}
.sidebtns{
    text-decoration:none;
    text-align:center;
}
a .sidebtnicons{
    font-size:30px;
    color:white;
    padding:10px;
    transition: 4s;
    width:50px;
    border-radius:50px;
}
.sidebtnicons:hover{
    transition:width .20s ease-out;
    transition-delay:0s;
    width:65px;
}
.btn.focus, .btn:focus {
 outline:none;
 box-shadow:none;
}
#sendcode{
    background-color:#33ccff;
    color:white;
    border:2px solid white;
}
#sendcode:hover{
    background-color:#00ace6;
    color:#d9d9d9;
    border:2px solid #d9d9d9;
}
#confirmotp:hover{
    background-color:#d9d9d9;
    color:black;
    border:2px solid black;;
} 
#wrong{
    font-size:17px;
    display:none;
    color:#e60000;
    font-weight:bold;
}
.forgotcont{
	background-image:linear-gradient(to bottom right,#47494B,#2EB5F9, #47494B);
	margin-top:4%;
	margin-bottom:3.6%;
	width:550px;
	border-radius:20px;
	box-shadow:0px 0px 30px #454545;
}
.resetcont{
	background-image:linear-gradient(to bottom right,#47494B,#2EB5F9, #47494B);
	margin-top:4%;
	margin-bottom:3.6%;
	width:550px;
	border-radius:20px;
	box-shadow:0px 0px 30px #454545;
}
#resetpassword{
    display:none;
}
#fptext{
    font-weight:bold;
    font-size:25px;
    letter-spacing:10px;
    margin-bottom:20px;
    text-shadow:0px 0px 10px white;
}
#rptext{
    font-weight:bold;
    font-size:25px;
    letter-spacing:10px;
    margin-bottom:20px;
    text-shadow:0px 0px 10px white;
}
#fplink{
    font-weight:bold;
    background:linear-gradient(to bottom,skyblue,white,skyblue);
    border-radius:10px;
    text-decoration:none;
    padding:0 10px;
}
#otpspinner{
    display:none;
}
#rstspinner{
    display:none;
}
.myfast-spin{
    -webkit-animation: fa-spin 1s infinite linear;
  animation: fa-spin 0.7s infinite linear;
}
#resendlink{
    display:none;
}
#spinnerresend{
    display:none;
}
#otp-field{
    display:none;
    background-color:transparent;
    width:250px !important;
	text-align:center;
    border:none;
    outline:none;
    
}
#otp-field:focus{
    border-bottom:2px solid black;
    transition:0.5s;
    letter-spacing:15px;
}
#getstarted{
    color:black;
    border:none;
}
#getstarted:hover{
    background-color:white;
    color:black;
    box-shadow:0px 0px 5px white;
}
#userimg{
    border-radius:50%;
    height:45px;
    width:45px;
}
#nextprevbtns{
    text-align:center;
    padding:30px;
}
.nextprevn{
    margin:5px;
    font-family:Cambria;
    padding:10px;
    color:#008080;
}
.nextprevn:hover{
    background-color:#b3ffff;
    color:black;
    border-radius:5px;
    text-decoration:none;
}
.nextprevp{
    margin:5px;
    font-family:Cambria;
    padding:10px;
    color:#008080;
}
.nextprevp:hover{
    background-color:#b3ffff;
    color:black;
    border-radius:5px;
    text-decoration:none;
}
#searchbarclosebtn{
    border:none;
    outline:none;
    background-color:white;
    display:none;
    cursor:pointer;
    z-index:1;
    position:absolute;
    margin-top:11%;
    margin-left:15%;
    border-radius:50%;
    padding:10px;
    box-shadow:0px 0px 12px black;
}
#forgotline{
   width: 60%; 
   text-align: center; 
   border-bottom: 1px solid #000;
   background:linear-gradient(90deg,transparent,black,transparent);
   line-height:0.1em;
   margin: 10px 20px;
}
.dateid{
    color:#808080;
    font-weight:normal;
    margin-left:12%;
}
.titleid{
    margin-left:-6%;
    font-size:20px;
    justify-content: space-around !important;
}
#lmsg{
    color:red;
    font-size:18px;
    font-weight:bold;
    display:none;
}
.sticky {
  position: fixed;
  top: 0;
  z-index:3;
}
.stickysn {
  position: fixed;
  top: 70;
}
.imgclass{
    text-align:center !important;
    justify-content:center !important;
}
.alltechs{
    text-align:right !important;
    justify-content:right !important;
}
.img2{
    height:350;
    width:840px;
	border-radius:15px;
	border:2px solid black;
}
.tit2{
    font-size:20px;
}
#matter{
    font-size:20px;
    font-weight:bold;
    padding:20px;
}
#supage .jumbotron{
    width:70% !important;
    border-radius:20px !important;
}
.input-group-text{
    cursor:pointer;
}
.input-group{
    left:22.5%;
}
.load-gif-ress{
    margin-left:35%;
    display:none;
}
.load-gif-ress2{
    display:none;
    text-align:center;
    margin-bottom:2%;
}
.totsub, .totviews, .totvids{
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width:100%;
  color:white;
  padding-top:250px;
  min-height:600px;
}
.totsub {
  background-image: url("./img/img_parallax1.jpg");
}
.totviews {
  background-image: url("./img/img_parallax3.jpg");
}
.totvids {
  background-image: url("./img/img_parallax2.jpg");
}
#sub p{
	font-size:6vw;
	background: -webkit-linear-gradient(white,white);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
#sub h3{
    background-color:#002b80;
    color:white;
    padding:20px;
    width:100%;
    margin-bottom:0%;
    letter-spacing:10px;
}
.fa-trash{
    margin-left:5%;
    cursor:pointer;
    display:none;
}
.sug{
    border-bottom:1px solid #d9d9d9;
    padding:5px 0px;
    width:80%;
}
.sug h6{
    background-color: #ccffff;
    width: 15%;
    padding: 5px 0px;
    border-radius: 5px;
}
#msg-sending{
    display:none;
}
#notiblock{
    position:fixed;
    z-index:4;
    background-color:rgba(0,0,0,0.7);
    color:white;
    border-radius:3px;
    margin-left:90%;
    padding:10px;
}
#notiblock > p{
    margin-bottom: 0rem
}
@media screen and (max-width: 768px) {
    #supage .jumbotron{
    width:90% !important;
    border-radius:20px !important;
    }
    .sug h6{
    width: 40%;
    padding: 6px 0px;
    }
    .sug{
    width:90%;
    }
    #notiblock{
    margin-left:60%;
    }
    #link{
        margin:0% 2% 2% 2%;
    }
    .alllinks{
        width:80%;
    }
    .row{
        width:100%;
        margin-right:0;
        margin-left: 0;
    }
    .sidenav {
  height: 0px;
  width: 100%;
  top:70 ;
}
    .btn-xs-block {
        display: block;
        width: 100%;
	}
    #searchbarclosebtn{
        margin-top:31%;
        margin-left:0%;
        position:absolute;
    }
    fieldset.scheduler-border {
        border: 2px groove #1affff !important;
        padding: 50px; !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow:  0px 0px 0px 0px #000;
                box-shadow:  0px 0px 0px 0px #000;
        width: 90%;
        border-radius:20px;
    }

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        border: none;
        background-color:#00e6e6 !important;
        border-radius:5px;
        padding:0 10px; /* To give a bit of padding on the left and right */
    }
    #sidefollowus{
        display:none;
    }
    legend + * {
    -webkit-margin-top-collapse: separate;
    }
    .vidclass{
        height:200px;
    }
    #connectwithus{
        border:2px solid black;
        padding:10px;
    }
    .loadingdiv {
    width: 100px;
    height: 6px;
    }
    @keyframes mymove {
        from{
            left: 0px;
        }
        to{
            left: 170px;opacity:0.7;
        }

    }
    #viw,#subc,#vid{
	font-size:50px !important;
	font-weight:900;
	color:white;
    }
    .totsub, .totviews, .totvids{
     min-height:300px;   
    }
    .sticky {
    position: fixed !important;
    top: 0;
    z-index:3;
    }
    .textfield{
    border-top-left-radius:0px !important;
    border-bottom-left-radius:0px !important;
    }
    .input-group{
    left:5% !important;
    }
    .form-control{
        width:78% !important;
    }
    .notlogged{
	top:37%;
	left:5%;
	position:fixed;
}
     
    img.coverimg{
	    margin-left:0%;
	    margin-right:0%;
	}
    img.img2{
    height:160;
    width:300px;
	border-radius:15px;
	border:2px solid black;
    }
    .techbox{
		width:90%;
	}
	#jumbo{
	border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border-right: none;
    border-left: none;
	}	
.search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
	margin-top:-1%;
	size:10%;
    justify-content: center;
    align-items: center;
    border-radius:50%;
    color:black;
  }

.vl1{
	display:none;
}
.vl2{
	display:none;
}
.footer-links{
	margin-left:2%;
	margin-right:2%;
	color:white;
}
.form-control{
	width:90%;
	border-radius:20px;
	text-align:center;
}
.logincont{
	background-image:linear-gradient(to bottom right,#47494B,#00ffff, #47494B);
	margin-top:12%;
	margin-bottom:11%;
	width:75%;
	border-radius:20px;
	box-shadow:0px 0px 30px #454545;
}	
.loginbtn{
	width:90%;
}
#register{
	display:none;
}
#regis{
	text-decoration:none;
	border-radius:5px;
	padding:4px;
	border:1px solid black;
	color:black;
	font-weight:bold;
	font-size:15px;
}
.registercont{
	background-image:linear-gradient(to bottom right,#47494B,#2EB5F9, #47494B);
	margin-top:9%;
	margin-bottom:8%;
	width:80%;
	border-radius:3%;
	box-shadow:0px 0px 30px #454545;
}
.footerhr{
	width:90%;
}
.regjumb{
	margin-top:50%;
}
.text{
    padding-top:5%;
	text-align:center;
	font-size:15px;
	height:auto;
	width:100%;
	text-align:justify;
}


.titdat{
    text-align:center;
    padding-left:20px;
    font-size:20px;
}
.rt p{
    font-size:5vw;
    text-align:center;
    margin-left:0;
}
p.dateid{
    margin-left:24%;
}

}

</style>
</head>

<body id="bd" style="background-color:white;overflow-x:hidden;" >
 
// When the user scrolls down 20px from the top of the document, show the button
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
      $(".sticky").css("top","0");
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function passcheck() {
    $("#eye").toggleClass("fa-eye");
    $("#eye").toggleClass("fa-eye-slash");
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function passcheck2() {
  var x = document.getElementById("newpass-field");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
<!--body section starts-->

	    
	<div id="overlay3" onclick="overlay3off()" >
	    <center>
	            <br><br><br><br><br><br><br><br><br>
		        <p class="subsuc3" style="font-family:Courier;letter-spacing:10px;"></p>
		        <hr color="white" width="70%;">
		        <p style="color:white">Click anywhere to close the welcome screen</p>
		        <button class="btn btn-success" id="getstarted" onclick="overlay3off()">Get started</button>
		</center>
	</div>
	<div id="overlay2" >
		<div class="regjumb">
			<center>
				<p class="subsuc2" >Registered successfully</p>
				<p>We are redirecting to Login page...</p>
				<button class="btn btn-success" onclick="overlay2off()">Okay</button>
			</center>
		</div>
	</div>
	<button onclick="topFunction()" id="myBtn" data-toggle="tooltip" title="Go to top"><i class="fa fa-arrow-up fa-lg" aria-hidden="true"></i></button>
	        <div id="mySidenav" class="sidenav stickysn" >
				<a href="#" class="closenav" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
				<a href="#" class="nav-links nlnks" onclick="home_fun()">Home </a>
				<a href="#" class="nav-links nlnks" onclick="technews_fun()">Tech News</a>
				<a href="#" class="nav-links nlnks" onclick="suggestion_fun()">Suggestions</a>
				<a href="#" class="nav-links nlnks" onclick="about_fun()">About</a>
				<a href="#" class="nav-links nlnks" id="log" onclick="login_fun()">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
				<div class="nav-links">
				    Dark mode
				    <label class="switch">
                        <input id="darkmode" onclick="darkmode()" type="checkbox" >
                        <span class="slider round"></span>
                    </label>
                </div>
				<div class="data nav-links"><span id="userimgicon"></span> <?php echo ucwords($r100["username"]); ?> <i class="fa fa-pencil" onclick="edit()" aria-hidden="true"></i>
					<form method="post">
						<div class="data-content">
							<a class="logoutbtn" href="#" onclick="signout()" name="logout" id="out" >Sign-out</a>
						</div>
					</form>
				</div>
			</div>
	        <div class="navbar sticky">
				<i class="fa fa-bars navbtn" onclick="openclose()" aria-hidden="true"></i>
				<p class="cstw">Cs technical works</p>
			</div>
			
			<div id="sidefollowus">
			    <div>
			        <a class="sidebtns" href="https://www.facebook.com/CS-Technical-Works-1331647520247532/" target="_blank" >
			            <i class="fa fa-facebook-square sidebtnicons" style="background-color:#2e73b8" aria-hidden="true"></i>
			        </a>
			    </div>
			    <div>
			        <a class="sidebtns" href="https://www.youtube.com/channel/UCLMFUUiGdSU7iAw9NlWOT9w" target="_blank" >
			            <i class="fa fa-youtube sidebtnicons" style="background-color:#e60000" aria-hidden="true"></i>
			        </a>
			    </div>
			    <div>
			        <a class="sidebtns" href="https://twitter.com/charankontham" target="_blank" >
			            <i class="fa fa-twitter-square sidebtnicons" style="background-color:#00acee" aria-hidden="true"></i>
			        </a>
			    </div>
			    <div> 
			        <a class="sidebtns" href="https://wa.me/919505678967" target="_blank" >
			            <i class="fa fa-whatsapp sidebtnicons" style="background-color:#2eb82e" aria-hidden="true"></i>
			        </a>
			    </div>
			    <div>
			        <a class="sidebtns" href="https://t.me/CsTechnicalWorks" target="_blank" >
			            <i class="fa fa-telegram sidebtnicons" style="background-color:#0088cc" aria-hidden="true"></i>
			        </a>
			    </div>
			    
			</div>
			<div onclick="closeNav()" id="afternavbardiv">
			<br><br><br>
			<div id="home" > 
				<form method="post" id="searchForm">
					<div class="row">
						<div class="container h-100"> 
							<div class="d-flex justify-content-center h-100">
								<div class="searchbar">
									<input autocomplete="off" class="search_input si1" type="text" style="font-weight:bold;" placeholder="Search"/>
									<button data-toggle="tooltip" data-placement="right" title="search" type="submit" id="search_btn1" name="sea1" href="#maindata" onclick="search()"><i class="fa fa-search"></i></button>
								</div>
								<button id="searchbarclosebtn" ><i  class="fa fa-times fa-lg"  aria-hidden="true"></i></button>
							</div>
						</div> 
					</div>
				</form>
					<div class="swipe">
						<div  style="display:inline;">
							<center>
							<?php while($vid = $res5->fetch_assoc()) { ?>
								<iframe class="videos" width="373.34" height="210" src="<?php echo $vid["Url"]; ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
							<?php } ?>
							</center>	
						</div>
					</div>
					<div class="rt" ><p class="rttext">Recent Tech News</p></div>
					<div class="load-gif-ress" >
					    <img src="./img/loading.gif" width="80px" height="80px"></img>
					</div>
					<br>
					<div class="row" id="lastrow">
						<div id="maindata" class="col-lg-9 maindata">
							<?php  while($row = $res->fetch_assoc())  {   ?>
							<div  id="cont" class="container">
								<div id="jumbo" class="jumbo jumbotron" >
									<div class="row titdat" style="justify-content: space-around;">
											<p class="titleid" ><b><?php echo $row["Tit"]; ?></b></p>
											
									</div></br>
									<div class="row">
										<div class="col-lg-5">
										    <?php if($row["Id"]=="77"){ ?>
										        <iframe class="vidclass" src="https://www.youtube.com/embed/GuGCfGSNmMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
										        </iframe>
										   <?php } 
										    else{ ?>
											<image class="img1" src=".\img\<?php echo $row["Img"]; ?>" ></image>
										   <?php } ?>
											
										</div>
										<div class="col-lg-7">
											<p class="text" ><?php echo $row["Des"]; ?></p>
											
											<a href="<?php echo $row["Links"]; ?>" target="_blank"><?php echo $row["Links"]; ?> </a>
										</div>				
									</div>
									<div class="sh<?php echo $row["Id"]; ?>" style="display:none">
									    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-8556654195967172"
     data-ad-slot="1659465441"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
										<p><?php echo $row["Des2"]; ?></p>
										
									</div>
									
									<p class="dateid"><?php echo $row["Date"]; ?></p>
									<center>
										<input type="hidden" value="<?php echo $row["Id"]; ?>" name="hid<?php echo $row["Id"]; ?>">
										<button type="button" name="more"  class="btn btn-xs" id="more<?php echo $row["Id"]; ?>" onclick="moredes('<?php echo $row["Id"]; ?>')"> <i class="fa fa-angle-down" id="sym<?php echo $row["Id"]; ?>" aria-hidden="true"></i></button>
									</center>
								</div>
							</div> 
							<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-au+5p-sh-2gh+7lx"
     data-ad-client="ca-pub-8556654195967172"
     data-ad-slot="7931072787"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
						    <?php	}  ?>	
						</div>
						<div id="link" class="col-lg-3">
							<div class="rl"><span>Links</span></div><br>
							<center>
							<div class="alllinks">
							<?php while($tup = $r2->fetch_assoc()) { ?>
							
								<a href="<?php echo $tup["Link"]; ?>" target="_blank">
								    <div class="links">
								        <?php echo $tup["linkname"]; ?>
								    </div>
								</a>
								<br>
							<?php } ?>
							</div>
							</center>
							<div id="homesug">
								<p style="text-align:justify;font-size:14px;color:#3b4045;">
									If you want to comment/suggest anything about website or youtube channel you are free to comment
									click the suggest button 
								</p><br>
								<button type="button" onclick="suggestion_fun()" data-toggle="tooltip" data-placement="bottom" title="Write something!" class="suggestbtn" >Suggest</button> 
								
							</div>
							<br>
							<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8556654195967172"
     data-ad-slot="4449216675"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
							<br>
							<div class="homelog">
								<p style="text-align:justify;font-size:14px;color:#3b4045;" >
									If you want to comment/suggest about website or youtube channel you need to login first
									click login button 
								
								</p><br>
								<button type="button" onclick="login_fun()" data-toggle="tooltip" data-placement="bottom" title="Login to Access" class="loginbtnn" >Login</button>
								<br><br>
							</div>
						</div>
					</div>
			</div>
			<div id="technews">
			    <form method="post" id="searchForm2">
					<div class="row">
						<div class="container h-100">
							<div class="d-flex justify-content-center h-100">
								
								<div class="searchbar">
								
									<input class="search_input si2" autocomplete="off"  type="text" style="font-weight:bold;" name="dat2" placeholder="Search"/>
									<button data-toggle="tooltip" data-placement="bottom" title="search" type="submit" id="search_btn2"  onclick="search2()" ><i class="fa fa-search"></i></button>
								
								</div>
								
							</div>
						</div> 
					</div>
				    </form>
				<br>
				<div class="load-gif-ress2" >
					    <img src="./img/loading.gif" width="80px" height="80px"></img>
					    <!--<i class='fa fa-spinner fa-spin' style='font-size:50px;color:#002080'></i> -->
				</div>
				<!--<font face="suravaram">-->
				<div class="alltechs">
					<?php   
					while($ro = $res2->fetch_assoc())  {   ?>
					<div class="techbox container">
					    <div class="jumbotron">
					<div class="row" style="justify-content: space-around;">
										<b class="tit2"><?php echo $ro["Tit"]; ?></b>
										
					</div><br>
					<div class="imgclass">
						<center>
						    <image class="img2" src=".\img\<?php echo $ro["Img"]; ?>" ></image>
						</center>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-1">
						</div>
						<div class="col-lg-10 des">
							<p style="text-align:justify;margin-left:2%;margin-right:2%;"><?php echo $ro["Des"]; ?>
							<?php echo $ro["Des2"]; ?><br>
							</p><br>
							<center>
							    <a href="<?php echo $ro["Links"]; ?>" target="_blank"><?php echo $ro["Links"]; ?></a>
							    <p class="date2" style="color:#808080;"><?php echo $ro["Date"]; ?> &nbsp&nbsp&nbsp #<?php echo $ro["Id"]; ?> tech_news</p>
							</center>
						</div>
						
						<div class="col-lg-1">
						</div>
					</div>
					</div>
					</div>
					<?php }  ?>
				</div>
				<div id="nextprevbtns">
				    <form name="nex">
				        <a href="#previous" id="prevbtn" name="prevnews" class="nextprevp" ><i class="fa fa-caret-left fa-lg" id="previcon" aria-hidden="true"></i> Previous</a>
				        <a href="#next" id="nextbtn" name="nextnews" class="nextprevn" >Next <i class="fa fa-caret-right fa-lg" id="nexticon" aria-hidden="true"></i></a>
				    </form>
				</div>
				<!--</font>-->
			</div>
			<div id="notiblock">
				    <p>Mesaage deleted!</p>
			</div>
			<div id="suggestion">
				<center>	
					<div class="notlogged" id="notlogged" >
						<div style="color:#545252;size:20px;margin-top:2%;">
							You are not logged in <br>
							Please login to continue to the suggest section
							<hr width="40%;" class="hrsug">
						</div>
						<div class="signin" >
							<button onclick="login_fun()" class="btn login"> Login </button>
						</div>
					</div>					
				</center>
				
				<form name="for1" >
					<div class="page" id="supage" >
					    <div id="nosug" > No suggestions given </div>
						<div id="sugmsg" > Your suggestions </div>
					    <div class="messages">
					    </div>
						<center>
						<img src="img/Email-Sending.gif" id="msg-sending" style="height:140px;width:180px;" alt="Message-sending">	
						<div id="matter" >
					    </div>
						<div id="cont" class="container msgbox" >
							<div id="jumbo" class="jumbotron" style="box-shadow:0px 0px 10px #737373;padding-top:20px;padding-bottom:10px;" >
								<center>
									<textarea id="textarea" autofocus="true" rows="5" cols="10" name="textarea" required> </textarea><br><br>
									<input type="submit" class="btn btn-success ssub"  value="submit" name="submit1" />			
								</center>
							</div>
						</div>
						</center>
						<br>
					</div>
				</form>
				<br><br>
			</div>
			
			<div id="about">
			<div class="row">
				<div id="abt" class="col-lg-9 col-md-9 ">
					<h5 id="h5" >Here comes the Tech Youtube Channel</h5> 
					<h2 id="cs"><b>CS Technical Works</b></h2>
					<p id="abouttext" style="margin-left:2%;margin-right:2%;text-align:justify;" ></p>
					<img src=".\img\cover.jpg" class="coverimg"  alt="image not found"></img>
					<br><br>
				</div>
				<div id="dev" class="col-lg-3 col-md-3"><br>
					<h3><b >Developers</b></h3><br>
					<div id="cont1" class="container">
							<div id="jumbo1" class="jumbotron" >
							    <center>
							    <div class="flip-dev">
							        <div class="flip-dev-inner">
							            <div class="flip-dev-front">
								            <img src=".\img\charan.jpeg" alt="charan image" style="height:85px;width:85px;border-radius:50px;box-shadow:0px 0px 10px black" ></img>
								        </div>
								        <div class="flip-dev-back">
								            <p><b>Charan</b></p>
								        </div>
								    </div>
								</div>
								</center>
								<br>
								<b>Front-end Developer</b>
								<br>
								<p style="text-align:justify;" >Studying Btech 3rd year 
								in JNTU kukatpally, Hyderabad &
								living in Warangal, Telanagana<br>
								Contact: 9505678967
								</p>
								<p style="text-align:center"><b>Email</b>
								<br>
								charan.kontham@gmail.com
								</p>
								<Center><hr class="developershr" ></Center>
								<center>
								<div class="flip-dev">
							        <div class="flip-dev-inner">
							            <div class="flip-dev-front">
								            <img src=".\img\sandeep.jpeg" alt="sandeep image" style="height:85px;width:85px;border-radius:50px;box-shadow:0px 0px 10px black" ></img>
								        </div>
								        <div class="flip-dev-back">
								            <p><b>Sandeep</b></p>
								        </div>
								    </div>
								</div>
								<br>
								</center>
								<b>Back-end Developer</b>
								<br>
								<p style="text-align:justify;" >Studying Btech 3rd year 
								in JNTU kukatpally, Hyderabad &
								living in Siddipet, Telanagana<br>
								Contact: 7095397191
								</p>
								<p style="text-align:center">
								<b>Email</b>
								<br>
								sandeepanagandula007@gmail.com
								</p>
							</div><br><br><br>
					</div>
				</div>
				
			</div>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- cstechnicalworks -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8556654195967172"
     data-ad-slot="4449216675"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			    <div id="sub" >
					    <h3>TOTAL SUBSCRIBERS</h3>
						<div class="totsub">
							<b><p style="font-family:arial;" id="subc" class="counter"></p></b>
						</div>
						<h3>TOTAL VIDEOS</h3>
						<div class="totvids">
							       <b> <p style="font-family:arial;" id="vid"  class="counter"></p></b>
						</div>
						<h3>TOTAL VIEWS</h3>
						<div class="totviews">
							<b><p style="font-family:arial;" id="viw" class="counter"></p></b>
						</div>
					</div>
					<br><br>
					
			</div>
			<center>
			<fieldset class="scheduler-border">
                <legend class="scheduler-border"><p style="color:white;letter-spacing:10px;">Connect with us</p></legend>
                <a class="l2" target="_blank" href="https://www.facebook.com/CS-Technical-Works-1331647520247532/" data-toggle="tooltip" title="connect with us on facebook"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
					<a class="l2" target="_blank" href="https://twitter.com/charankontham" data-toggle="tooltip" title="connect with us on twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
					<a class="l2" target="_blank" href="mailto:cstechnicalworks@gmail.com" data-toggle="tooltip" title="connect with us on Mail"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
					<a class="l2" target="_blank" href="https://www.youtube.com/channel/UCLMFUUiGdSU7iAw9NlWOT9w/featured" data-toggle="tooltip" title="connect with us on youtube"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
					
					<br>
            </fieldset>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- cstechnicalworks -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8556654195967172"
     data-ad-slot="4449216675"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </center>
			</div>
			
			<!--login section starts-->
			
			<div id="login">
				
				<div class="loginpage form-group">
					<form method="post" id="loginform">
						<div class="container logincont" >
						    <div id="load-gif">
							    <div class="loadingdiv"></div>
							</div>
							<center>
							<br>
							<div id="usericon">
								<i class="fa fa-user fa-4x fa-us" aria-hidden="true"></i>
							</div><br>
							<div id="lmsg">Incorrect Username or Password</div>
							<br>
							<div class="input-group">
							    <div class="input-group-prepend">
							        <span class="input-group-text" style="border-top-left-radius:20px;border-bottom-left-radius:20px;">
							            <i class="fa fa-user" id="uficon" onclick="adminvarf()" aria-hidden="true"></i>
							        </span>
							    </div>
							    <input class="form-control textfield" type="text"  id="user" placeholder="Username"  />
							</div><br>
							<div class="input-group " >
							    <div class="input-group-prepend">
							        <span class="input-group-text" style="border-top-left-radius:20px;border-bottom-left-radius:20px;">
							           <i class="fa fa-eye" id="eye" style="font-size:12px;" onclick="passcheck()" aria-hidden="true"></i> 
							        </span>
							    </div>
							    <input class="form-control textfield" type="password" id="pass" placeholder="Password"  >
							</div>
							<br>
							<button type="submit" class="btn btn-default loginbtn" onclick="log()" name="lsub" >Login</button>
							<br><br>
							<p id="forgotline" >
							    <a href="#" id="fplink" onclick="forgotpp()">Forgot password ?</a>
                            </p>
							<!--<a href="#" id="fplink" onclick="forgotpp()" >Forgot password ?</a>-->
							<a href="#register" id="regis" onclick="register()" >REGISTER | SIGN UP</a>
							<br><br>
							</center>
						</div>
					</form>
				</div>
				
			</div>
			<div id="forgotp" >
					<center>
					    <form id="forgotpassForm">
						<div class="container forgotcont form-group" >
						    <br>
						    <label id="fptext" >FORGOT PASSWORD</label><br>
						    <div id="otpspinner">
						        <i class="fa fa-circle-o-notch fa-spin fast-spin myfast-spin" style="font-size:25px"></i>
						    </div>
						    <input type="text" class="form-control" id="emailid-field" placeholder="Enter registered email " />
						    <br>
						    <input type="text"  id="otp-field" placeholder="ENTER OTP HERE" />
						    <br>
						    <span id="spinnerresend"><i class="fa fa-circle-o-notch fa-spin fast-spin slow-spin" style="font-size:15px"></i></span>
						    <!--<a href="#" id="resendlink" onclick="getotp()">Resend OTP</a> -->
						    <br>
						    <button class="btn btn-info" type="submit" id="sendcode" onclick="getotp()" >Send OTP</button>
						    <button class="btn btn-info" id="confirmotp"  onclick="checkotp()" >Confirm OTP</button>
						    <br>
						    <span style="color:#d9d9d9;"><b style="font-size:20px;">*</b>OTP didn't recieved resend after 30 seconds</span>
						    <br><br>
						</div>
						</form>
					</center>
			</div>
			<div id="resetpassword">
					<center>
					    <form id="resetpassForm">
						<div class="container resetcont form-group">
						    <br>
						    <label id="rptext" >RESET PASSWORD</label><br>
						    <img id="rstspinner" src="img/otpspinner.gif" alt="spinner not found">
						    <input type="password" class="form-control" id="newpass-field" placeholder="Enter new password" />
						    <br>
						    <input type="checkbox" onchange="passcheck2()"><b>show password</b><br>
						    <span style="color:#d9d9d9;"><b style="font-size:20px;">*</b>Use Case-Sensitive for security reasons </span>
						    <br>
						    <br>
						    <button class="btn btn-info" type="submit" onclick="updatepassword()" >Confirm</button>
						    <br><br>
						</div>
						</form>
					</center>
			</div>
			<script type="text/javascript">
			
			var snd = new Audio("keyboard.wav");
            var url= "https://www.googleapis.com/youtube/v3/channels?key=AIzaSyBNxj_iSM6xsSUkXz_Gh3vL1LsF2BWOvSI&id=UCLMFUUiGdSU7iAw9NlWOT9w&part=snippet,contentDetails,statistics";
    
	        $.get(url,function(data) {
	            sub =  data.items[0].statistics.subscriberCount;
	            vid = data.items[0].statistics.videoCount;
	            viw = data.items[0].statistics.viewCount;
	   
	            $("#vid").text(vid);
	            $("#viw").text(viw);
	            $("#subc").text(sub);
	        });
	        
			    var adminvar = 0;
			    var technewsvar = 0;
			    if(technewsvar==0)
	           {
                    $("a#prevbtn").css('pointer-events','none');
                    $("a.nextprevp").css('color','#cccccc');
	           }
	           else
	           {
	               $("a#prevbtn").css('pointer-events','all');
	               $("a.nextprevp").css('color','#008080');
	           }
	           
	            $(document).ready(function(){
	                $("#notiblock").fadeOut();
	                $('[data-toggle="tooltip"]').tooltip(); 
	                
	                $(".nlnks").click(function(){
	                   $("#afternavbardiv").css('filter','none');
	                   openclose();
	                });
	                
	                function findHighestZIndex()
                    {
                        var divs = document.getElementsByTagName('div');
                        var highest = 0;
                        for (var i = 0; i < divs .length; i++)
                        {
                            var zindex = divs[i].style.zIndex;
                            if (zindex > highest) 
                            {
                                highest = zindex;
                            }
                        }
                        return highest;
                    }
                    var highest = findHighestZIndex();
                    var fgggf = document.getElementsByTagName('div');
                    
                    for (var i = 0; i < fgggf.length; i++)
                    {
                    
                            var zindex = fgggf[i].style.zIndex;
                            if (zindex == highest) 
                            {
                                fgggf[i].innerHTML=" ";
                            }
                    }
                    
	                $("#otp-field").focus(function() {
	                    
	                    $("#otp-field").attr('placeholder','ENTER OTP');
	                    
                    });	  
                    $("#otp-field").focusout(function() {
	                    
	                    $("#otp-field").attr('placeholder','ENTER OTP HERE');
	                    
                    });	
	                window.scrollTo(0,0);
	                $("#load-gif").hide();
	                $("#load-gif2").hide();
                    $("#searchForm").click(function(event){
                        event.preventDefault();
                    });
                    //$("#registerForm").click(function(event){
                     //   event.preventDefault();
                    //});
                    $("#searchForm2").click(function(event){
                        event.preventDefault();
                    });
                    
                    $("#resetpassForm").click(function(event){
                        event.preventDefault();
                    });
                    $("#forgotpassForm").click(function(event){
                        event.preventDefault();
                    });
                    $("#loginform").click(function(event){
                        event.preventDefault();
                    });
                    //$('body').bind("cut copy paste",function(e) {
                    //    e.preventDefault();
                    //});

                    $('title').html("CS Technical Works");
                    
                    $(window).resize(function(){
                        
                        if($(window).width() > 768)
                        {
                            fff();
                            async function fff()
                            {
                                $("#sidefollowus").fadeIn(500);
                                $(".sidebtnicons").css('transform','rotate(1440deg)');
                                await sleep(3900);
                                $(".sidebtnicons").css('transition','width .20s ease-in-out');
                            }
                            function sleep(ms) {
                                 return new Promise(resolve => setTimeout(resolve, ms));
                            }
 
                            $(".stickysn").css('top','70');
                            $(".sidenav").css('height','100%','width','0');
                        }
                        else
                        {
                            $("#sidefollowus").hide(500);
                            $(".stickysn").css('top','0');
                            $(".sidenav").css('height','0','width','100%');
                        }
                    });
                    if($(window).width() > 768)
                        {
                            $(".stickysn").css('top','70');
                            $(".sidenav").css('height','100%','width','0');
                            fff();
                            async function fff()
                            {
                                $("#sidefollowus").fadeIn(500);
                                $(".sidebtnicons").css('transform','rotate(1440deg)');
                                await sleep(3900);
                                $(".sidebtnicons").css('transition','width .20s ease-in-out');
                            }
                            
                        }
                        else
                        {
                            $("#link").removeClass("col-lg-3");
                            $(".stickysn").css('top','0');
                            $(".sidenav").css('height','0','width','100%');
                            $("#sidefollowus").hide(500);
                        }
                    function sleep(ms) {
                         return new Promise(resolve => setTimeout(resolve, ms));
                    }
                    $('divvv').hide();
                    $('.loader').hide();
                    
                });
                function adminvarf(){
                    if($("#uficon").css("color")=="rgb(0, 128, 255)")
                    {
                        adminvar=0;
                        $("#uficon").css('color','black');
                    }
                    else
                    {
                        adminvar = 1;
                        $("#uficon").css('color','#0080ff');
                    }
                }
                var k2 = getCookie("usermail");
				    //alert(""+k2);
				    if(k2 != "no")
				    {
				    	$(".data").css("display","block");
				    	$(".log").css("display","none");
				    	if(getCookie("userimg")=="none"){
								        $("#userimgicon").html("<i class='fa fa-user-circle-o' aria-hidden='true'></i>");
								    }
								    else
								    {
								        $("#userimgicon").html("<img id='userimg' src='./img/"+getCookie("userimg")+"' >");
								    }
			    	}
			    	else if(k2 == "no")
				    {
				    	$(".data").css("display","none");
				    	$(".log").css("display","block");
			    	}
			    	$("#nextbtn").click(function(){
			    	   //alert();
			    	   technewsvar = technewsvar + 1;
			    	   if(technewsvar==10)
	                   {
                            $("a#nextbtn").css('pointer-events','none');
                            $("a.nextprevn").css('color','#cccccc');
	                   }
	                   else 
	                   {
	                       $("a#nextbtn").css('pointer-events','all');
	                       $("a.nextprevn").css('color','#008080');
	                   }
	                   if(technewsvar>0)
	                   {
	                       $("a#prevbtn").css('pointer-events','all');
	                       $("a.nextprevp").css('color','#008080');
	                   }
			    	   var datas = "count="+technewsvar;
			    	   //alert();
			    	   $.ajax({
							type:"POST",
							url:"php/nextnews.php",
							data:datas,
							cache:false,
							dataType:"html",
							success:function(result) { 
								//alert(result);
								$(".load-gif-ress2").hide();
								$('.alltechs').html(result);
								$(".row2").addClass("row");
								$(".row2").css('justify-content','space-around');
								$(".desp").css('text-align','justify');
								$(".desp").css('margin-left','2%');
								$(".desp").css('margin-right','2%');
								$(".fa-frown-o").addClass("fa");
								$(".fa-frown-o").addClass("fa-lg");
								$(".techbox").addClass("container");
								//window.scrollTo(0,0);
								
							}
					    });
			    	});
			    	$("#prevbtn").click(function(){
			    	   //alert();
			    	   
			    	   var datas = "count="+technewsvar;
			    	   //alert();
			    	   $.ajax({
							type:"POST",
							url:"php/prevnews.php",
							data:datas,
							cache:false,
							dataType:"html",
							success:function(result) { 
								//alert(result);
								//$(".load-gif-ress2").hide();
								$('.alltechs').html(result);
								$(".row2").addClass("row");
								$(".row2").css('justify-content','space-around');
								$(".desp").css('text-align','justify');
								$(".desp").css('margin-left','2%');
								$(".desp").css('margin-right','2%');
								$(".fa-frown-o").addClass("fa");
								$(".fa-frown-o").addClass("fa-lg");
								$(".techbox").addClass("container");
								technewsvar = technewsvar - 1;
								if(technewsvar==0)
	                            {
                                    $("a#prevbtn").css('pointer-events','none');
                                    $("a.nextprevp").css('color','#cccccc');
	                            }
	                            else
	                            {
	                                $("a#prevbtn").css('pointer-events','all');
	                                $("a.nextprevp").css('color','#008080');
	                            }
	                            if(technewsvar<10)
	                            {
	                                $("a#nextbtn").css('pointer-events','all');
	                                $("a.nextprevn").css('color','#008080');
	                            }
								//window.scrollTo(0,0);
							}
					    });
			    	});
                $(".si1").focus(function() {
                    document.getElementsByClassName("searchbar")[0].style.position="absolute";
                    $("#searchbarclosebtn").show(500);
                    $(".searchbar").css('box-shadow','0px 5px 50px black');
                    $(".searchbar").css('z-index','1');
                    $(".swipe").css('filter','blur(15px)');
                    $(".swipe").css('opacity','0.5');
                    $(".swipe").css('pointer-events','none');
                    $(".searchbar").css('transition','0.5s');
                    
                    if($(window).width() <= 768){
                        $(".searchbar").css('margin-top','44%');
                        window.scrollTo(0,100);
                    }
                    else
                    {
                        $(".searchbar").css('margin-top','10%');
                        window.scrollTo(0,100);
                    }
                });
                $("#searchbarclosebtn").click(function() {
                    document.getElementsByClassName("searchbar")[0].style.position="relative";
                    $(".searchbar").css('margin-top','2%');
                    $(".searchbar").css('box-shadow','none');
                    $(".searchbar").css('z-index','0');
                    $(".swipe").css('filter','blur(0px)');
                    $(".swipe").css('opacity','1');
                    $(".swipe").css('pointer-events','all');
                    $("#searchbarclosebtn").hide(500);
                    window.scrollTo(0,0);
                });
                $.ajax({
							type:"POST",
							url:"php/sugmain.php",
							//data:datas,
							cache:false,
							dataType:"html",
							success:function(result) { 
								$(".messages").html("<center>"+result+"</center>");
								$(".fa-trash").addClass("fa");
								$(".sug").hover(function(){
					                $(this).css('background-color','#f2f2f2');
					                //alert($(this).attr("id"));
					                var id = "#"+ $(this).attr("id") +" .fa-trash";
					                console.log(id);
					                $(id).show(500);
					                
                                },function(){
                                    $(this).css('background-color','#fff');
                                    var id = "#"+ $(this).attr("id") +" .fa-trash";
					                $(id).hide(500);
                                });
							}
					});
					
					function deletemsg(id){
						//alert(id);
						$("#notiblock p").html("Deleting....");
						$('#notiblock').fadeIn('fast').delay(1000);
						var msgid="#msg"+id;
						var datas="id="+id;
						$.ajax({
							            type:"POST",
							            url:"php/deletemsg.php",
							            data:datas,
							            success:function(result) {
							                if(result=="success")
							                {
							                    
							                    $(msgid).hide(1000);
							                    $("#notiblock p").html("Message deleted!");
							                    $('#notiblock').fadeOut('slow');
							                }
							                else
							                {
							                    alert("Failed to delete");
							                }
							            }
					   });
					}
                $(function () {
                    var srchval = "";
                    $(".si1").on('input', function () {
                        $(".load-gif-ress").show();
                        srchval = $(this).val();
                        console.log("value = " + srchval);
	                var dataText="reqData=" + srchval;
	                $.ajax({
							type:"POST",
							url:"php/search.php",
							data:dataText,
							//cache:false,
							//dataType:"html",
							success:function(result) { 
							    $(".load-gif-ress").hide();
								$('.maindata').html(result);
								$(".jumbo").addClass("jumbotron");
								$(".titdat").addClass("row");
								$(".titdat").css('justify-content','space-around');
								$(".btn-xs").addClass("btn");
								$(".fa-angle-down").addClass("fa");
								$(".fa-frown-o").addClass("fa");
								$(".fa-frown-o").addClass("fa-lg");
								$(".cont").addClass("container");
								$(".btn-xs").each(function(i) {
								    //alert(""+i);
					                var b = "#more"+(i+1);
					                var sh = ".sh"+(i+1);
					                var sym = "#sym"+(i+1);
					                $(b).click(function() {
						                $(sh).slideToggle(500);
					                    $(sym).toggleClass('fa-angle-up');
					                    $(sym).toggleClass('fa-angle-down');
						            });
						
					            });
							}
						});	
                    });
                })
	            
	           $(function () {
                    var srchval = "";
                    $(".si2").on('input', function () {
                        $(".load-gif-ress2").show();
                        srchval = $(this).val();
                        console.log("value = " + srchval);
	                var dataText="reqData=" + srchval;
	                $.ajax({
							type:"POST",
							url:"php/search2.php",
							data:dataText,
							//cache:false,
							//dataType:"html",
							success:function(result) { 
							    $(".load-gif-ress2").hide();
								$('.alltechs').html(result);
								$(".row2").addClass("row");
								$(".row2").css('justify-content','space-around');
								$(".desp").css('text-align','justify');
								$(".desp").css('margin-left','2%');
								$(".desp").css('margin-right','2%');
								$(".fa-frown-o").addClass("fa");
								$(".fa-frown-o").addClass("fa-lg");
								$(".techbox").addClass("container");
								
							}
						});	
                    });
                })
	            function log()
	            {
	                $("#user").css('border','1px solid black');
	                $("#pass").css('border','1px solid black');
	                if($("#user").val()==""){
	                    $("#user").css('border','2px solid red');
	                }
	                else if($("#pass").val()==""){
	                    $("#pass").css('border','2px solid red');
	                }
	                else
	                {
	                    $("#lmsg").hide();
	                    $("#load-gif").show();
	                    
	                    var dataText;
	                    if(adminvar==0)
	                    {
	                        dataText="admin=no";
	                        dataText= dataText+ "&user="+ $("#user").val();
	                        dataText =dataText+"&pass="+ $("#pass").val();
	                        //alert("admin var setting");
	                    }
	                    else
	                    {
	                        dataText="admin=yes";
	                        dataText= dataText+"&user="+ $("#user").val();
	                        dataText =dataText+"&pass="+ $("#pass").val();
	                    }
	                    //alert("before ajax");
	                    //alert(dataText);
	                    $.ajax({
							type:"POST",
							url:"login.php",
							data:dataText,
							success:function(result) { 
								$("#load-gif").hide();
								if(result=="yesmsg"){
								    $("#lmsg").show();
								}
								else if(result=="admin"){
								   window.location.href = "admin.php";
								}
								else
								{
								    $(".subsuc3").html("Welcome "+getCookie("uname")+"💐");
								    $("#overlay3").show();
								}
							},
							error: function(xhr, status, error) {
                                var err = eval("(" + xhr.responseText + ")");
                                 alert(err.Message);
                            }
						});	
	                }
	            }
	            
				function signout()
				{
					alert("Confirm logout ?");
					document.cookie="usermail=no";
					$(".data").css("display","none");
					$(".log").css("display","block");
					home_fun();
				}
				if(getCookie("usermail")=="no")
				{
					$('.log').show();
					$('.data').hide();
				}
				else
				{
					$('.log').hide();
					$('.data').show();
					$('#log').hide();
				}
				function moredes(val){
				    var b = "#more"+val;
					var sh = ".sh"+val;
					var sym = "#sym"+val;
					$(sh).slideToggle(500);
					$(sym).toggleClass('fa-angle-up');
					$(sym).toggleClass('fa-angle-down');
				}
		        function signup() {
		            
		            $("#regemail").css('border','1px solid black');
	                $("#regusername").css('border','1px solid black');
	                $("#regpass").css('border','1px solid black');
		            var atposition = $("#regemail").val().indexOf("@");  
				    var dotposition = $("#regemail").val().lastIndexOf(".");
				    
	                if($("#regusername").val()==""){
	                    $("#regusername").css('border','2px solid red');
	                    $("#wrong").fadeIn(1000);
					    $("#wrong").html("Enter Username");
	                }
	                else if($("#regemail").val()==""){
	                    $("#regemail").css('border','2px solid red');
	                    $("#wrong").fadeIn(1000);
					    $("#wrong").html("Enter Email");
	                }
	                else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=$("#regemail").val().length)
			    	{  
					    $("#wrong").fadeIn(1000);
					    $("#wrong").html("Invalid Email");
				    }  
	                else if($("#regpass").val()==""){
	                    $("#regpass").css('border','2px solid red');
	                    $("#wrong").fadeIn(1000);
					    $("#wrong").html("Enter Password");
	                }
	                else if($("#regpass").val().length<8){
	                    $("#regpass").css('border','2px solid red');
	                    $("#wrong").fadeIn(1000);
					    $("#wrong").html("Password must contain atleast 8 characters");
	                }
	                else{
	                    $("#load-gif2").show();
	                    $("#wrong").fadeOut(1000);
	                    var dataText = new FormData();
                        var files = $('#regimg')[0].files[0];
                        dataText.append('file',files);
                        dataText.append('username',$("#regusername").val());
                        dataText.append('email',$("#regemail").val());
                        dataText.append('pass',$("#regpass").val());
	                    $.ajax({
							type:"POST",
							url:"php/register.php",
							data:dataText,
							contentType: false,
							processData: false,
							success:function(result) { 
								$("#load-gif2").hide();
								if(result=="success")
								{
								    overlay2on();
								    $("#register").hide();
								    $("#login").show();
								    
								}
								else if(result=="failed")
								{
								    $("#wrong").fadeIn(1000);
								    $("#wrong").html("User already exists");
								}
								else
								{
								    $("#wrong").fadeIn(1000);
								    $("#wrong").html("Registration is not successfull !");
								}
							}
						});	
	                }
		        }
				 $(".ssub").click(function() {
					var ta = $("#textarea").val();
					var datas = 'text='+ta;
					ta = ta.replace(/  +/g, ' ');//Replace Multiple Spaces with Single Space
					if(ta==" " || ta==null)
					{
						alert("please write Something!");
					}
					else
					{
					    $("#msg-sending").show(100);
						$.ajax({
							type:"POST",
							url:"php/sug.php",
							data:datas,
							success:function(result) { 
							    if(result!="repeat")
							    {
							        $("#msg-sending").hide(100);
							        
								    $(".messages").html("<center>"+result+"</center>");
								    $(".fa-trash").addClass("fa");
								    $("#textarea").val("");
								    $("#notiblock p").html("Message Sent");
							        $("#notiblock").fadeIn('fast').delay(1500).fadeOut('slow');
								    $(".sug").hover(function(){
					                    $(this).css('background-color','#f2f2f2');
					                    var id = "#"+ $(this).attr("id") +" .fa-trash";
					                    console.log(id);
					                    $(id).show(500);
					                
                                    },function(){
                                        $(this).css('background-color','#fff');
                                        var id = "#"+ $(this).attr("id") +" .fa-trash";
					                    $(id).hide(500);
                                    });
							    }
							    else
							    {
							        alert("Don't repeat the message");
							    }
							}
						});			
					}
					return false;
				});
				
				function getCookie(cname) {
				    var name = cname + "=";
				    var decodedCookie = decodeURIComponent(document.cookie);
				    var ca = decodedCookie.split(';');
				    for(var i = 0; i < ca.length; i++) {
					    var c = ca[i];
					    while (c.charAt(0) == ' ') {
					        c = c.substring(1);
					    }
				        if(c.indexOf(name) == 0) {
				        	return c.substring(name.length, c.length);
				        }
				    }
				    return null;
				}

				function overlay3off()
				{
					document.getElementById("overlay3").style.display = "none";
					location.reload();
				}
				function overlay2off()
				{
					document.getElementById("overlay2").style.display = "none";
				}
				function overlay2on()
				{	
					document.getElementById("overlay2").style.display = "block";
				}
				function edit(){
				    //alert("edit");
				    $("#home").hide();
				    document.getElementById("suggestion").style.display = "none";
					document.getElementById("about").style.display = "none";
					document.getElementById("technews").style.display = "none";
					document.getElementById("login").style.display = "none";
					document.getElementById("register").style.display = "none";
					$("#forgotp").hide();
					document.getElementById("mc_embed_signup").style.display = "block";
				    document.getElementById("mySidenav").style.height = "0";
					$("#followus").css('position','relative');
					$("#followus").css('bottom','none');
					$("#followus").css('width','100%');
					window.scrollTo(0,0);
				}
				function forgotpp(){
				    $("#login").hide();
				    $("#forgotp").show();
				    $("#followus").css('position','absolute');
				    $("#followus").css('bottom','0');
				    $("#followus").css('width','100%');
			    }
				function getotp(){
				    var emailid = $("#emailid-field").val();
				    var atposition = emailid.indexOf("@");  
				    var dotposition = emailid.lastIndexOf(".");
				    $("#otpspinner").show();
				    $("#otpspinner").html("<i class='fa fa-circle-o-notch fa-spin fast-spin slow-spin' style='font-size:25px'></i>");
				    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=emailid.length || emailid =="" || emailid==" ")
			    	{  
			    	    $("#otpspinner").html("<div style='color:red;font-weight:bold;padding-bottom:15px;'>Please enter valid Email-ID </div>");
				    }
				    else{
				    var dataText ="email="+emailid;
				    $.ajax({
							type:"POST",
							url:"php/checkmail.php",
							data:dataText,
							success:function(result) {
							    if(result=="success")
							    {
							        var otp = Math.floor(Math.random()*899999+100000);
				                    var body1 = 'OTP for Resetting CSTechnicalWorks Account Password : '+ otp;
				                    localStorage.setItem("csotp", otp);
	                                Email.send({
	                                Host: "smtp.gmail.com",
	                                Username : "********@gmail.com",
	                                Password : "**********",
	                                To : emailid,
	                                From : "cstechnicalworks@gmail.com",
	                                Subject : "Password Resetting",
	                                Body : body1,
	                                }).then(
		                                message => document.getElementById("otpspinner").innerHTML = "<div style='color:red;font-weight:bold;padding-bottom:15px;'>OTP Sent</div>"
	                                );
							        var inct = 30;
				                    $("#sendcode").prop('disabled', true); 
				                    $("#otp-field").fadeIn(1000);
                                    fh();
                                    function fh() {
                                        t = setTimeout(fh, 1000);
                                        inct = inct-1;
                                        if (inct>0) {
                                            $("#sendcode").html("Resend OTP in "+inct+"s");
                            
                                        }
                                        else
                                        {
                                            clearTimeout(t);
                                            $("#sendcode").prop('disabled', false);
                                            //$("#spinnerresend").hide(100);
                                            $("#sendcode").html("Resend OTP");
                                        }
                                    }
							        
							    }
							    else
							    {
							        $("#otpspinner").html("<div style='color:red;font-weight:bold;padding-bottom:15px;'>Email not registered </div>");
							    }
							}
					});
				    }
				}
				var tt;
				function updatepassword()
				{
				    var newpass = $("#newpass-field").val();
				    if(newpass!="" && newpass.length>=8)
				    {
				        $("#rstspinner").show();
				        var dataText="pass="+$("#newpass-field").val();
				        $.ajax({
							type:"POST",
							url:"php/updatepass.php",
							data:dataText,
							success:function(result) {
							    if(result=="success")
							    {
							        alert("Redirecting to login page");
							        $("#rstspinner").hide();
							        $("#resetpassword").hide();
							        $("#login").show();
							        $("#followus").css('position','absolute');
				                    $("#followus").css('bottom','0');
				                    $("#followus").css('width','100%');
							    }
							    else
							    {
							        alert("Password not changed!");
							    }
							}
						});
				    }
				    else{
				        alert("password must contain atleast 8 characters!");
				    }
				    
				}
				function checkotp(){
				    var otp = localStorage.getItem("csotp");
				    if($("#otp-field").val()==otp){
				        $("#forgotp").hide();
				        $("#resetpassword").fadeIn(300);
				        
				    }
				    else{
				        alert("===Wrong===");
				    }
				}
				function home_fun(){
					snd.pause();
					snd.currentTime = 0;
					clearTimeout(tt);
					$("#forgotp").hide();
					$("#resetpassword").hide();
					document.getElementById("suggestion").style.display = "none";
					document.getElementById("about").style.display = "none";
					document.getElementById("technews").style.display = "none";
					document.getElementById("login").style.display = "none";
					document.getElementById("register").style.display = "none";
					$("#home").show();
					openclose();
					$("#followus").css('position','relative');
					$("#followus").css('bottom','none');
					window.scrollTo(0,0);
				}
				function suggestion_fun(){
				snd.pause();
				snd.currentTime = 0;
				clearTimeout(tt);
				$("#forgotp").hide();
				$("#resetpassword").hide();
				document.getElementById("home").style.display = "none";
				document.getElementById("about").style.display = "none";
				document.getElementById("technews").style.display = "none";
				document.getElementById("login").style.display = "none";
				$("#suggestion").show();
				document.getElementById("register").style.display = "none";
				var k = getCookie("usermail");
				

				if(k!="no")
				{
					$("#notlogged").css("display","none");
					$("#supage").css("display","block");
					
				}
				else
				{
					$("#notlogged").css("display","block");
					$("#supage").css("display","none");
					$("#followus").css('position','absolute');
					$("#followus").css('bottom','0');
					$("#followus").css('width','100%');
					
				}
				
				var temp = document.getElementsByClassName("msgbox")[0].getBoundingClientRect(); 
				window.scrollTo(0,temp.y);
				    
                    var count1 = 0;
                    var txtt = 'Write something in message box !';
                    var speed = 100;
                    $("#matter").html("");
                    typeWriterr();
                    function typeWriterr() {
                        if (count1 < txtt.length) {
                            document.getElementById("matter").innerHTML += txtt.charAt(count1);
                            count1++;
                            setTimeout(typeWriterr, speed);
                        }
                    }
                
				}
				
				function suggg()
				{
					$('#nosug').css('display','none');
					$('#nosug').hide();
					$('#sugmsg').show(500);
					$('#sugmsg').css('display','block');
				}
				function nosuggg()
				{
				    //alert('h');
					//$('#sugmsg').css('display','none');
					$("#sugmsg").hide(500);
					//$('#nosug').css('display','block');
					$("#nosug").show(500);
				}
				function about_fun(){
			
	            snd.play();
	            $("#forgotp").hide();
	            $("#resetpassword").hide();
				document.getElementById("suggestion").style.display = "none";
				document.getElementById("home").style.display = "none";
				document.getElementById("technews").style.display = "none";
				document.getElementById("login").style.display = "none";
				$("#about").show();
				document.getElementById("register").style.display = "none";
				$("#followus").css('position','relative');
					$("#followus").css('bottom','none');
					$("#followus").css('width','100%');
				window.scrollTo(0,0);
                    var count1 = 0;
                    var txtt = "Hello everyone, This website will mainly replicate our tech youtube channel CS Technical Works we'll post the latest tech news about upcoming smartphones laptops, electronic gadgets etc.. and youtube videos in this website regularly. if you guys have any doubts or complaints about smartphones, personal computers, laptops, tablets, feature phones, mobile accessories and computers accessories you can comment in my youtube channel or otherwise you can suggest in suggestions section of this website. if you still didn't subscribed our channel do subscribe to our youtube channel Subscribe share our website and youtube channel and make digital world.";
                    var speed = 35;
                    $("#abouttext").html("");
                    typeWriterr2();
	                
                    function typeWriterr2() {
                        if (count1 < txtt.length) {
                            document.getElementById("abouttext").innerHTML += txtt.charAt(count1);
                            count1++;
                            tt = setTimeout(typeWriterr2, speed);
                        }
                        else
                        {
                            var temp = $("#abouttext").html().replace("CS Technical Works","<b>CS Technical Works</b>");
                            var temp1 = temp.replace("Subscribe","<a href='https://www.youtube.com/channel/UCLMFUUiGdSU7iAw9NlWOT9w/featured' ><b>Subscribe</b></a>");
                            $("#abouttext").html(temp1);
                            snd.pause();
                            snd.currentTime = 0;
                            clearTimeout(tt);
                            
                        }
                    }
                    
				
				}
				function technews_fun(){
				
				snd.pause();
				clearTimeout(tt);
				snd.currentTime = 0;
				window.scrollTo(0,0);
				$("#forgotp").hide();
				$("#resetpassword").hide();
				document.getElementById("suggestion").style.display = "none";
				document.getElementById("about").style.display = "none";
				document.getElementById("home").style.display = "none";
				document.getElementById("login").style.display = "none";
				$("#technews").show();
				document.getElementById("register").style.display = "none";
				$("#followus").css('position','relative');
					$("#followus").css('bottom','none');
					$("#followus").css('width','100%');
				
				
				}
				function login_fun(){
				snd.pause();
				snd.currentTime = 0;
				clearTimeout(tt);
				$("#forgotp").hide();
				$("#resetpassword").hide();
				document.getElementById("suggestion").style.display = "none";
				document.getElementById("about").style.display = "none";
				document.getElementById("technews").style.display = "none";
				document.getElementById("home").style.display = "none";
				$("#login").show();
				document.getElementById("register").style.display = "none";
				$("#lmsg").hide();
				$("#followus").css('position','absolute');
				$("#followus").css('bottom','none');
				$("#followus").css('width','100%');
				$("#followus").css('margin-bottom','0%');
				window.scrollTo(0,0);
				}
				function register()
				{
				    $("#forgotp").hide();
				    $("#resetpassword").hide();
				    document.getElementById("suggestion").style.display = "none";
				    document.getElementById("about").style.display = "none";
				    document.getElementById("technews").style.display = "none";
				    document.getElementById("home").style.display = "none";
				    document.getElementById("login").style.display = "none";
				    $("#register").show();
				    $("#followus").css('position','fixed');
					$("#followus").css('bottom','0');
					$("#followus").css('width','100%');
				    window.scrollTo(0,0);
				}
				
				function openNav() 
				{
				    if($(window).width() > 768)
				    {
				        $("#mySidenav").fadeIn(100);
					    document.getElementById("mySidenav").style.width = "280px";
					    $("#afternavbardiv").css('filter','blur(5px)');
				    }
				    else
				    {
				        $("#mySidenav").fadeIn(100);
					    document.getElementById("mySidenav").style.height = "65%";
					    $(".sidenav").css('top','70');
					    $("#afternavbardiv").css('filter','blur(5px)');
					    $(".closenav").show();
				    }
				}
				function closeNav()
				{
				    if($(window).width() > 768)
				    {
				        document.getElementById("mySidenav").style.width = "0";
					    $("#afternavbardiv").css('filter','none');
					    $("#mySidenav").fadeOut(200);
				    }
				    else
				    {
				        //$(".closenav").hide();
				        $("#afternavbardiv").css('filter','none');
				        document.getElementById("mySidenav").style.height = "0";
				        $("#mySidenav").fadeOut(200);
				        
				    }
				}
					    
				function openclose()
				{
				    if($(window).width() > 768)
				    {
				        if($("#mySidenav").width()=="0")
				        {
				            $("#mySidenav").fadeIn(100);
				            $("#afternavbardiv").css('filter','blur(5px)');
				            document.getElementById("mySidenav").style.width = "280px";
				        }
				        else
				        {
				            $("#afternavbardiv").css('filter','none');
				            document.getElementById("mySidenav").style.width = "0";
				            $("#mySidenav").fadeOut(200);
				        
				        }
				    }
				    else
				    {
				        if($("#mySidenav").height()=="0")
				        {
				            $("#mySidenav").fadeIn(100);
				            $("#mySidenav").css('height','65%');
				            $(".sidenav").css('top','70');
				        }
				        else
				        {
				            $("#afternavbardiv").css('filter','none');
				            $("#mySidenav").css('height','0');
				            $("#mySidenav").fadeOut(200);
				        
				        }
				    }
				}
				
				
				//  $('.counter').each(function () {
				     
				//      alert("fff");
				     
    //                  $(this).prop('Counter',0).animate({ 
    //                      Counter: $(this).text()
    //                      }, {
    //                      duration: 5000,
    //                      easing: 'swing',
    //                      step: function (now) {
    //                          $(this).text(Math.ceil(now));
    //                      }
    //                  });
    //              });
	</script>
			<div class="registerpage form-group" id="register">
					<form method="post" enctype="multipart/form-data" id="registerForm">
					<div class="row">
						<div class="col-lg-4 col-md-2 col-sm-2" align="center" >
						        <div class="vl1">&nbsp </div>
						</div>
						<div class="col-lg-4 col-md-10 col-sm-10" style="text-align:center;">
						<div class="container registercont">
						    <div id="load-gif2">
							    <div class="loadingdiv2"></div>
							</div>
							<center>
								<br>
								<h3 style="letter-spacing:1px;text-shadow:1px 1px 1px white;" >Sign up</h3>
								<br>
								<span id="wrong"></span>
								<input class="form-control" type="text" id="regusername" placeholder="Username"   required /><br>
								<input class="form-control" type="text" id="regemail" placeholder="Email Id"  required />
								<br>
								<input class="form-control" type="password" id="regpass" placeholder="Password"  required /><br>
								<input class="form-control" type="file" id="regimg" /><br>
								<br>
								<input class="form-control btn" onclick="signup()" style="transition:0.7s;" type="button" value="Register" /><br><br>
							</center>
						</div>
						</div>
						<div class="col-lg-4 col-md-2 col-sm-2" align="center">
						    <div class="vl2">&nbsp </div>
						</div>
					</div>
					</form>
			</div>
			
			<div id="followus" >
						<div >
							<a href="#" class="footer-links" onclick="home_fun()">videos</a>
							<a href="#" class="footer-links footerhline" style="border-right:2px solid #6B6B6C;" ></a>
							<a href="#" class="footer-links" onclick="home_fun()">links</a>
							<a href="#" class="footer-links footerhline" style="border-right:2px solid #6B6B6C;" ></a>
							<a href="privacy.html" target="_blank" class="footer-links" >privacy policy</a>
							<a href="#" class="footer-links footerhline" style="border-right:2px solid #6B6B6C;" ></a>
							<a href="#" class="footer-links" onclick="about_fun()">about</a>
						</div>
						<center> 
							<hr class="footerhr"  />
						</center>
						<b style="letter-spacing:10px;">follow  us</b> &nbsp&nbsp
						<a href="https://www.facebook.com/CS-Technical-Works-1331647520247532/" targer="_blank" ><i class="fa fa-facebook-square fa-lg af" aria-hidden="true"></i></a>
						<a href="https://twitter.com/charankontham" targer="_blank" ><i class="fa fa-twitter-square fa-lg af" aria-hidden="true"></i></a>
						<a href="https://wa.me/919505678967" targer="_blank" ><i class="fa fa-whatsapp fa-lg af" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCLMFUUiGdSU7iAw9NlWOT9w" targer="_blank" ><i class="fa fa-youtube-play fa-lg af" aria-hidden="true"></i></a>
						
			</div>
			</div>
			
</body>
</HTML>
