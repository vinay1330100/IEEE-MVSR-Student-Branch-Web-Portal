<!DOCTYPE html>
<html lang="en">
<head>
	<title>IEEE - MVSR SB</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- for menu -->
	<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<style>
td {
height:35px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
	<!-- close menu -->
	
<!-- real slide show -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<style type="text/css">


</style>
	
</head>

<body class="body">
<header class="header-bar">
<?php include 'topmenu.php'; ?>
</header>
	
<header class="mainHeader">
		<img src="images/header-banner.jpg">
</header>


<section class="menulayout">
<?php include 'menulayout.php'; ?>
</section>

<section id="feedback">
<ul>
<li><a href="regtform.php">Register</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>
</section>

<section id="social-nw">
<h3>
Join Us
</h3>
<ul>
<li><a href="https://www.facebook.com/IeeeMvsr?ref=hl">
<img src="socialnw/fb.png" width="50" height="50">
</a></li>
<li><a href="https://twitter.com/IEEEMvsr">
<img src="socialnw/tw.png" width="50" height="50">
</a></li>
<li><a href="https://www.linkedin.com/groups/IEEE-Student-Branch-MVSR-4775277?gid=4775277&mostPopular=&trk=tyah&trkInfo=tarId%3A1406737500993%2Ctas%3Aieee%20mvsr%2Cidx%3A1-1-1">

<img src="socialnw/li.png" width="50" height="50">

</a></li>
</ul>
</section>

<!-- <section id="banner-menu">
	
	<section class="banner">
	<div id="myreel"></div>

	<!--
<div class="paginate">
≤ <a href="javascript:firstreel.navigate('back')" style="margin-right:200px;">back</a>  <a href="javascript:firstreel.navigate('forth')">forth</a> ≥
</div>
	</section>
</section> -->

<!-- content -->
	
	<div class="mainContent">
		<div class="content">
		<header>
		<h1>
		Calendar-2014
		</h1>
		</header>
		
			
		
		<article class="a-ieee">
		
	
	<iframe width="100%" src="events/calendar123.pdf" name="display" frameborder="0"></iframe>



		</article>
		
	
			

	<footer class="mainFooter">
		<p>Copyright &copy; 2014 IEEE - MVSR SB .All rights Reserved <span style="padding-left:400px;"> <a href="http://about.me/vinaychenna">Chenna Vinay Kumar</a></span></p>
	</footer>
	
	
	</div>
	


</body>
</html>

