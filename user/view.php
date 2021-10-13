<?php
include("connect.php");
session_start();

if(isset($_SESSION["user"]))
{

if(isset($_GET['code']))
{
	//echo $_GET['code'];
	$sql = "SELECT * FROM  `sub` WHERE id =  '".$_GET['code']."' ";
	$result = mysql_query($sql);
	//echo $sql;
	if (!$result)
	{
	   	echo 'Could not run query: ' . mysql_error();
	   	exit;
	}
	$row = mysql_fetch_row($result);
	$mid = $row[1];
	$name = $row[2];
	$da = $row[3];
	$limit = $row[4];
	$org = $row[6];
	$image = $row[7];
	
	
	$s = "select * from main where id = '$mid' ";
	$result = mysql_query($s);
	while($res=mysql_fetch_array($result))
	{
		$main_event = $res[1];
		$location = $res[3];
	}	
	
}
else
{
	header("location:user/index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $name; ?></title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="../css/touchTouch.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/script.js"></script> 
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/tmStickUp.js"></script>
<script src="../js/jquery.ui.totop.js"></script>
<script src="../js/touchTouch.jquery.js"></script>
<script src="../js/jquery.shuffle-images.js"></script>

<script>
  $(window).load(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
    $('.gallery .info').touchTouch();
  }); 

   $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
    });
</script>
<style>

table{
font-size:25px;
border:#000000;
width:650px;
color:#000000;
font-weight:bold;
border-bottom:#000000;
border-top:#000000;
}
.in{
height:35px;
width:200px
}

.bu{
height:35px;
width:45px
background-color:#FF99FF;
}

td{
padding: 15px 15px 15px 70px;;
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
            <img src="../images/logo.png" alt="Logo alt">
          </a>
        </h1>
       
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li class="current"><a href="index.php">Home</a></li>
             <li><a href="exp.php">Eplore</a></li>
             <li><a href="exp2.php">Latest Uploads</a></li>
             <li><a href="profile.php">View Profile</a></li>
             <li><a href="logout.php">Logout</a></li>
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
 

 <form action="reg.php" method="post" enctype="multipart/form-data" >
<center>
<img src="<?php echo 'data:image;base64,'.$image.' '; ?>" height="500" width="500" />
<br /><br />

	<table>
		
		<tr>
			<td>Event Name : </label></td>
			<td><?php echo $name; echo "    (".$main_event.")"; ?></td>
		</tr>
		
		<tr>
			<td>Enter Location :</td>
			<td><?php echo $location; ?> </td>
		</tr>
		
		<tr>
			<td>Event Date : </td>
			<td><?php echo $da; ?></td>
		</tr>
		
		<tr>
			<td>Event organizer	: </td>
			<td><?php echo $org; ?></td>
		</tr>
		
		<tr>
			<td>Entry Limit	: </td>
			<td><?php echo $limit; ?></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><br /><input type="hidden" name="sub_id" value="<?php echo $_GET['code']; ?>" /> <input type="hidden" name="main_id" value="<?php echo $mid; ?>" /> <input type="submit" name="reg" value="Register"  style="background-color:#FF0000; height:50px; width:100px; font-size:22px; font-weight:400;"/></td>
		</tr>
		
	</table>
	</form>
  	</center>

  </div>
</section>

<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12" align="center"> 
        <div class="copyright"><a href="#" class="f_logo"><img src="../images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub_copyright">
            Website designed by <a href="" rel="nofollow">Manan Thakrar And Abhay Shah </a>
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





<?php
}
else{	header("location:../index.php");
}
?>