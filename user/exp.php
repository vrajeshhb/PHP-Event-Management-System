<?php
include("connect.php");
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME | EXPLORE</title>
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
width:1100px;
color:#0000FF;
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
padding: 15px 15px 15px 70px;
}
tr
{
	border-bottom:thick;
	border-bottom-color:#000000;
	border-bottom-width:5px;
	border-bottom-style:outset;
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
             <li ><a href="index.php">Home</a></li>
             <li class="current"><a href="exp.php">Eplore</a></li>
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
 
  <div class="container gallery">
    <div class="row">
     
	  <div class="grid_12">

	    <div class="row">

<form action="exp.php" method="post">
	<h4 align="center">Select Event :
<select align="center" name="select">
<?php
	$s = "SELECT * FROM main" ;			
	$q=mysql_query($s);
	$no=0;
	while($res=mysql_fetch_array($q))
	{
	?>
	
	<option value="<?php echo $res[0]; ?>">  <?php echo $res[1]; ?> </option>
	
	<?php
	}
?>
</select>

<input type="submit" name="view" value="View"/>

</form>




<table style="margin-left:100px;">
	<tr>
		<td>Event Name</td>
		<td>organizer </td>
		<td>Limit </td>
		<td>Image </td>
		<td> </td>
	</tr>

<?php
if(isset($_POST['view']))
{
	$sql = "select * from sub where main_id = '".$_POST['select']."' and enable = 1";
	$q=mysql_query($sql);
	while($res=mysql_fetch_array($q))
	{
			
?>
	<tr>
	<td><?php echo $res[2]; ?></td>
	<td><?php echo $res[6]; ?></td>
	<td><?php echo $res[4]; ?></td>
	<td><img src="<?php echo 'data:image;base64,'.$res[7].' '; ?>" alt="" height="200" width="200"/></td>
	<td><a href="view.php?code=<?php echo $res[0]; ?>" style="color:#0000FF; font-size:25px; font-weight:500;">VIEW EVENT</a> </td>
	</tr>
<?php
	}
}
?>


</table> 
     
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
else
{header("location:../index.php");}
?>
