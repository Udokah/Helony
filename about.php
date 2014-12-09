<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Helony Concept Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Founded originally on a part-time basis, Helony Concept is a small business designed to meet the needs of the ever changing social world. Alagomeji, Yaba is the current home with plans to expand to branch offices within four years. Helony Concept;s staff of four, with numerous contract vendors, plans events, writes event-planning products, and trains students in the art of event planning' ;
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

<div class="about-Us">

<div class="summary">
<h3>Company Summary</h3>
<p>
Founded originally on a part-time basis, Helony Concept is a small business designed to meet the needs of the ever changing social world. Alagomeji, Yaba is the current home with plans to expand to branch offices within four years. Helony Concept's staff of four, with numerous contract vendors, plans events, writes event-planning products, and trains students in the art of event planning. Helony Concept is, in part, the answer to demands of the social world, on the working family, heavily-burdened office, out-of-town business, or special occasion in need of special recognition. As a business, we understand the needs of public and private organizations. As parents and family members, we understand the needs of setting special time apart from other events in our lives. Helony Concept strives to accomplish these goals, in Lagos and eventually other areas of the Nation. 
</p>
</div>

<div class="mission">
<h3>Mission</h3>
<p>In an ever changing, fast-paced world, success is determined by good choices for lasting effects. Communication is essential. Helony Concept strives to be the best choice of clients by helping to ease their event planning burden. Through consistent, predictable professionalism, we will ensure a worry and hassle-free event at a reasonable price.<br>
Keeping in tune with the needs of the market, utilizing the latest technology and trends, all while ensuring the client receives the individual attention they deserve, is the vision and daily mission of Helony Concept.
</p>
</div>

<div class="mission">
<h3>Objectives</h3>
<p>Helony Concept is a small business aimed at the big time. In order to reach its lofty goals, we focus on the mission behind the vision. We offer a host of packages and services specifically tailored to the needs of our client. 
</p>
</div>

<div class="keys">
<h4><label>keys to Success</label></h4>
<span>
<p>Our keys to success include the commitment to quality by every person who is part of the team. Each of us will be responsible to push ourselves to a higher level of professionalism in three areas:</p>
<ul>
<li><a href="Javascript:void();">Accurate and consistent fulfillment of the client’s wishes</a></li>
<li><a href="Javascript:void();">Competitive and affordable pricing for the quality of services offered</a></li>
<li><a href="Javascript:void();">Significant profit made on each event planned</a></li>
</ul>
</span>
</div>

<div class="summary">
<h3>Executive Summary</h3>
<p>
HELONY CONCEPT is a full service company that provides complete consulting services for weddings, anniversaries, company end of year parties and hampers packaging for companies.  Our workers are experienced and dedicated professionals with many years of event planning experience. Helony Concept is unique in that we give our clients our undivided attention. We listen to their needs and work with them to create the event of their dreams. Our clients' wishes become our commands. So whether our client wants a Western, Tropical or more traditional event, we can help. Our services include weddings, honeymoons, receptions, anniversary consultations, end of year party for companies, budget planning, as well as full-service referrals to florists, musicians, etc.
</p>
</div>


</div>

</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>