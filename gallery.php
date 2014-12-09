<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Helony Concept Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Helony Concept Gallery of event designs , cakes and hair fascinators.' ;
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

<!-- Lightbox Plugin file -->
<script type="text/javascript" src="plugins/lightbox/jquery.lightbox-0.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/lightbox/jquery.lightbox-0.5.css" media="screen" />

<script>
    $(function() {
	$('#gallery ul').load('ajax/loadimage.php', function(){
	 $('#gallery a').lightBox();
	});
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
<h1><?php echo $page ; ?></h1>

<div id="gallery">
<ul style="text-align:center;">
<img src="img/lightbox-ico-loading.gif" />
</ul>
</div>

</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>