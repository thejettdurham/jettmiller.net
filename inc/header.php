<!DOCTYPE html>
<?php require_once('inc/functions.php'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
        <title><?php echo $page_title; ?></title>
		
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic|Arizonia' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.magnificpopup.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    </head> 
    <body>
		<?php if ($page_name == "index") { require_once('inc/githubModule.php'); } ?>
		<div id="page-wrapper">
			<div id="header">
				<img src="img/bg-header.jpg" alt="Jett Miller" title="The Jett Miller, not to be confused with the other Jett Millers" />
			</div>
			<!-- Inputs are for Pure-CSS Mobile Menu Drawer -->
			<input id="menuButtonCheck" type="checkbox" value="1" />
			<label for="menuButtonCheck" id="menuButton"></label>
			<div id="navBar" class="cf">
				<ul class="mainNav">
					<li class="<?php if ($page_name == "index") { echo "page-on"; } ?>"><a href="index.html" >Home</a></li>
					<li class="<?php if ($page_name == "portfolio") { echo "page-on"; } ?>"><a href="portfolio.html">Portfolio</a></li>
					<li class="<?php if ($page_name == "resume") { echo "page-on"; } ?>"><a href="resume.html">Resume</a></li>
					<li class="<?php if ($page_name == "testimonials") { echo "page-on"; } ?>"><a href="testimonials.html">Testimonials</a></li>
					<li class="<?php if ($page_name == "contact") { echo "page-on"; } ?>"><a href="contact.html">Contact</a></li>
				</ul>
				<ul class="social">
					<li><a href="http://www.facebook.com/thejettmiller" target="_blank">F</a></li><li><a href="http://twitter.com/thejettmiller" target="_blank">L</a></li><li><a href="http://www.linkedin.com/in/thejettmiller" target="_blank">I</a></li><li><a href="http://www.youtube.com/user/Jmiller394" target="_blank">X</a></li></ul>
			</div>