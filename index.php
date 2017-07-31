<!DOCTYPE html>
<html lang="en">
<head>
	<title>IEEE - MVSR SB</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- for menu -->
	<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

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

#myreel{ /*sample CSS for demo*/
border:0px solid black;
}

.paginate{
width: 700px;
margin-top:5px;
font:bold 14px Arial;
text-align:center;
margin-left:auto;
margin-right:auto;
}

</style>

<script src="reelslideshow.js" type="text/javascript">

</script>

<script type="text/javascript">

var firstreel=new reelslideshow({
	wrapperid: "myreel", //ID of blank DIV on page to house Slideshow
	dimensions: [900, 400], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/scroll/PIC-1.jpg"], //["image_path", "optional_link", "optional_target"]
		["images/scroll/PIC-2.jpg", "", "_new"],
		["images/scroll/PIC-3.jpg"],
           ["images/scroll/PIC-4.jpg"],
           ["images/scroll/PIC-5.jpg"],
           ["images/scroll/PIC-6.jpg"],
           ["images/scroll/PIC-7.jpg"],
		["images/scroll/PIC-8.jpg"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2000, cycles:1000, pauseonmouseover:true},
	orientation: "h", //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 300 //transition duration (milliseconds)
})

</script>

<!-- real slide show close -->
	
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



<section id="banner-menu">
	<section class="banner">
	<div id="myreel"></div>

	<!--
<div class="paginate">
≤ <a href="javascript:firstreel.navigate('back')" style="margin-right:200px;">back</a>  <a href="javascript:firstreel.navigate('forth')">forth</a> ≥
</div>
-->
	</section>
</section>

<!-- content -->
	
	<div class="mainContent-home">
		<div class="content">
		
			<aside>
				<h2>
      		  <span style="padding-left:35px;">
		Latest News
		</h2>
	<marquee direction="up" scrollamount="5" onMouseMove="stop()" onMouseOut="play()">
	<p>
	<ul>
	<li>register for IEEE <a href="http://www.ieee.org/membership_services/membership/join/index.html">Join IEEE</a>today become a member and enjoy benefits.</li>
	
    <li>To contribute to advancement of engineering & technology.</li>
	
    <li>To make positive contribution to meet societal needs.</li>
	
	</ul>
	</p></marquee>
		</aside>
		
		<article class="a-mvsrc">
		
		<header>
		<h2><a href="http://mvsrec.edu.in/">About MVSR</a>
		</h2>
		</header>
		<p>
MVSR Engineering College i.e., Maturi Venkata Subba Rao Engineering College, was established in 1981. It is one of the earliest of the colleges in the state of Andhra Pradesh, India, that pioneered engineering education in private sector. The college was founded by Matrusri Education Society, whose members distinguished themselves as engineers, doctors, accountants, lawyers, businessmen and administrators. After completing two decades of excellent service in Technical Education, the college has celebrated its Silver Jubilee year in February 2007.

		</p>
		<p align="right"><a href="aboutcollege.php">Read More..</a></p>
		</article>
		
		<article class="a-mvsrc">
		<header>
		<h2><a href="http://www.ieee.org/index.html">About IEEE</a>
		</h2>
		</header>
		<p>
		In today's analytic world, its not astonishing to see people trying to reason out everything they do and even the things that the people around them do.
﻿</p>
<p>
Many of our fellow mates will surely have a number of questions regarding IEEE and its benefits to them.
Here, we try to answer a few most basic questions that students may have before they join IEEE.
		</p>
		<p align="right"><a href="aboutieee.php">Read More..</a></p>
		</article>

<article class="a-mvsrc">
	<iframe width="545" height="400" src="//www.youtube.com/embed/WBCt8MaNafw" frameborder="0" allowfullscreen></iframe>

		</article>


	<footer class="mainFooter" style="left: 0px; top: 1567px; width: 167%">
		<p>Copyright � 2014 IEEE - MVSR SB .All rights Rese<span style="padding-left:400px;"><a href="http://about.me/vinaychenna">Chenna Vinay Kumar</a></span></p>
	</footer>
	
	</div>
	


</body>
</html>