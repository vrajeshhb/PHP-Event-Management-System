<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
       
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li class="current"><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="gallery.php">Gallery</a></li>
             <li><a href="register.php">Register</a></li>
             <li><a href="Login.php">Login</a></li>
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
    <div class="row">
      <div class="page1_block">
        <div class="grid_6">
          <img src="images/page1_img1.jpg" alt="">
        </div>
        <div class="grid_6">
          <h2 style="font-size:50px">Best Event for Your<br>Self Development and Fun</h2>
          <div class="row">
            <div style="margin-left:35px">
              <img src="images/page1_img2.jpg" width="540px" height="270" alt="">
            </div>
            
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="grid_10 preffix_1">
        <div class="block1">
          <div class="block1_title">
           All Events Tecnical And Non-Techinal Are Here Waiting For Your Particpance. Refister Quickly With Only Few Steps.
            <span><br>After Registration You Find Out All The Details For The Events.</span>
          </div>
         <hr>
        </div>
      </div>
    </div>
  </div>
  <div class="container gallery">
    <div class="row">
      <div class="grid_8">
        <h4>Recent Events</h4>
        <div class="row">
          <?php include("connect.php");
$q="SELECT * FROM  `sub` LIMIT 0 , 4";
$sql=mysql_query($q);
while($res = mysql_fetch_array($sql))
{
		  ?>
		  <div class="grid_4">
            <div class="view">  
              <img src="<?php echo 'data:image;base64,'.$res[7].' '; ?>" alt="" height="300" width="400"/>  
              <div class="mask">
                <a href="<?php echo 'data:image;base64,'.$res[7].' '; ?>" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
<?php   }      ?>
<!--
		  <div class="grid_4">
            <div class="view">  
              <img src="images/page1_img9.jpg" alt="" />  
              <div class="mask">
                <a href="images/gallery/big2.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img src="images/page1_img10.jpg" alt="" />  
              <div class="mask">
                <a href="images/gallery/big3.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
         
		  <div class="grid_4">
            <div class="view">  
              <img src="images/page1_img11.jpg" alt="" />  
              <div class="mask">
                <a href="images/gallery/big4.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div> 
            </div>   
          </div>-->
        </div>
      </div>
      <div class="grid_4">
        <h4>Reviews By Students :</h4>
		<?php
  $l = "SELECT * FROM  `fed` ORDER BY  `fed`.`id` DESC LIMIT 0 , 4";
  $q=mysql_query($l);
	while($r = mysql_fetch_array($q))
	{  
?>
        <blockquote class="bq1">
          <img src="images/update_user.jpg" alt="">
          <div class="extra_wrapper">

  
            <p>“<?php echo $r[2]; ?> ”</p>
            <div class="color2">- <?php echo $r[3]; ?></div>
          </div>
        </blockquote>
		<?php } ?>
      <!--  <blockquote class="bq1">
          <img src="images/page1_img13.jpg" alt="">
          <div class="extra_wrapper">
            <p>“Hurabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipgolo... ”</p>
            <div class="color2">- Mike Brown, Client</div>
          </div>
        </blockquote>-->
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
        <div class="copyright"><a href="#" class="f_logo"><img src="images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
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

