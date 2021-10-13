<?php
include("connect.php");
session_start();
if(isset($_SESSION["user"]))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User | Home</title>
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
 
  <div class="container gallery">
    <div class="row">
     
	  <div class="grid_12">
        <h4>Events</h4>
	    <div class="row">
<?php
$q="SELECT * FROM  `sub` where enable = 1  LIMIT 0 , 30";
$sql=mysql_query($q);
while($res = mysql_fetch_array($sql))
{
?>
	 
	  	      <div class="grid_4">
			  <br><br>
            <div class="view">  
              <img src="<?php echo 'data:image;base64,'.$res[7].' '; ?>" alt="" height="300" width="400"/>  
              <div class="mask">
                <a href="<?php echo 'data:image;base64,'.$res[7].' '; ?>" class="info fa fa-search" title="Full Image"></a> 
              </div>  
            </div>   
<center>		  <a href="view.php?code=<?php echo $res[0]; ?>" style="color:#0000FF; font-size:25px; font-weight:500;">VIEW EVENT</a></center>
		  </div>
		  
		  
<?php  }   ?>
	 
	 
	 
    </div>
      </div>
  
     
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
}else
{
header("location:../index.php");
}
?>