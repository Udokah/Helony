<?php 
ob_start(); 
$page = 'home' ;
$title = 'Helony Concept - Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Helony Concept is a full service company that provides complete consulting services for weddings, anniversaries, birthday parties, company end of year parties and hampers packaging for companies.' ;
?> 
<!DOCTYPE HTML>
<html manifest="cache.manifest">
<head>
<title><?php echo $title ; ?></title>
<meta charset="utf-8" />
<meta http-equiv="Content-Language" content="en-US" />
<meta name="Keywords" content="<?php echo $keywords ; ?>" />
<meta name="Description" content="<?php echo $description ; ?>" />
<link rel="icon" href="img/logo.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>

<!-- the nicescroll script -->
<script type="text/javascript" src="plugins/nicescroll/nicescroll.min.js"></script>
<script type="text/javascript" src="plugins/nicescroll/nicescroll.plus.js"></script>

<!-- Simple Audio Files -->
<link rel="stylesheet" href="plugins/SimpleAudio/dependencies/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="plugins/SimpleAudio/simple-html5-music-player.css">
<script src="plugins/SimpleAudio/simple-html5-music-player.min.js" type="text/javascript"></script>

<script src="js/script.js"></script>
<script>
     $(document).ready(function(){
	 $(".Slideshow > div:gt(0)").hide();
	 setInterval(function() { 
     $('.Slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.Slideshow');
    },  5000);
    });
	
</script>
</head>
<body>
<div class="container">

<div class='hide'><?php include('inc/fn.php');?></div>

<?php include('inc/header.php');?>

<div class="wrapper">
<div class="navigation">
<?php $nav = Generate_Navigation($page) ; echo $nav ; ?>
<?php include('inc/social.php') ; ?>
</div>

<div class="Main">

<section>

<div class="Slideshow">
<?php
//path to directory to scan
$directory = 'img/slides/';
//get all image files with a .jpg extension.
$images = glob($directory . "*.jpg");
//print each file name
foreach($images as $image) { echo "<div><img src='$image'  alt='slide'  /></div>" ; }
?>
</div>

<div class="boxHolder">
<div class="box">
<h2>Who we are.....</h2>
<p>Founded originally on a part-time basis, Helony Concept is a small business designed to meet the needs of the ever changing social world.  Alagomeji, Yaba is the current home with plans to <a href="./About">...continue</a></p>
</div>

<div class="box">
<h2>What we do.....</h2>
<p>We are a full service company that provides complete consulting services for weddings, anniversaries, company end of year parties and hampers packaging for companies <a href="./Services">...continue</a></p>
</div>
</div><!-- end of box holder -->
</div>
</section><!-- End of Section -->

<div class="clear"></div>
</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>