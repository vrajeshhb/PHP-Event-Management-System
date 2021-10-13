<?php
include("connect.php");

session_start();
	
	if(isset($_POST['submit'])){
		$uname = $_POST['mail'];
		$pass = $_POST['pass'];
		
		$sql="select * from user where email = '$uname' and pass= '$pass' ";
		$res=mysql_query($sql);
		$no=mysql_num_rows($res);
		
if (!$res) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
		
		if($no >0 )
		{ 
			$_SESSION["user"] = $uname;
			header("location:user/index.php");
		 }
		else
		{
			header("location:login.php?msg=err");
		}
	}
		
	
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Login</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script src="js/jquery.shuffle-images.js"></script>


<style>

table{
font-size:25px;
border:#000000;

width:650px;


}
.in{
height:35px;
width:300px
}

.bu{
height:35px;
width:45px
background-color:#FF99FF;
}

td{
padding: 15px 15px 15px 15px;;
}

</style>

</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h1>
          <a href="index.php">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
       
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="gallery.php">Gallery</a></li>
             <li><a href="register.php">Register</a></li>
             <li class="current"><a href="Login.php">Login</a></li>
           </ul>
          </nav>
          <div class="clear"></div>
        </div>       
      </div>
    </div>
  </div>
</header>
<!--=====================
          Content
======================-->
<section id="content">
  <div class="container">
   <div style="margin-left:300px; border-style:outset; border-width:thin; border-bottom-width:thick; width:650px; margin-top:40px">
   	<form action="Login.php" method="post" name="frm" >
	<h4><b>Login :</b></h4>
	<?php
	if(isset($_GET['msg'])=="err")
	{ ?>
		<p style="color:#FF0000;">Invalid E-MAIL name or PASSWORD</p>
<?php } ?>
	<br>
	<table>
		<tr>
			<td>Enter Email Address <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input class="in" type="text" id="3" name="mail" placeholder="abc@mail.com" required /></td>
		</tr>
		
		<tr>
			<td>Enter Password <label style="font-size:15px; color:#FF0000;">(*)</label></td>
			<td><input type="password" class="in" name="pass" placeholder="*********" required/></td>
		</tr>
		
		<tr>
			<td><input class="bu" type="submit" name="submit" value="Login"/></td>
			<td> <input class="bu"  type="reset" name="reset" value="Reset"/></td>
		</tr>
	</table>
	</form>
	</div>
  </div>
</section>

<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12" align="center"> 
        <div class="copyright"><a href="#" class="f_logo"><img src="images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub_copyright">
            Website designed by <a href="" rel="nofollow">Manan Thakrar And Abhay Shah </a><br>
			<b><a href="admin/Login.php">(ADMIN LOGIN)</a></b>
          </div>
        </div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</div>
</body>

</html>

